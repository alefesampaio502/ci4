<?php 
namespace App\Controllers;
use App\Models\FornecedorModel;
use App\Models\PagarModel;
use CodeIgniter\Controller;


class Pagar extends Controller{

    private $pagar_model;
    private $forncedor_model;

	function __construct()
  	{
  	    $this->pagar_model = new PagarModel();
        $this->forncedor_model = new FornecedorModel();

  	}
    
  public function index(){
       $pagar = $this->pagar_model->get_Pagar();
        //$pagar = $this->pagar_model->get_all_pagar();

        $data = ['titulo' => 'Listagem de contas a pagar',];
        $data['pagar'] = $pagar;
 
        //dd($pagar);
        echo View('templates/header');
        echo View('pagar/index',$data);
        echo View('templates/footer');

       }

  public function novo(){
       $pagar = $this->pagar_model->get_Pagar();
       $data = ['titulo' => 'Novo cadastro de contas a pagar',];
        $data['pagar'] = $pagar;
       //dd($data);
    	  echo View('templates/header');
        echo View('pagar/novo',$data);
        echo View('templates/footer');

    }

  public function editar($conta_pagar_id){
      $data = ['titulo' => 'Atualizar pagar de pagamento',];
        $pagar = $this->pagar_model->
                          where('conta_pagar_id', $conta_pagar_id)
                          ->first();
        $pagar = $this->pagar_model->get_Pagar();

        $data['pagar'] = $pagar;
        
       // dd($data);
        echo View('templates/header');
        echo View('pagar/editar', $data);
        echo View('templates/footer');

    }

   
  public function excluir($conta_pagar_id){
       
     	$this->pagar_model->where('conta_pagar_id', $conta_pagar_id)
     						->delete();

     	//Cria a mensagem de cadastro
       $session = session();
       $session->setFlashdata('alert', 'success_delete');
     	 return redirect()->to('/pagar');

     }



  public function ver($id_cliente){
      $pagar = $this->pagar_model->get_Pagar();
      $data = ['titulo' => 'Visualizar conta a pagar',];
     	$pagar = $this->pagar_model
   							->where('conta_pagar_id', $conta_pagar_id)
   						  ->first();

        $data['pagar'] = $pagar;  
        echo View('templates/header',$data);
        echo View('pagar/ver');
        echo View('templates/footer');

     }


    public function store(){
   
       $dados = $this->request->getVar();

        // se vim do controle com paramentro de id ele entra no if
        // e atualiza o cadastro   //agora se não vim o parametro de lar faz o cadastro
       //atualiza cadastro
       if (isset($dados['conta_pagar_id'])):
       	 $this->pagar_model->where('conta_pagar_id', $dados['conta_pagar_id'])
       	  					   ->set($dados)
							         ->update();
		                   $session = session();
        $session->setFlashdata('alert', 'success_edita');

       return redirect()->to('/pagar/');

		//return redirect()->to("/clientes/editar/{$dados['id_cliente']}");
	    endif;
	     //Fim do cadastro
        //inicia novo cadastro 
       $this->pagar_model->insert($dados);

       //Cria a mensagem de cadastro
       $session = session();
       $session->setFlashdata('alert', 'success_create');

       return redirect()->to('/pagar/');
    }


}