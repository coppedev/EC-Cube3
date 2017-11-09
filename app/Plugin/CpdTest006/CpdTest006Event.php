<?php
namespace Plugin\CpdTest006;

use Eccube\Application;
use Eccube\Common\Constant;
use Eccube\Entity\Category;
use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class CpdTest006Event
{

    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    // 入力画面作成
    public function onAdminHomeInit(EventArgs $event)
    {

        // フォーム作成
        $builder = $event->getArgument('builder');

        // フォームの項目追加
        $builder
            ->add(
                'plg_nakweb_test006_name',
                'text',
                array(
                    'required' => false,
                    'label' => 'サンプルタイトル',
                    'mapped' => false,
                    'attr' => array(
                        'placeholder' => '',
                    ),
                )
            )
            ->add(
                'plg_nakweb_test006_data',
                'text',
                array(
                    'required' => false,
                    'label' => 'サンプル内容',
                    'mapped' => false,
                    'attr' => array(
                        'placeholder' => '',
                    ),
                )
            );

    }

    // 入力画面更新処理
    public function onAdminHomeEditComplete(EventArgs $event)
    {

        $app = $this->app;
        $form = $event->getArgument('form');

        // オブジェクト作成
        $inputData = new \Plugin\CpdTest006\Entity\CpdTest006();

        // エンティティを更新
        $inputData->setName( $form[ 'plg_nakweb_test006_name' ]->getData() );
        $inputData->setData( $form[ 'plg_nakweb_test006_data' ]->getData() );

        // DB更新
        $app['orm.em']->persist( $inputData );
        $app['orm.em']->flush( $inputData );

    }

}