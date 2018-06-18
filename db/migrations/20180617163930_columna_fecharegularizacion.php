<?php

use Phinx\Migration\AbstractMigration;

class ColumnaFecharegularizacion extends AbstractMigration {

    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * http://docs.phinx.org/en/latest/migrations.html
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
    public function change() {
        $users = $this->table('articulosStocks');
        $users->addColumn('fechaRegularizacion', 'datetime', ['null' => true])
                ->addColumn('usuarioRegularizacion', 'integer', ['limit' => 11,'null' => true])
                ->update();
    }

}
