<?php

use Phinx\Migration\AbstractMigration;

class PermisosTabla extends AbstractMigration {

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
        $permisos = $this->table('permisos');
        $permisos->addColumn('idUsuario', 'integer', ['limit' => 11, 'null' => false])
                ->addColumn('modulo', 'string', ['limit' => 50, 'null' => true])
                ->addColumn('vista', 'string', ['limit' => 50, 'null' => true])
                ->addColumn('accion', 'string', ['limit' => 50, 'null' => true])
                ->addColumn('permiso', 'integer', ['limit' => 1, 'null' => true])
                ->create();
    }

    /*
     * Todo lo que se hace en el rollback
     */

    public function down() {

        $this->dropTable('permisos');
    }

}
