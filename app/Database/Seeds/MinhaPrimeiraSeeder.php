<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MinhaPrimeiraSeeder extends Seeder
{
	public function run()
	{
		$this->db->table('produtos')->insert([
			'nome' 				=> 'Notebook',
			'descricao'			=> 'Descrição do nosso produto para nossa primeira Seed',
			'valor_de_compra' 	=> 3299.9,
			'valor_de_venda' 	=> 1599.99,
			'quantidade' 		=> 209,
			'validade'			=> ''
		]);
	}
}
