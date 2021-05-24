   <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- add content here -->
              <div class="row">
              <div class="col-12">
                <div class="card ">
                  <div class="card-header d-block ">
                    <h4 class="mt-3 mb-3 text-dark"><?= $titulo;?>
                    <a href="/clientes/novo" class="btn btn-primary mr-2 float-right border-6"><i class="fas fa-plus-circle"></i> Cadastrar</a>
                    </h4>
                  </div>
                  <div class="card-body">  
                   <?php 
                        $session = session();
                        $alert = $session->get('alert');

                   ?> 

                   <?php if(isset($alert) && $alert == 'sucesso'): ?>

                     <!--alerta-->
                    <div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                      <i class="fas fa-thumbs-up mr-2"></i><strong>Atenção:</strong> Dados salvo com sucesso! 
                      </div>
                    </div> 
                    <!--fim -->
                   <?php endif;?>
                   <?php if(isset($alert) && $alert == 'success_edita'): ?>

                     <!--alerta-->
                    <div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                      <i class="fas fa-thumbs-up mr-2"></i><strong>Atenção:</strong> Dados atualizado com sucesso! 
                      </div>
                    </div> 
                    <!--fim -->
                   <?php endif;?>

                    <?php if(isset($alert) && $alert == 'success_delete'): ?>

                     <!--alerta-->
                    <div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                      <i class="fas fa-thumbs-up mr-2"></i><strong>Atenção:</strong> Dados apagado com sucesso! 
                      </div>
                    </div> 
                    <!--fim -->
                   <?php endif;?>
                    <div class="table-responsive">
                      <table class="table table-striped data-table" >
                        <thead>
                          <tr>                           
                             <th class="nosort">#</th>
                             <th class="nosort">Nome</th>
                             <th class="nosort">CPF</th>
                             <th class="nosort">CPF</th>
                             <th class="nosort">Nascimento</th>
                             <th class="nosort">Limite de crédito</th>
                             <th class="nosort text-center">Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($clientes as $cliente):?>
                          <tr>
                              <td><?= $cliente['id_cliente']?></td>
                              <td><?= $cliente['nome']?></td>
                              <td><?= $cliente['cpf']?></td>
                              <td><?= $cliente['data_de_nascimento']?></td>
                              <td><?= $cliente['telefone']?></td>
                              <td><?= $cliente['limite_de_credito']?></td>
                          </td>
                            <td class="text-center">
                              <a href="/clientes/ver/<?= $cliente['id_cliente']?>" class="btn btn-icon btn-warning mr-2"><i class="fas fa-eye"></i></a>
                              <a href="/clientes/editar/<?= $cliente['id_cliente']?>" class="btn btn-icon btn-primary mr-2"><i class="far fa-edit"></i></a>
                              <a href="/clientes/excluir/<?= $cliente['id_cliente']?>" class="btn btn-icon btn-danger delete" data-confirm="Tem certeza da exclusão?"><i class="fas fa-trash-alt"></i></a></td>
                          </tr>
                          <?php endforeach;?>

                        </tbody>
                      </table>
                    </div>
                  </div>
          </div>
      </div>

          </div>
        </section>

      </div>
