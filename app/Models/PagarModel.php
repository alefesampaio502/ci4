<?php

namespace App\models;
use CodeIgniter\Model;
class PagarModel extends Model{

protected $table = 'contas_pagar';
protected $primaryKey = 'conta_pagar_id';
protected $allowedFields = [
    'conta_pagar_id',
    'conta_pagar_data_vencimento',
    'conta_pagar_data_pagamento',
    'conta_pagar_valor',
    'conta_pagar_status',
    'conta_pagar_obs'
    ];

protected $useTimestamps = true;
protected $createdField = 'created_at';
protected $updatedFiled = 'updated_at';
protected $deletedFiled = 'deleted_at';

public function get_Pagar(){

	return $this->db->table('contas_pagar')
	->join('fornecedores', 'fornecedor_id = conta_pagar_fornecedor_id')
	->get()->getResultArray();
   }



}