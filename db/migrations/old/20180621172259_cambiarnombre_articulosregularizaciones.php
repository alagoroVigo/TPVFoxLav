<?php



use Phinx\Migration\AbstractMigration;

class CambiarnombreArticulosregularizaciones extends AbstractMigration
{
     public function up()
    {
        $table = $this->table('articulosRegularizaciones');
        $table->rename('stocksRegularizacion');
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $table = $this->table('stocksRegularizacion');
        $table->rename('articulosRegularizaciones');
    }
}
