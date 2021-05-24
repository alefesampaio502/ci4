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
                  <div class="card-body">
                       <div class="form-row">
                         <div class="form-group col-md-6">
                          <label>Nome</label>
                          <input type="text" name="nome" readonly="" value="<?= $funcionario['nome'];?>" class="form-control">
                        </div>
                         <div class="form-group col-md-3">
                          <label>Nascimento</label>
                          <input type="date" readonly="" name="data_de_nascimento" value="<?= $funcionario['data_de_nascimento'];?>" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                          <label>Data de admissão</label>
                          <input type="date" readonly="" name="data_de_contratacao" value="<?= $funcionario['data_de_contratacao'];?>" class="form-control">
                        </div>                                         
                         <div class="form-group col-md-6">
                          <label>Endereço</label>
                          <input type="text" readonly="" name="endereco" value="<?= $funcionario['endereco'];?>" class="form-control">
                         </div>
                         <div class="form-group col-md-3">
                          <label>Telefone</label>
                          <input type="text" readonly="" name="telefone" value="<?= $funcionario['telefone'];?>" class="form-control">
                        </div>  
                        <div class="form-group col-md-3">
                          <label>RG</label>
                          <input type="text" readonly="" name="rg" value="<?= $funcionario['rg'];?>" class="form-control">
                        </div>
                        
                        <div class="form-group col-md-4">
                          <label>CPF</label>
                          <input type="text" readonly="" name="cpf" value="<?= $funcionario['cpf'];?>" class="form-control">
                        </div>
                         <div class="form-group col-md-4">
                          <label>Cargo</label>
                          <input type="text" readonly="" name="cargo" value="<?= $funcionario['cargo'];?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                          <label>Salário</label>
                          <input type="text" readonly="" name="salario" value="<?= $funcionario['salario'];?>" class="form-control">
                        </div> 
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-dark float-left mr-3" href="/funcionarios/index"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
                          
                     </div>
                </div>
                </div>
             </div>
        </section>              
      </div>

