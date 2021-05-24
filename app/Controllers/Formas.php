<?php 
namespace App\Controllers;
use App\Models\FormaspagamentoModel;
use CodeIgniter\Controller;


class Formas extends Controller{

    private $formas_model;

    function __construct()
    {
        $this->formas_model = new FormaspagamentoModel();

    }
    
    public function index(){
        $data = ['titulo' => 'Formas de pagamento',];
        $formas = $this->formas_model->findAll();
        $data['formas'] = $formas;
        
        echo View('templates/header',$data);
        echo View('formas/index');
        echo View('templates/footer');

    }

    public function novo(){
      $data = ['titulo' => 'Cadastro de pagamento',];
        echo View('templates/header');
        echo View('formas/novo', $data);
        echo View('templates/footer');

    }

     public function editar($forma_pagamento_id){
      $data = ['titulo' => 'Atualizar formas de pagamento',];

        $formas = $this->formas_model->
                          where('forma_pagamento_id', $forma_pagamento_id)
                          ->first();

        $data['formas'] = $formas;

        echo View('templates/header');
        echo View('formas/editar', $data);
        echo View('templates/footer');

    }
   
     public function excluir($forma_pagamento_id){
       
        $this->formas_model->where('forma_pagamento_id', $forma_pagamento_id)
                            ->delete();
        //Cria a mensagem de cadastro
       $session = session();
       $session->setFlashdata('alert', 'success_delete');

        return redirect()->to('/formas');

     }

     public function ver($forma_pagamento_id){
        $data = ['titulo' => 'Visualizar formas de pagamento',];
        $formas = $this->formas_model->
                                  where('forma_pagamento_id', $forma_pagamento_id)
                                ->first();

        $data['formas'] = $formas;
         
        // dd($data);
        echo View('templates/header');
        echo View('formas/ver',$data);
        echo View('templates/footer');

     }

   
    public function store(){
   
       $dados = $this->request->getVar();
        // se vim do controle com paramentro de id ele entra no if
        // e atualiza o cadastro   //agora se não vim o parametro de lar faz o cadastro
       //atualiza cadastro
       if (isset($dados['forma_pagamento_id'])):
         $this->formas_model->where('forma_pagamento_id', $dados['forma_pagamento_id'])
                       ->set($dados)
                       ->update();
                       $session = session();
        $session->setFlashdata('alert', 'success_edita');
          return redirect()->to('/formas/');
      //return redirect()->to("/clientes/editar/{$dados['id_cliente']}");
      endif;
       //Fim do cadastro         
        //inicia novo cadastro 
       $this->formas_model->insert($dados);

       //Cria a mensagem de cadastro
       $session = session();
       $session->setFlashdata('alert', 'success_create');
       return redirect()->to('/formas/');
    }



}
