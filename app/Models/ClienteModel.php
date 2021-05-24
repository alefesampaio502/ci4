<?php

namespace App\models;
use CodeIgniter\Model;
class ClienteModel extends Model{
protected $table = 'clientes';
protected $primaryKey = 'id_cliente';
protected $allowedFields = [
    'id_cliente',
    'nome',
    'data_de_nascimento',
    'cpf',
    'telefone',
    'limite_de_credito',
    'dia_de_pagamento',
    'endereco',
    'ativo'

];

protected $useTimestamps = true;
protected $createdField = 'created_at';
protected $updatedFiled = 'updated_at';
protected $deletedFiled = 'deleted_at';
    
}