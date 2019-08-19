<?php 

$modal;
    
    $texto = "<p>MOLHO DE TOMATE, MOZZARELLA, QUEIJO MEIA CURA, ABOBRINHA, QUEIJO DE CABRA BOURSIN, 
                AZEITE, RASPAS DE LIMÃO SICILIANO E AZEITONA PRETA</p> "

               
    

?>

<main id="main">
    <section>

            <div id="title-cardapio">

                 <h1>Faça o seu pedido</h1>

                 <h5>Cardápio Completo sujeito a alterações.</h5>
            </div>

           <div class="container">
                <div class="row">
                    <!-- ############ PRIMEIRA COLUNA ###############-->
                    <div class="card col-md">
                        <div class="card-header">
                                <img src="./fotos/abobrinha.png" alt="">
                        </div>

                        <div class="card-body">

                              

                        </div> 

                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php $modal = 'modal_1'; echo $modal; ?>">
                            Pedir
                            </button>
                        </div>
                    </div>
               
                    <!-- ############ SEGUNDA COLUNA ###############-->
                    <div class="card col-md">
                        <div class="card-header">
                            <img src="./fotos/baicon.png" alt="">
                        </div>

                        <div class="card-body">

                        </div> 

                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php $modal = 'modal_2'; echo $modal; ?>">
                                Pedir
                            </button>
                        </div>
                    </div>
                    <!-- ############ TERCEIRA COLUNA ###############-->
                        <div class="card col-md">
                            <div class="card-header">
                                 <img src="./fotos/burrata.png" alt="">
                            </div>

                            <div class="card-body">
                                
                            </div> 

                            <div class="card-footer">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php $modal = 'modal_3'; echo $modal; ?>">
                                Pedir
                                </button>
                            </div>
                        </div>
                </div>
           </div>
               
           
           <!--########################## MODAL #############################################################-->

           <!--########################## MODAL #############################################################-->

              <div class="modal fade"  id="modal_1" tabindex="-1" role="dialog" aria-labelledby="titulo" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="fo">
                            <img src="./fotos/abobrinha.png" alt="">
                            </div>
                            <div class="modal-exit">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                     <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                        
                            <div class="modal-body">
                                        
                                    <?php echo $texto; ?>
                            </div>
                            <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary">Salvar mudanças</button>
                            </div>
                        </div>
                    </div>
                </div>

                           <!--########################## MODAL #############################################################-->

              <div class="modal fade"  id="modal_2" tabindex="-1" role="dialog" aria-labelledby="titulo" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="fo">
                            <img src="./fotos/abobrinha.png" alt="">
                            </div>
                            <div class="modal-exit">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                     <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                        
                            <div class="modal-body">
                                        
                                    <?php echo $texto; ?>
                            </div>
                            <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary">Salvar mudanças</button>
                            </div>
                        </div>
                    </div>
                </div>

                           <!--########################## MODAL #############################################################-->

              <div class="modal fade"  id="modal_3" tabindex="-1" role="dialog" aria-labelledby="titulo" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="fo">
                            <img src="./fotos/abobrinha.png" alt="">
                            </div>
                            <div class="modal-exit">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                     <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                        
                            <div class="modal-body">
                                        
                                    <?php echo $texto; ?>
                            </div>
                            <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary">Salvar mudanças</button>
                            </div>
                        </div>
                    </div>
                </div>

           </section>
    
    
        </main>
    
