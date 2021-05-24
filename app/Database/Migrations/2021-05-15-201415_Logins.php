<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Logins extends Migration
{
	public function up(){
	$this->forge->addField([
			'id_login' 			=> [
				'type' 				=> 'INT',
				'constraint' 		=> 9,
				'usigned' 			=> true,
				'AUTO_INCREMENT' 	=> true,

			],
			'usuario' => [
				'type' => 'VARCHAR',
				'constraint' 		=> 128
			],
			

			'senha' => [
				'type' => 'VARCHAR',
				'constraint' 		=> 128
			],
			
			'primeiro_nome' => [
				'type' => 'VARCHAR',
				'constraint' 		=> 200
			],
			

			'created_at' => [
				'type' => 'DATETIME'
				
			],
			'updated_at' => [
				'type' => 'DATETIME'
				
			],
			'deleted_at' => [
				'type' => 'DATETIME'
				
			],

		
		]);

		$this->forge->addKey('id_login', true);
		$this->forge->createTable('logins');
	}

	public function down()
	{
		$this->forge->dropTable('logins');
		//migrate:rollback
	}
}
