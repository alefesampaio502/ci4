      <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-body">
              <!-- add content here -->
               <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header"><h4><?= $titulo;?></h4></div>
                    <form action="/clientes/store" method="post">
                     <div class="card-body">
                       <div class="form-row">
                         <div class="form-group col-md-6">
                          <label>Nome </label>
                          <input type="text" name="nome" class="form-control">
                        </div>
                         <div class="form-group col-md-3">
                          <label>Nascimento</label>
                          <input type="date" name="data_de_nascimento" class="form-control">          
                        </div>
                         <div class="form-group col-md-3">
                          <label>Telefone</label>
                          <input type="text" name="telefone" class="form-control">
                        </div>                  
                         <div class="form-group col-md-6">
                          <label>Endereço</label>
                          <input type="text" name="endereco" class="form-control">
                         </div>
                        <div class="form-group col-md-3">
                          <label>Limite de crédito</label>
                          <input type="text" name="limite_de_credito" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                          <label>Dia de pagamento</label>
                          <input type="text" name="dia_de_pagamento" class="form-control" >
                        </div>
                        <div class="form-group col-md-6">
                          <label>CPF</label>
                          <input type="text" name="cpf" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                          <label>Ativo</label>
                            <select class="form-control" name="ativo">
                              <option value="1">Sim</option>
                              <option value="0">Não</option>
                            </select>
                        </div>  
                    </div>
                    <div class="card-footer">
                            <div class="mb-5" style="float:right;">
                            <button class="btn btn-primary mr-2 "><i class="fas fa-save"></i> Salvar</button>
                            <a class="btn btn-dark float-left mr-3" href="/clientes/index"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
                          </div>
                     </div>
                    </form>
                  </div>
                  </div>
             </div>
        </section>              
      </div>

