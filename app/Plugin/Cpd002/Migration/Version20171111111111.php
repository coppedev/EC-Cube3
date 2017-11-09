<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20171111111111 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->createPluginTable($schema);
    }

    public function down(Schema $schema)
    {
        $schema->dropTable('plg_cpd002');
    }

    protected function createPluginTable(Schema $schema)
    {
        $table = $schema->createTable("plg_cpd002");
        $table->addColumn('category_id', 'integer');
        $table->addColumn('content', 'text', array('notnull' => false));
        $table->setPrimaryKey(array('category_id'));
    }
}