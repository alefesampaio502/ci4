      <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-body">
              <!-- add content here -->
               <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header"><h4></h4></div>
                    <form action="/formas/store" method="post">
                     <div class="card-body">
                       <div class="form-row">
                         <div class="form-group col-md-6">
                          <label>Nome </label>
                          <select class="custom-select contas_pagar" name="conta_pagar_fornecedor_id">
                        <?php foreach ($pagas as $paga) :?>
                          <option value="<?php echo $paga->['fornecedor_id']?>"></option>
              <?php endforeach; ?>
            </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <label>Ativo</label>
                            <select class="form-control" name="forma_pagamento_ativa">
                              <option value="1">Sim</option>
                              <option value="0">Não</option>
                            </select>
                        </div>  
                    </div>
                    <div class="card-footer">
                            <div class="mb-5" style="float:right;">
                            <button class="btn btn-primary mr-2 "><i class="fas fa-save"></i> Salvar</button>
                            <a class="btn btn-dark float-left mr-3" href="/formas/index"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
                          </div>
                     </div>
                    </form>
                  </div>
                  </div>
             </div>
        </section>              
      </div>

