<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20161218094000 extends AbstractMigration
{
    public function up(Schema $schema)
    {

        // データベースの削除
        $table = $schema->createTable( 'plg_nakweb_test006' );

        $table->addColumn(
            'plg_test_id',
            'integer',
            array(
                'autoincrement' => true
            )
        );

        $table->addColumn(
            'test_name',
            'text',
            array(
                'notnull' => false
            )
        );

        $table->addColumn(
            'test_data',
            'text',
            array()
        );

        $table->setPrimaryKey( array( 'plg_test_id' ) );

    }

    public function down(Schema $schema)
    {

        // データベースの削除
        $schema->dropTable( 'plg_nakweb_test006' );

    }

}