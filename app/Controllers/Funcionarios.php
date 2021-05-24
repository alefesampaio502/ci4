<?php 

namespace App\Controllers;
use App\Models\FuncionarioModel;
use CodeIgniter\Controller;


class Funcionarios extends Controller{

    private $funcionario_model;
    //private $cliente_model;

	function __construct()
	{
	   // $this->cliente_model = new ClienteModel();
	    $this->funcionario_model = new FuncionarioModel();

	}
    
    public function index(){
        $data = ['titulo' => 'Listagem funcionário',];
        $funcionarios = $this->funcionario_model->findAll();
        $data['funcionarios'] = $funcionarios;
        
        //dd($data);
        echo View('templates/header', $data);
        echo View('funcionarios/index');
        echo View('templates/footer');

    }

    public function novo(){
        $data = ['titulo' => 'Novo funcionário',];
    	  echo View('templates/header');
        echo View('funcionarios/novo',$data);
        echo View('templates/footer');

    }



     public function editar($id_funcionario){
      $data = ['titulo' => 'atualizar funcionário',];
     	$funcionario = $this->funcionario_model->
     									where('id_funcionario', $id_funcionario)
     									->first();

     	$data['funcionario'] = $funcionario;

        echo View('templates/header');
        echo View('funcionarios/editar', $data);
        echo View('templates/footer');

    }
   
     public function excluir($id_funcionario){
       
     	$this->funcionario_model->where('id_funcionario', $id_funcionario)
     						->delete();

     	//Cria a mensagem de cadastro
       $session = session();
       $session->setFlashdata('alert', 'success_delete');

     	return redirect()->to('/funcionarios');

     }



     public function ver($id_funcionario){
      $data = ['titulo' => 'Visualizar funcionário',];
     	$funcionario = $this->funcionario_model
     							->where('id_funcionario', $id_funcionario)
     						    ->first();

        $data['funcionario'] = $funcionario;
        
        echo View('templates/header',$data);
        echo View('funcionarios/ver');
        echo View('templates/footer');

     }





    public function store(){
   
       $dados = $this->request->getVar();

        // se vim do controle com paramentro de id ele entra no if
        // e atualiza o cadastro   //agora se não vim o parametro de lar faz o cadastro
      

       //atualiza cadastro
       if (isset($dados['id_funcionario'])):
       	 $this->funcionario_model->where('id_funcionario', $dados['id_funcionario'])
       	  					   ->set($dados)
							   ->update();
		$session = session();
        $session->setFlashdata('alert', 'success_edita');

       return redirect()->to('/funcionarios/');

		//return redirect()->to("/clientes/editar/{$dados['id_cliente']}");
	    endif;
	     //Fim do cadastro
	        
        //inicia novo cadastro 
       $this->funcionario_model->insert($dados);

       //Cria a mensagem de cadastro
       $session = session();
       $session->setFlashdata('alert', 'success_create');

       return redirect()->to('/funcionarios/');
    }


}