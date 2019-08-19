
<main id="main">
    <section>

            <div id="title-cardapio">

                 <h1>Faça o seu pedido</h1>

                 <h5>Cardápio Completo sujeito a alterações.</h5>
            </div>

           <div class="container">
                <div class="row">

                {foreach from=$PRO item=P}

                    <!-- ############ PRIMEIRA COLUNA ###############-->
                    <div class="card col-md-3">
                        <div class="card-header">
                                <img src="{$GET_PUBLIC}image/{$P.prod_img}.png" alt="">
                        </div>

                        <div class="card-body">

                              <h1>{$P.prod_nome}</h1>
                              <p>{$P.prod_preco}</p>


                        </div> 

                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php $modal = 'modal_1'; echo $modal; ?>">
                            Pedir
                            </button>
                        </div>
                    </div>
                    {/foreach}
               
                   
                </div>
           </div>
               
          

           </section>
    
    
        </main>
    