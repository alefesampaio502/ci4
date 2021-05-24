      <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-body">
              <!-- add content here -->
               <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header mt-2"><h4>Novo cadastro</h4></div>
                    <form action="/produtos/store" method="post">
                     <div class="card-body">
                       <div class="form-row">
                         <div class="form-group col-md-6">
                          <label>Nome </label>
                          <input type="text" name="nome" class="form-control">
                        </div>
                         <div class="form-group col-md-3">
                          <label>Quantidade</label>
                          <input type="text" name="quantidade" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                          <label>Quantidade mínima</label>
                          <input type="text" name="qtde_minima" class="form-control">
                        </div>
                                         
                         <div class="form-group col-md-3">
                          <label>Valor da compra</label>
                          <input type="text" name="valor_de_compra" class="form-control">
                         </div>
                         <div class="form-group col-md-3">
                          <label>Valor da venda</label>
                          <input type="text" name="valor_de_venda" class="form-control">
                        </div>  
                        <div class="form-group col-md-3">
                          <label>Margem de lucro</label>
                          <input type="text" name="lucro" class="form-control">
                        </div>
                        
                        <div class="form-group col-md-3">
                          <label>Validade</label>
                          <input type="date" name="validade" class="form-control">
                        </div>
                       
                        <div class="form-group purple-border col-md-12">
                          <label>Descrição do produto</label>
                        <textarea class="md-textarea form-control" name="descricao" rows="4"></textarea>
                        </div>
                         
                    </div>
                    <div class="card-footer">
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

