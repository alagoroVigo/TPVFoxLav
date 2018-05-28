<?php

use Phinx\Migration\AbstractMigration;

class ArticulosStocksTabla extends AbstractMigration {

    /**
     *
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
    public function up() {
        $artsStocks = $this->table('articulosStocks');
        $artsStocks->addColumn('idArticulos', 'integer', ['limit' => 11])
                ->addColumn('idTienda', 'integer', ['limit' => 11])
                ->addColumn('stockMin', 'decimal', ['precision' => 17, 'scale' => 6])
                ->addColumn('stockMax', 'decimal', ['precision' => 17, 'scale' => 6])
                ->addColumn('stockOn', 'decimal', ['precision' => 17, 'scale' => 6])
                ->addColumn('fecha_modificado', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
                ->create();
    }

    /*
     * Todo lo que se hace en el rollback
     */

    public function down() {

        $this->dropTable('articulosStocks');
    }

}
