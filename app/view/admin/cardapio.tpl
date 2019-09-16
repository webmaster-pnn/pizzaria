
<main id="main">
    <section>

            <div id="title-cardapio">

                 <h1>Faça o seu pedido</h1>

                 <h5>Cardápio Completo sujeito a alterações.</h5>
            </div>
   
              <div id="nav-tab">
               

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#info">MASSAS</a></li>
                        <li><a data-toggle="tab" href="#menu1">BEBIDAS</a></li>
                    </ul>
               </div>       
                        
            <div class="tab-content">
                  <div id="info" class="tab-pane fade in active">
                              
                    <div class="container">
                        <div class="row">
                            
                            
                              <div class="card col-md-3">

                                    <form method="POST" enctype="multipart/form-data">
                                       <!-- foto -->
                                    <div class="card-header" id="card-header-add">
                                     
                                         <label  name="up-foto" for="arquivos"   id="card-img">
                                          <figure >
                                            <img src="{$GET_PUBLIC}image/im.png" class="image">
                                              
                                          </figure>

                                        </label> 

                                        <input type="file" name="arquivos" id="arquivos" style="display:none;" onchange="previewImagem()">
                                    </div>
                                  
                                    <div class="card-body">
                                      <!-- titulo -->
                                      <label for="card-titulo-add">Titulo</label>
                                      <br>
                                     <input type="text" name="card-titulo-add" id="card-titulo-add" placeholder="Adicione um titulo" required>
                                     <!-- descriçao -->
                                      <label for="card-descricao-add">Descrição</label>
                                      <br>
                                     <input type="text" name="card-descricao-add" id="card-descricao-add" placeholder="Adicione uma descrição">
                                     <!-- preço -->
                                     <label for="card-preco-add">Preço</label>
                                      <br>
                                     <input type="text" name="card-preco-add" id="card-preco-add" pattern="\d\d,\d\d|\d,\d\d" required>
                                        
                                       <label>Categoria</label><label style="padding-left: 20px;">Tamanho</label>
                                      <br>
                                      <!-- categoria -->
                                          <select name="categoria">
                                            {foreach from=$CAT item=C}
                                            <option>{$C.cat_nome}</option>
                                             {/foreach}
                                          </select>
                                          
                                          <!-- tamanho -->
                                        
                                          <select name="tamanho">
                                            {foreach from=$TAM item=T}
                                          
                                            <option>{$T.tam_nome}</option>
                                            
                                             {/foreach}
                                            
                                          </select>
                                      
                                    </div> 


                                
                                    <div id="card-footer">
                                      <button type="submit" class="btn btn-primary">
                                                            Adicionar
                                      </button>
                                    </div>
                                    </form>
                                </div>

                                <!-- cardapio foreach -->
                            
                             
                            {foreach from=$PRO item=P}
                              {if $P.cat_nome == "massas" }
                  
                                <div class="card col-md-3">

                                    <label id="label">{$P.cat_nome}</label>

                                    <div class="card-header">
                                           <img src="{$GET_PUBLIC}image/massas/{$P.prod_img}" alt="">
                                    </div>
                                  
                                    <div class="card-body">
                                
                                      <h1 id="card-title">{$P.prod_nome}</h1>
                                      <p>{$P.prod_descricao}</p>
                                
                                
                                    </div> 

                                
                                    <div id="card-footer">
                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php $modal = 'modal_1'; echo $modal; ?>">
                                                            Pedir
                                      </button>
                                    </div>

                                </div>
                                {/if}
                            {/foreach}


                        </div>
                    </div>
                  </div>
                                       
                        
            
                        
                  <div id="menu1" class="tab-pane fade">
                    <div class="container">
                      
                      <div class="row">

                              

                                {foreach from=$PRO item=P}
                                       {if $P.cat_nome == "bebidas" }
                      
                                      <div class="card col-md-3">
                                         <label id="label">{$P.cat_nome}</label>
                                            <div class="card-header">
                                                   <img src="{$GET_PUBLIC}image/bebidas/{$P.prod_img}" alt="">
                                            </div>
                                      
                                            <div class="card-body">
                                          
                                              <h1 id="card-title">{$P.prod_nome}</h1>
                                              
                                          
                                          
                                            </div> 
                                      
                                           <div id="card-footer">
                                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php $modal = 'modal_1'; echo $modal; ?>">
                                                                      Pedir
                                              </button>
                                            </div>
                                      </div>
                                       {/if}
                                {/foreach}                        
                 
                      </div>
                    </div>              
                              
                  </div>
            </div>
  
  </section>
</main>
    