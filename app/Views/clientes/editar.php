      <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-body">
              <!-- add content here -->
               <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header mt-4"><h4><?= $titulo;?></h4></div>
                    <form action="/clientes/store" method="post">
                     <div class="card-body">
                       <div class="form-row">
                         <div class="form-group col-md-6">
                          <label>Nome </label>
                          <input type="text" name="nome" class="form-control" value="<?= $cliente['nome'];?>">
                        </div>
                         <div class="form-group col-md-3">
                          <label>Nascimento</label>
                          <input type="date" name="data_de_nascimento" class="form-control" value="<?= $cliente['data_de_nascimento'];?>">          </div>
                         <div class="form-group col-md-3">
                          <label>Telefone</label>
                          <input type="text" name="telefone" class="form-control" value="<?= $cliente['telefone'];?>">
                        </div>                  
                         <div class="form-group col-md-6">
                          <label>Endereço</label>
                          <input type="text" name="endereco" class="form-control" value="<?= $cliente['endereco'];?>">
                         </div>
                        <div class="form-group col-md-3">
                          <label>Limite de crédito</label>
                          <input type="text" name="limite_de_credito" class="form-control" value="<?= $cliente['limite_de_credito'];?>">
                        </div>
                        <div class="form-group col-md-3">
                          <label>Dia de pagamento</label>
                          <input type="text" name="dia_de_pagamento" class="form-control" value="<?= $cliente['limite_de_credito'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label>CPF</label>
                          <input type="text" name="cpf" class="form-control" value="<?= $cliente['cpf'];?>">
                        </div>
                        <div class="form-group col-md-4">
                          <label>Ativo</label>
                            <select class="form-control" name="ativo">
                              
                            <?php if(isset($cliente)):?>
                            
                            <option value="1"<?php echo($cliente['ativo'] == 1 ? 'selected' : 'selecione') ?> >Sim</option>
                            <option value="0"<?php echo($cliente['ativo'] == 0 ? 'selected' : '') ?> 
                            >Não </option>

                            <?php else: ?>

                            <option value="1">Sim</option>
                            <option value="0">Não </option>

                          <?php endif;?>
                            </select>
                        </div>  
                    </div>
                    <div class="card-footer">
                      <input type="hidden" name="id_cliente" value="<?= $cliente['id_cliente'];?>">
                          <div class="mb-5" style="float:right;">
                            <button class="btn btn-primary mr-2 "><i class="fas fa-save"></i> Atualizar</button>
                            <a class="btn btn-dark float-left mr-2" href="/clientes/index"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
                          </div>
                     </div>
                    </form>
                  </div>
                  </div>
             </div>
        </section>              
      </div>

