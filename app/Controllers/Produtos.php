<?php 
namespace App\Controllers;
use App\Models\ProdutoModel;
use CodeIgniter\Controller;


class Produtos extends Controller{

    private $produto_model;

    function __construct()
    {
        $this->produto_model = new ProdutoModel();

    }
    
    public function index(){
      
        $produtos = $this->produto_model->findAll();
        $data['produtos'] = $produtos;
        
        echo View('templates/header',$data);
        echo View('produtos/index');
        echo View('templates/footer');

    }

    public function novo(){
        echo View('templates/header');
        echo View('produtos/novo');
        echo View('templates/footer');

    }



     public function editar($id_produto){

        $produto = $this->produto_model->
                                        where('id_produto', $id_produto)
                                        ->first();

        $data['produto'] = $produto;

        echo View('templates/header');
        echo View('produtos/editar', $data);
        echo View('templates/footer');

    }
   
     public function excluir($id_produto){
       
        $this->produto_model->where('id_produto', $id_produto)
                            ->delete();

        //Cria a mensagem de cadastro
       $session = session();
       $session->setFlashdata('alert', 'success_delete');

        return redirect()->to('/produtos');

     }



     public function ver($id_produto){

        $produto = $this->produto_model->
                                  where('id_produto', $id_produto)
                                ->first();

        $data['produto'] = $produto;
         
        // dd($data);
        echo View('templates/header');
        echo View('produtos/ver',$data);
        echo View('templates/footer');

     }





    public function store(){
   
       $dados = $this->request->getVar();

        // se vim do controle com paramentro de id ele entra no if
        // e atualiza o cadastro   //agora se não vim o parametro de lar faz o cadastro
      

       //atualiza cadastro
       if (isset($dados['id_produto'])):
         $this->produto_model->where('id_produto', $dados['id_produto'])
                               ->set($dados)
                               ->update();
        $session = session();
        $session->setFlashdata('alert', 'success_edita');

       return redirect()->to('/produtos/');

        //return redirect()->to("/produtos/editar/{$dados['id_produto']}");
        endif;
         //Fim do cadastro
            
        //inicia novo cadastro 
       $this->produto_model->insert($dados);

       //Cria a mensagem de cadastro
       $session = session();
       $session->setFlashdata('alert', 'success_create');

       return redirect()->to('/produtos/');
    }


}
