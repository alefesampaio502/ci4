<?php

namespace App\models;
use CodeIgniter\Model;
class FornecedorModel extends Model{

protected $table = 'fornecedores';
protected $primaryKey = 'fornecedor_id';
protected $allowedFields = [
    'fornecedor_id',
    'fornecedor_data_cadastro',
    'fornecedor_razao',
    'fornecedor_nome_fantasia',
    'fornecedor_cnpj',
    'fornecedor_ie',
    'fornecedor_telefone',
    'fornecedor_celular',
    'fornecedor_email',
    'fornecedor_contato',
    'fornecedor_endereco',
    'fornecedor_numero_endereco',
    'fornecedor_bairro',
    'fornecedor_complemento',
    'fornecedor_cidade',
    'fornecedor_estado',
    'fornecedor_ativo',
    'fornecedor_obs',
    'fornecedor_data_alteracao'
    ];

protected $useTimestamps = true;
protected $createdField = 'created_at';
protected $updatedFiled = 'updated_at';
protected $deletedFiled = 'deleted_at';



}