<?php
/**
 * This file is part of EC-CUBE
 */

namespace Plugin\CpdTest006;

use Eccube\Plugin\AbstractPluginManager;

class PluginManager extends AbstractPluginManager
{

    public function install($config, $app)
    {
        // データベース作成
        $this->migrationSchema( $app, __DIR__ . '/Migration', $config['code'] );
    }

    public function uninstall($config, $app)
    {
        // データベース削除
        $this->migrationSchema( $app, __DIR__ . '/Migration', $config['code'], 0 );
    }

    public function enable($config, $app)
    {
        // プラグイン有効処理
        $this->exeInputLog( $app, 'enable' );
    }

    public function disable($config, $app)
    {
        // プラグイン無効処理
        $this->exeInputLog( $app, 'disable' );
    }

    public function update($config, $app)
    {
    }

    public function exeInputLog($app, $eventType)
    {

        // 登録情報
        $name = $eventType;
        $data = $eventType . ' : ' . date( 'Y/m/d H:i:s' );

        $inputData = new \Plugin\CpdTest006\Entity\CpdTest006();
        $inputData->setName( $name );
        $inputData->setData( $data );

        // DB更新
        $app['orm.em']->persist($inputData);
        $app['orm.em']->flush($inputData);

    }

}