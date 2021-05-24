<?php 

namespace App\Controllers;
use App\Models\ClienteModel;
use CodeIgniter\Controller;


class Clientes extends Controller{

    private $cliente_model;

	function __construct()
  	{
  	    $this->cliente_model = new ClienteModel();

  	}
    
  public function index(){
      
        $clientes = $this->cliente_model->findAll();
        $data = ['titulo' => 'Listagem de clientes',];
        $data['clientes'] = $clientes;
        
        echo View('templates/header',$data);
        echo View('clientes/index');
        echo View('templates/footer');

       }

  public function novo(){
     $data = ['titulo' => 'Novo cadastro',];
    	  echo View('templates/header');
        echo View('clientes/novo',$data);
        echo View('templates/footer');

    }



  public function editar($id_cliente){
      $data = ['titulo' => 'Atualizar cadastro',];
     	$cliente = $this->cliente_model->
     									where('id_cliente', $id_cliente)
     									->first();

     	$data['cliente'] = $cliente;

        echo View('templates/header');
        echo View('clientes/editar', $data);
        echo View('templates/footer');

    }
   
  public function excluir($id_cliente){
       
     	$this->cliente_model->where('id_cliente', $id_cliente)
     						->delete();

     	//Cria a mensagem de cadastro
       $session = session();
       $session->setFlashdata('alert', 'success_delete');

     	return redirect()->to('/clientes');

     }



  public function ver($id_cliente){
      $data = ['titulo' => 'Visualizar clientes',];
     	$cliente = $this->cliente_model
     							->where('id_cliente', $id_cliente)
     						    ->first();

        $data['cliente'] = $cliente;
        
        echo View('templates/header',$data);
        echo View('clientes/ver');
        echo View('templates/footer');

     }


    public function store(){
   
       $dados = $this->request->getVar();

        // se vim do controle com paramentro de id ele entra no if
        // e atualiza o cadastro   //agora se não vim o parametro de lar faz o cadastro
      

       //atualiza cadastro
       if (isset($dados['id_cliente'])):
       	 $this->cliente_model->where('id_cliente', $dados['id_cliente'])
       	  					   ->set($dados)
							         ->update();
		                   $session = session();
        $session->setFlashdata('alert', 'success_edita');

       return redirect()->to('/clientes/');

		//return redirect()->to("/clientes/editar/{$dados['id_cliente']}");
	    endif;
	     //Fim do cadastro
	        
        //inicia novo cadastro 
       $this->cliente_model->insert($dados);

       //Cria a mensagem de cadastro
       $session = session();
       $session->setFlashdata('alert', 'success_create');

       return redirect()->to('/clientes/');
    }


}