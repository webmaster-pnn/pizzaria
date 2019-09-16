<?php
/* Smarty version 3.1.33, created on 2019-09-16 23:59:39
  from 'C:\xampp\htdocs\pizzaria\app\view\admin\cardapio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8005cbbe3e39_39269264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '019eb0d116e5d53caffe1bf6a3fc0d4bc75bf73b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizzaria\\app\\view\\admin\\cardapio.tpl',
      1 => 1568671176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8005cbbe3e39_39269264 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
image/im.png" class="image">
                                              
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
                                            
                                            <option>Massas</option>
                                             
                                          </select>
                                          
                                          <!-- tamanho -->
                                        
                                          <select name="tamanho">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAM']->value, 'T');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['T']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['T']->value['tam_nome'] == '350ml') {?>
                                            <?php } else { ?>
                                            <option><?php echo $_smarty_tpl->tpl_vars['T']->value['tam_nome'];?>
</option>
                                            <?php }?>
                                             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            }
                                          </select>
                                      
                                    </div> 


                                
                                    <div id="card-footer">
                                      <button type="submit" class="btn btn-primary">
                                                            Adicionar
                                      </button>
                                    </div>
                                    </form>
                                </div>

                            
                             
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                              <?php if ($_smarty_tpl->tpl_vars['P']->value['cat_nome'] == "massas") {?>
                  
                                <div class="card col-md-3">

                                    <label id="label"><?php echo $_smarty_tpl->tpl_vars['P']->value['cat_nome'];?>
</label>

                                    <div class="card-header">
                                           <img src="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
image/massas/<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_img'];?>
" alt="">
                                    </div>
                                  
                                    <div class="card-body">
                                
                                      <h1 id="card-title"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</h1>
                                      <p><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_descricao'];?>
</p>
                                
                                
                                    </div> 

                                
                                    <div id="card-footer">
                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo '<?php ';?>$modal = 'modal_1'; echo $modal; <?php echo '?>';?>">
                                                            Pedir
                                      </button>
                                    </div>

                                </div>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </div>
                    </div>
                  </div>
                                       
                        
            
                        
                  <div id="menu1" class="tab-pane fade">
                    <div class="container">
                      
                      <div class="row">

                              <div class="card col-md-3">

                                    <form method="POST" enctype="multipart/form-data">
                                       <!-- foto -->
                                    <div class="card-header" id="card-header-add">
                                     
                                         <label  name="up-foto" for="arquivos"   id="card-img">
                                          <figure >
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
image/im.png" class="image2">
                                              
                                          </figure>

                                        </label> 

                                        <input type="file" name="arquivos2" id="arquivos2" style="display:none;" onchange="previewImagem2()">
                                    </div>
                                  
                                    <div class="card-body">
                                      <!-- titulo -->
                                      <label for="card-titulo-add">Titulo</label>
                                      <br>
                                     <input type="text" name="card-titulo-add" id="card-titulo-add" placeholder="Adicione um titulo" required>
                                     <!-- preço -->
                                     <label for="card-preco-add">Preço</label>
                                      <br>
                                     <input type="text" name="card-preco-add" id="card-preco-add" pattern="\d\d,\d\d|\d,\d\d" required>
                                        
                                       <label>Categoria</label><label style="padding-left: 20px;">Tamanho</label>
                                      <br>
                                      <!-- categoria -->
                                          <select name="categoria">
                                           
                                            <option>Bebidas</option>
                                           
                                          </select>
                                          
                                          <!-- tamanho -->
                                        
                                          <select name="tamanho">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAM']->value, 'T');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['T']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['T']->value['tam_nome'] == '350ml') {?>
                                            <option><?php echo $_smarty_tpl->tpl_vars['T']->value['tam_nome'];?>
</option>
                                            <?php } else { ?>
                                            
                                            <?php }?>
                                             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            }
                                          </select>
                                      
                                    </div> 


                                
                                    <div id="card-footer">
                                      <button type="submit" class="btn btn-primary">
                                                            Adicionar
                                      </button>
                                    </div>
                                    </form>
                                </div>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                                       <?php if ($_smarty_tpl->tpl_vars['P']->value['cat_nome'] == "bebidas") {?>
                      
                                      <div class="card col-md-3">
                                         <label id="label"><?php echo $_smarty_tpl->tpl_vars['P']->value['cat_nome'];?>
</label>
                                            <div class="card-header">
                                                   <img src="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
image/bebidas/<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_img'];?>
" alt="">
                                            </div>
                                      
                                            <div class="card-body">
                                          
                                              <h1 id="card-title"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</h1>
                                              
                                          
                                          
                                            </div> 
                                      
                                           <div id="card-footer">
                                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo '<?php ';?>$modal = 'modal_1'; echo $modal; <?php echo '?>';?>">
                                                                      Pedir
                                              </button>
                                            </div>
                                      </div>
                                       <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                        
                 
                      </div>
                    </div>              
                              
                  </div>
            </div>
  
  </section>
</main>
    <?php }
}
