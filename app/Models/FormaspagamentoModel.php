<?php

namespace App\Models;
use CodeIgniter\Model;
class FormaspagamentoModel extends Model{
protected $table = 'formas_pagamentos';
protected $primaryKey = 'forma_pagamento_id';
protected $allowedFields = [
    'forma_pagamento_id',
    'forma_pagamento_nome',
    'forma_pagamento_ativa',
    'forma_pagamento_data_alteracao',
    
];

protected $useTimestamps = true;
protected $createdField = 'created_at';
protected $updatedFiled = 'updated_at';
protected $deletedFiled = 'deleted_at';
    
}