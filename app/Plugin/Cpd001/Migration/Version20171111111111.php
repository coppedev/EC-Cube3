<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20171111111111 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // データベース作成
        $table = $schema->createTable('plg_cpd001');
        $table->addColumn('id', 'integer');
        $table->addColumn('content', 'text', array('notnull' => false));
        $table->setPrimaryKey(array('id'));
    }

    public function down(Schema $schema)
    {
        // データベース削除
        $schema->dropTable('plg_cpd001');
    }
}

// {
//     public function up(Schema $schema)
//     {
//         $this->createPluginTable($schema);
//     }

//     public function down(Schema $schema)
//     {
//         $schema->dropTable('plg_cpd001');
//     }

//     protected function createPluginTable(Schema $schema)
//     {
//         $table = $schema->createTable("plg_cpd001");
//         $table->addColumn('id', 'integer');
//         $table->addColumn('content', 'text', array('notnull' => false));
//         $table->setPrimaryKey(array('id'));
//     }
// }