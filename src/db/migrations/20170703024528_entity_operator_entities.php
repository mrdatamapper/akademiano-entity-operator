<?php

use Phinx\Migration\AbstractMigration;

class EntityOperatorEntities extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $sql = <<<SQL
        
CREATE TABLE entities
(
  id bigint NOT NULL,
  created timestamp without time zone,
  changed timestamp without time zone,
  active boolean DEFAULT true,
  owner bigint,
  CONSTRAINT entities_pkey PRIMARY KEY (id)
);
SQL;
        $this->execute($sql);

        $sql = "CREATE SEQUENCE uuid_complex_short_tables_1";
        $this->execute($sql);
    }
}
