<?php
namespace Plugin\Cpd002;

use Eccube\Application;
use Eccube\Common\Constant;
use Eccube\Entity\Category;
use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;
use Plugin\Cpd002\Entity\Cpd002;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class Cpd002Event
{
    /**
     * プラグインが追加するフォーム名
     */
    const CPD002_TEXTAREA_NAME = 'plg_cpd002';

    /** @var \Eccube\Application $app */
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function onAdminProductCategoryInit(EventArgs $event)
    {
        /** @var Category $target_category */
        $TargetCategory = $event->getArgument('TargetCategory');
        $id = $TargetCategory->getId();

        $Cpd002 = null;

        // IDの有無で登録か編集かを判断
        if ($id) {
            // カテゴリ編集時は初期値を取得
            $Cpd002 = $this->app['cpd002.repository.cpd002']->find($id);
        }

         // カテゴリ新規登録またはコンテンツが未登録の場合
        if (is_null($Cpd002)) {
            $Cpd002 = new Cpd002();
        }

        // フォームの追加
        /** @var FormInterface $builder */
        // FormBuildeの取得
        $builder = $event->getArgument('builder');
        // 項目の追加
        $builder->add(
            self::CPD002_TEXTAREA_NAME,
            'textarea',
            array(
                'required' => false,
                'label' => false,
                'mapped' => false,
                'attr' => array(
                    'placeholder' => 'コンテンツを入力してください(HTMLタグ使用可)',
                ),
            )
        );

        // 初期値を設定
        $builder->get(self::CPD002_TEXTAREA_NAME)->setData($Cpd002->getContent());

    }

    /**
     * 管理画面：カテゴリ登録画面で、登録処理を行う.
     *
     * @param EventArgs $event
     */
    public function onAdminProductCategoryEditComplete(EventArgs $event)
    {
        /** @var Application $app */
        $app = $this->app;
        /** @var Category $target_category */
        $TargetCategory = $event->getArgument('TargetCategory');
        /** @var FormInterface $form */
        $form = $event->getArgument('form');

        // 現在のエンティティを取得
        $id = $TargetCategory->getId();
        // フォーム値のIDをもとに登録カテゴリ情報を取得
        $Cpd002 = $app['cpd002.repository.cpd002']->find($id);
        if (is_null($Cpd002)) {
            $Cpd002 = new Cpd002();
        }

        // エンティティを更新
        $Cpd002
            ->setId($id)
            ->setContent($form[self::CPD002_TEXTAREA_NAME]->getData());

        // DB更新
        $app['orm.em']->persist($Cpd002);
        $app['orm.em']->flush($Cpd002);
    }

    /**
     * 商品一覧画面にカテゴリコンテンツを表示する.
     *
     * @param TemplateEvent $event
     */
    public function onRenderProductList(TemplateEvent $event)
    {
        $parameters = $event->getParameters();

        // カテゴリIDがない場合、レンダリングしない
        if (is_null($parameters['Category'])) {
            return;
        }

        // 登録がない、もしくは空で登録されている場合、レンダリングをしない
        $Category = $parameters['Category'];
        $Cpd002 = $this->app['cpd002.repository.cpd002']
            ->find($Category->getId());
        if (is_null($Cpd002) || $Cpd002->getContent() == '') {
            return;
        }

        // twigコードにカテゴリコンテンツを挿入
        $snipet = '<div class="row">{{ Cpd002.content | raw }}</div>';
        $search = '<div id="result_info_box"';
        $replace = $snipet.nl2br("\n").$search;
        $source = str_replace($search, $replace, $event->getSource());
        $event->setSource($source);

        // twigパラメータにカテゴリコンテンツを追加
        $parameters['Cpd002'] = $Cpd002;
        $event->setParameters($parameters);

    }
}