<?php

use Phinx\Migration\AbstractMigration;

class ArticulosRegularizaciones extends AbstractMigration {

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
    public function up() {
        $users = $this->table('articulosRegularizaciones');
        $users->addColumn('idArticulo', 'integer', ['limit' => 11])
                ->addColumn('idTienda', 'integer', ['limit' => 11, 'default' => 1])
                ->addColumn('fechaRegularizacion', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
                ->addColumn('stockActual', 'decimal', ['precision' => 17, 'scale' => 6])
                ->addColumn('stockModif', 'decimal', ['precision' => 17, 'scale' => 6])
                ->addColumn('stockFinal', 'decimal', ['precision' => 17, 'scale' => 6])
                ->addColumn('stockOperacion', 'integer', ['limit' => 1, 'default' => 1])
                ->addColumn('idUsuario', 'integer', ['limit' => 11])
                ->addColumn('idAlbaran', 'integer', ['limit' => 11, 'default' => 0])
                ->addColumn('estado', 'integer', ['limit' => 11, 'default' => 1])
                ->addTimestamps('creado_en', 'actualizado_en')
                ->create();
    }

    /*
     * Todo lo que se hace en el rollback
     */

    public function down() {

        $this->dropTable('articulosRegularizaciones');
    }

}
