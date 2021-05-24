<?php 

namespace App\Controllers;
use App\Models\LoginModel;
use CodeIgniter\Controller;


class Login extends Controller{

    private $login_model;

	function __construct()
  	{
  	    $this->login_model = new LoginModel();

  	}
    
  public function index(){
      
        $logins = $this->login_model->findAll();
        $data['logins'] = $logins;
        
       
        echo View('login/index');
       

       }

  public function autenticar(){

       $dados = $this->request->getVar();
      // dd($dados);


      $usuario = $this->login_model
                      ->where('email', $dados['email'])
                      ->where('senha', md5($dados['senha']))
                      ->first();


      $session = session();
    	     if (!empty($usuario)):
        $session->set('primeiro_nome', $usuario['primeiro_nome']);

        $session->setFlashdata('alert', 'sucesso');

           return redirect()->to('/inicio');

      endif;

      $session->setFlashdata('alert', 'error_login');
           return redirect()->to('/login');

    }

    public function logout(){
      $session = session();
      $session->destroy();
      return redirect()->to('/login');

    }

   public function trocarSenha(){

     echo View('templates/header');
     echo View('login/trocar_senha');
     echo View('templates/footer');


   }

   public function store(){
  $dados = $this->request->getVar();
   $usuario = $this->login_model
                      ->where('id_login',1)
                      ->first();
      $session = session();

    if(md5($dados['senha_atual']) == $usuario['senha']):
         if($dados['nova_senha'] == $dados['confirma']):

                      $this->login_model
                      ->where('id_login', 1)
                      ->set('senha', md5($dados['nova_senha']))
                      ->update();        
          $session->setFlashdata('alert','sucesso');

    return redirect()->to('/login/trocarSenha');


      endif;


    endif;

     $session->setFlashdata('alert','error');

    return redirect()->to('/login/trocarSenha');
   }


  // public function editar($id_login){

  //    	$login = $this->login_model->
  //    									where('id_login', $id_login)
  //    									->first();

  //    	$data['login'] = $login;

  //       echo View('templates/header');
  //       echo View('login/editar', $data);
  //       echo View('templates/footer');

  //   }
   
  // public function excluir($id_login){
       
  //    	$this->login_model->where('id_login', $id_login)
  //    						->delete();

  //    	//Cria a mensagem de cadastro
  //      $session = session();
  //      $session->setFlashdata('alert', 'success_delete');

  //    	return redirect()->to('/login');

  //    }



  // public function ver($id_login){

  //    	$login = $this->login_model
  //    							->where('id_login', $id_login)
  //    						    ->first();

  //       $data['login'] = $login;
        
  //       echo View('templates/header',$data);
  //       echo View('login/ver');
  //       echo View('templates/footer');

  //    }


  //   public function store(){
   
  //      $dados = $this->request->getVar();

  //       // se vim do controle com paramentro de id ele entra no if
  //       // e atualiza o cadastro   //agora se não vim o parametro de lar faz o cadastro
      

  //      //atualiza cadastro
  //      if (isset($dados['id_login'])):
  //      	 $this->login_model->where('id_login', $dados['id_login'])
  //      	  					   ->set($dados)
		// 					         ->update();
		//                    $session = session();
  //       $session->setFlashdata('alert', 'success_edita');

  //      return redirect()->to('/login/');

		// //return redirect()->to("/logins/editar/{$dados['id_login']}");
	 //    endif;
	 //     //Fim do cadastro
	        
  //       //inicia novo cadastro 
  //      $this->login_model->insert($dados);

  //      //Cria a mensagem de cadastro
  //      $session = session();
  //      $session->setFlashdata('alert', 'success_create');

  //      return redirect()->to('/login/');
  //   }


}
