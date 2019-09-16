<?php
/* Smarty version 3.1.33, created on 2019-09-17 00:43:08
  from 'C:\xampp\htdocs\pizzaria\app\view\cardapio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d800ffc16f921_13204459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4f50ff6542627d84e83f618edc0395d245a2de1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizzaria\\app\\view\\cardapio.tpl',
      1 => 1568673785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d800ffc16f921_13204459 (Smarty_Internal_Template $_smarty_tpl) {
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
                        
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                              <?php if ($_smarty_tpl->tpl_vars['P']->value['cat_nome'] == "massas") {?>
                  
                                <div class="card col-md-3">

                                    <label><?php echo $_smarty_tpl->tpl_vars['P']->value['cat_nome'];?>
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

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                                       <?php if ($_smarty_tpl->tpl_vars['P']->value['cat_nome'] == "bebidas") {?>
                      
                                      <div class="card col-md-3">
                                         <label><?php echo $_smarty_tpl->tpl_vars['P']->value['cat_nome'];?>
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
