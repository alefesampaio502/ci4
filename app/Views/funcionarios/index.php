        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-body">
              <!-- add content here -->
                <div class="row">
                <div class="col-12">
                  <div class="card ">
                    <div class="card-header d-block ">
                      <h4 class="mt-3 mb-3 text-dark">Listagem de funcionario
                      <button type="button" class="btn btn-primary float-right"><a href="/funcionarios/novo" class="text-white"><i class="fas fa-plus-circle mr-1"></i> Novo</a></button>
                      </h4>
                    </div>
                    <div class="card-body">  
                     <?php 

                          $session = session();
                          $alert = $session->get('alert');

                     ?> 

                     <?php if(isset($alert) && $alert == 'success_create'): ?>

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
                               <th class="nosort">RG</th>
                               <th class="nosort">Nascimento</th>
                               <th class="nosort">Telefone</th>
                               <th class="nosort text-center">Ação</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($funcionarios as $funcionario):?> 
                            <tr>
                                <td><?= $funcionario['id_funcionario']?></td>
                                <td><?= $funcionario['nome']?></td>
                                <td><?= $funcionario['cpf']?></td>
                                <td><?= $funcionario['rg']?></td>
                                <td><?= $funcionario['data_de_nascimento']?></td>
                                <td><?= $funcionario['telefone']?></td>
                            </td>
                              <td class="text-center">
                                <a href="/funcionarios/ver/<?= $funcionario['id_funcionario']?>" class="btn btn-icon btn-warning mr-2"><i class="fas fa-eye"></i></a>
                                <a href="/funcionarios/editar/<?= $funcionario['id_funcionario']?>" class="btn btn-icon btn-primary mr-2"><i class="far fa-edit"></i></a>
                                <a href="/funcionarios/excluir/<?= $funcionario['id_funcionario']?>" class="btn btn-icon btn-danger delete" data-confirm="Tem certeza da exclusão?"><i class="fas fa-trash-alt"></i></a></td>
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
