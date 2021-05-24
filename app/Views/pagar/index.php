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
                    <a href="/pagar/novo" class="btn btn-primary mr-2 float-right border-6"><i class="fas fa-plus-circle"></i> Cadastrar</a>
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
                             <th class="nosort text-center">Fornecedor</th>
                             <th class="nosort text-center">Valor da conta</th>
                             <th class="nosort text-center">Data de vencimento</th>  
                             <th class="nosort text-center">Situação</th>
                             <th class="nosort text-center">Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <?php foreach($pagar as $paga):?>
                          <tr>
              <td><?= $paga['conta_pagar_id']?></td>
              <td class="text-center"><?= $paga['fornecedor_nome_fantasia']?></td>
              <td class="text-center"><?= $paga['conta_pagar_valor']?></td>
            <td class="text-center"><?= $paga['conta_pagar_data_vencimento']?></td>
              <?php if($paga['conta_pagar_status'] == '1'):?> 
                        <td> <div class="bg-primary text-white text-center text-white">Pagar</div></td>
                          <?php else:?>
                          <td><div class="bg-danger text-center text-white">Pendente</div></td>
                       <?php endif; ?>
              <td class="text-center">
              <a href="/pagar/ver/<?= $paga['conta_pagar_id']?>" class="btn btn-icon btn-warning mr-2"><i class="fas fa-eye"></i></a>
              <a href="/pagar/editar/<?= $paga['conta_pagar_id']?>" class="btn btn-icon btn-primary mr-2"><i class="far fa-edit"></i></a>
              <a href="/pagar/excluir/<?= $paga['conta_pagar_id']?>" class="btn btn-icon btn-danger delete" data-confirm="Tem certeza da exclusão?"><i class="fas fa-trash-alt"></i></a></td>
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
