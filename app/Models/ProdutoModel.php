<?php

namespace App\models;
use CodeIgniter\Model;
class ProdutoModel extends Model{
protected $table = 'produtos';
protected $primaryKey = 'id_produto';
protected $allowedFields = [
    'id_produto',
    'nome',
    'descricao',
    'valor_de_compra',
    'valor_de_venda',
    'quantidade',
    'qtde_minima',
    'validade',
    'lucro',

];

protected $useTimestamps = true;
protected $createdField = 'created_at';
protected $updatedFiled = 'updated_at';
protected $deletedFiled = 'deleted_at';
    
}