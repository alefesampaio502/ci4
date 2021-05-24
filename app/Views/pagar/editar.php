       
        <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-body">
         <!-- add content here -->
           <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header"><h4><?= $titulo;?></h4></div>
                <form action="/pagar/store" method="post">
                  
                 <div class="card-body">
                   <div class="form-row">
                   <div class="form-group col-md-4">
                      <label>Fornecedor</label>
                      
          <input type="text" name="conta_pagar_fornecedor_id" class="form-control" value="<?= $pagares['fornecedor_razao'];?>">              
                     
                </div>
            <div class="form-group col-md-4">
            <label>Data do pagamento</label>
          <input type="date" name="conta_pagar_data_pagamento" class="form-control" value="">      
            </div>
            <div class="form-group col-md-2">
            <label>Valor</label>
            <input type="text" name="conta_pagar_valor" class="form-control money" value="<?= $pagar['conta_pagar_valor'];?>">
            </div>                  
            <div class="form-group col-md-2">
            <label>Situação</label>
            <select class="form-control" name="conta_pagar_status">
             <option value="1">Paga</option>
             <option value="0">Pendente</option>
            </select>
          </div>  
      </div>
      <input type="hidden" name="conta_pagar_id" value="<?php echo $pagar['conta_pagar_id'];?>">
    <div class="card-footer">
      <div class="mb-5" style="float:right;">
      <button class="btn btn-primary mr-2 "><i class="fas fa-save"></i> Atualizar</button>
      <a class="btn btn-dark float-left mr-3" href="/pagar/index"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
            </div>
          </div>
        </form>
       </div>
      </div>
     </div>
  </section>              
  </div>

