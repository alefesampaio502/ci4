      <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-body">
              <!-- add content here -->
               <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header mt-4"><h4>Atualizar cadastro</h4></div>
                <form action="/funcionarios/store" method="post">
                     <div class="card-body">
                       <div class="form-row">
                         <div class="form-group col-md-6">
                          <label>Nome </label>
                          <input type="text" name="nome" value="<?= $funcionario['nome'];?>" class="form-control">
                        </div>
                         <div class="form-group col-md-3">
                          <label>Nascimento</label>
                          <input type="date" name="data_de_nascimento" value="<?= $funcionario['data_de_nascimento'];?>" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                          <label>Data de admissão</label>
                          <input type="date" name="data_de_contratacao" value="<?= $funcionario['data_de_contratacao'];?>" class="form-control">
                        </div>
                                         
                         <div class="form-group col-md-6">
                          <label>Endereço</label>
                          <input type="text" name="endereco" value="<?= $funcionario['endereco'];?>" class="form-control">
                         </div>
                         <div class="form-group col-md-3">
                          <label>Telefone</label>
                          <input type="text" name="telefone" value="<?= $funcionario['telefone'];?>" class="form-control">
                        </div>  
                        <div class="form-group col-md-3">
                          <label>RG</label>
                          <input type="text" name="rg" value="<?= $funcionario['rg'];?>" class="form-control">
                        </div>
                        
                        <div class="form-group col-md-4">
                          <label>CPF</label>
                          <input type="text" name="cpf" value="<?= $funcionario['cpf'];?>" class="form-control">
                        </div>
                         <div class="form-group col-md-4">
                          <label>Cargo</label>
                          <input type="text" name="cargo" value="<?= $funcionario['cargo'];?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                          <label>Salário</label>
                          <input type="text" name="salario" value="<?= $funcionario['salario'];?>" class="form-control">
                        </div> 
                    </div>
                    <div class="card-footer">
                      <input type="hidden" name="id_funcionario" value="<?= $funcionario['id_funcionario'];?>">
                          <div class="mb-5" style="float:right;">
                            <button class="btn btn-primary mr-2 "><i class="fas fa-save"></i> Salvar</button>
                            <a class="btn btn-dark float-left mr-3" href="/funcionarios/index"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
                          </div>
                     </div>
                    </form>
                  </div>
                  </div>
             </div>
        </section>              
      </div>

