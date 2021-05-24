<?php

namespace App\models;
use CodeIgniter\Model;
class FuncionarioModel extends Model{
protected $table = 'funcionarios';
protected $primaryKey = 'id_funcionario';
protected $allowedFields = [
    'id_funcionario',
	'nome',
	'data_de_nascimento',
	'cpf',
	'rg',
	'telefone',
	'endereco',
	'data_de_contratacao',
	'cargo',
	'salario',
	'dia_de_pagamento',

];

protected $useTimestamps = true;
protected $createdField = 'created_at';
protected $updatedFiled = 'updated_at';
protected $deletedFiled = 'deleted_at';
    
}