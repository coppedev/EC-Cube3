<?php

namespace Plugin\Cpd001;

use Eccube\Application;
use Eccube\Common\Constant;
use Eccube\Entity\Category;
use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;
use Plugin\CategoryContent\Entity\CategoryContent;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class Cpd001Event
{
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function onFrontShoppingInit(EventArgs $event)
    {
        // フォーム作成
        $builder = $event->getArgument('builder');

        // フォームの項目追加
        $builder
            ->add(
                'plg_cpd001_content',
                'text',
                array(
                    'required' => false,
                    'label' => 'CPD001フォーム',
                    'mapped' => false,
                    'attr' => array(
                        'placeholder' => 'CPD001入力',
                    ),
                )
            );
    }

    // public function onFrontShoppingConfirmInit(EventArgs $event)
    // {
    //     // フォーム作成
    //     $builder = $event->getArgument('builder');

    //     // フォームの項目追加
    //     $builder
    //         ->add(
    //             'plg_cpd001_content',
    //             'text',
    //             array(
    //                 'required' => false,
    //                 'label' => false,
    //                 'mapped' => false,
    //                 'attr' => array(
    //                     'placeholder' => 'コンテンツを入力',
    //                 ),
    //             )
    //         );
    // }

    public function onFrontShoppingCompleteInit(EventArgs $event)
    {
        $app = $this->app;
        $form = $event->getArgument('form');

        // オブジェクト作成
        $inputData = new \Plugin\Cpd001\Entity\Cpd001();

        // エンティティを更新
        $inputData->setContent($form['plg_cpd001_content']->getData());

        // DB更新
        $app['orm.em']->persist($inputData);
        $app['orm.em']->flush($inputData);
    }
}