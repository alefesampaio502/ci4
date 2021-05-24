<?php

namespace App\Controllers;
use App\Models\ClienteModel;
use App\Models\FuncionarioModel;
use App\Models\ProdutoModel;
use App\Models\LoginModel;
use CodeIgniter\Controller;


/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class Inicio extends Controller
{
	 private $cliente_model;
	 private $funcionario_model;
	 private $produto_model;
	 private $login_model;
     
      function __construct(){

      	$this->cliente_model = new ClienteModel();
      	$this->funcionario_model = new FuncionarioModel();
      	$this->produto_model = new ProdutoModel();
      	$this->login_model = new LoginModel();

      }


	public function index(){

		$total_de_clientes = count($this->cliente_model->findAll());
		$total_de_funcionario = count($this->funcionario_model->findAll());
		$total_de_produto = count($this->produto_model->findAll());
		$total_de_usuarios = count($this->login_model->findAll());
			 
	

		$data['total_de_clientes'] = $total_de_clientes;
		$data['total_de_funcionario'] = $total_de_funcionario;
		$data['total_de_produto'] = $total_de_produto;
		$data['total_de_usuarios'] = $total_de_usuarios;

       //$funcionarios = $this->funcionario_model->findAll();
      //  $data['funcionarios'] = $funcionarios;


		echo View('templates/header');
		echo View('inicio/index', $data);
		echo View('templates/footer',);

	}

}

