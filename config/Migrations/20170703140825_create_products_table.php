<?php

use Phinx\Migration\AbstractMigration;

class CreateProductsTable extends AbstractMigration
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
    public function change()
    {
        $table = $this->table('products');
        $table->addColumn('name', 'string')
              ->addColumn('price', 'decimal', ['precision' => 5, 'scale' => 2, 'signed' => 'disable'])  
              ->addColumn('description', 'text')
              ->addColumn('date_elaboration', 'datetime')
              ->addColumn('date_expiration', 'datetime')
              ->addColumn('photo', 'string')
              ->addColumn('photo_dir', 'string')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->create();
    }
}