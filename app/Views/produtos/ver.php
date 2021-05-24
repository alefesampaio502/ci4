        <!-- Main Content -->
          <div class="main-content">
            <section class="section">
              <div class="section-body">
                <!-- add content here -->
                 <div class="row">
                  <div class="col-12">
                    <div class="card">
                       <div class="card-body">
                          <div class="form-row">
                           <div class="form-group col-md-6">
                            <label>Nome </label>
                            <input type="text" name="nome" value="<?= $produto['nome'];?>" class="form-control" readonly="" >
                          </div>
                           <div class="form-group col-md-3">
                            <label>Quantidade</label>
                            <input type="text" name="quantidade" value="<?= $produto['quantidade'];?>" class="form-control"  readonly="">
                          </div>
                          <div class="form-group col-md-3">
                            <label>Quantidade mínima</label>
                            <input type="text" name="qtde_minima" value="<?= $produto['qtde_minima'];?>" class="form-control"  readonly="">
                          </div>
                                           
                           <div class="form-group col-md-3">
                            <label>Valor da compra</label>
                            <input type="text" name="valor_de_compra" value="<?= $produto['valor_de_compra'];?>" class="form-control"  readonly="">
                           </div>
                           <div class="form-group col-md-3">
                            <label>Valor da venda</label>
                            <input type="text" name="valor_de_venda" value="<?= $produto['valor_de_venda'];?>" class="form-control"  readonly="">
                          </div>  
                          <div class="form-group col-md-3">
                            <label>Margem de lucro</label>
                            <input type="text" name="lucro" value="<?= $produto['lucro'];?>" class="form-control"  readonly="">
                          </div>
                          
                          <div class="form-group col-md-3">
                            <label>Validade</label>
                            <input type="date" name="validade" value="<?= $produto['validade'];?>" class="form-control"  readonly="">
                          </div>
                         
                          <div class="form-group purple-border col-md-12">
                            <label>Descrição do produto</label>
                          <textarea class="md-textarea form-control" name="descricao" rows="4" readonly=""><?= $produto['descricao'];?></textarea>
                          </div>
                           
                      </div>
                      <div class="card-footer float-right">
                      <a class="btn btn-dark float-left mr-3" href="/produtos/index"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
                          
                     </div>
                    </div>
                    </div>
               </div>
          </section>              
        </div>
