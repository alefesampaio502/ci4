      <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-body">
              <!-- add content here -->
               <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header mt-4"><h4><?= $titulo;?></h4></div>
                    <form action="/formas/store" method="post">
                     <div class="card-body">
                       <div class="form-row">
                         <div class="form-group col-md-6">
                          <label>Nome </label>
                          <input type="text" name="forma_pagamento_nome" class="form-control" value="<?= $formas['forma_pagamento_nome'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Ativo</label>
                            <select class="form-control" name="forma_pagamento_ativa">                            
                            <?php if(isset($formas)):?>
                            
                            <option value="1"<?php echo($formas['forma_pagamento_ativa'] == 1 ? 'selected' : 'selecione') ?> >Sim</option>
                            <option value="0"<?php echo($formas['forma_pagamento_ativa'] == 0 ? 'selected' : '') ?> 
                            >Não </option>
                            <?php else: ?>
                            <option value="1">Sim</option>
                            <option value="0">Não </option>

                          <?php endif;?>
                            </select>
                        </div>  
                    </div>
                    <div class="card-footer">
      <input type="hidden" name="forma_pagamento_id" value="<?= $formas['forma_pagamento_id'];?>">
          <div class="mb-5" style="float:right;">
                <button class="btn btn-primary mr-2 "><i class="fas fa-save"></i> Atualizar</button>
                <a class="btn btn-dark float-left mr-2" href="/formas/index"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
                </div>
               </div>
              </form>
            </div>
            </div>
       </div>
      </section>              
    </div>

