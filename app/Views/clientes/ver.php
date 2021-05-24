      <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-body">
              <!-- add content here -->
             <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header mt-4"><h4>Visualizar cadastro</h4></div>
                    <div class="card-body">
                     <div class="form-row">
                       <div class="form-group col-md-6">
                        <label>Nome </label>
                        <input type="text" class="form-control" value="<?= $cliente['nome'];?>"readonly="">
                      </div>
                       <div class="form-group col-md-3">
                        <label>Nascimento</label>
                        <input type="date"  class="form-control" value="<?= $cliente['data_de_nascimento'];?>"readonly="">          </div>
                       <div class="form-group col-md-3">
                        <label>Telefone</label>
                        <input type="text" class="form-control" value="<?= $cliente['telefone'];?>"readonly="">
                      </div>                  
                       <div class="form-group col-md-6">
                        <label>Endereço</label>
                        <input type="text"  class="form-control" value="<?= $cliente['endereco'];?>"readonly="">
                       </div>
                      <div class="form-group col-md-3">
                        <label>Limite de crédito</label>
                        <input type="text" class="form-control" value="<?= $cliente['limite_de_credito'];?>"readonly="">
                      </div>
                      <div class="form-group col-md-3">
                        <label>Dia de pagamento</label>
                        <input type="text" class="form-control" value="<?= $cliente['limite_de_credito'];?>" readonly="">
                      </div>
                      <div class="form-group col-md-6">
                        <label>CPF</label>
                        <input type="text" class="form-control" value="<?= $cliente['cpf'];?>"readonly="">
                      </div>
                      <div class="form-group col-md-4">
                        <label>Ativo</label>
                          <select class="form-control" readonly="">
                          <option value="<?php echo $cliente['ativo'];?> " readonly="">Sim</option>
                          
                          </select>
                      </div>  
                  </div>
                  <div class="card-footer">
                     <div class="mb-5" style="float:right;">     
                            <a class="btn btn-dark float-right mr-3" href="/clientes/index"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
                          </div>
                    
                   </div>
                </div>
                </div>
             </div>
        </section>              
      </div>

