<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FormasPagamentos extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'forma_pagamento_id' 			=> [
				'type' 				=> 'INT',
				'constraint' 		=> 9,
				'usigned' 			=> true,
				'AUTO_INCREMENT' 	=> true,

			],
			'forma_pagamento_nome' => [
				'type' => 'VARCHAR',
				'constraint' 		=> 128
			],
			

			'forma_pagamento_ativa' => [
				'type' => 'VARCHAR',
				'constraint' 		=> 1
			],
			

			'forma_pagamento_data_alteracao' => [
				'type' => 'timestamp'
				
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

		$this->forge->addKey('forma_pagamento_id', true);
		$this->forge->createTable('formas_pagamentos');
	}

	public function down()
	{
		$this->forge->dropTable('formas_pagamentos');
	}
}
