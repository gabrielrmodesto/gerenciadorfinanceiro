<?php

use Phinx\Migration\AbstractMigration;

class CreateCategoryCosts extends AbstractMigration
{
	//gerar estrutura e sql para bd
    public function up(){
		$this->table('category_costs')
			 ->addColumn('name','string')
			 ->addColumn('created_at','datetime')
			 ->addColumn('updated_at','datetime')
			 ->save();
	}
	//desfazer o que up faz sem preciso mexer no bd
	public function down(){
		$this->dropTable('category_costs');
	}
}
