<?php
/* Smarty version 3.1.33, created on 2019-08-10 21:33:18
  from 'C:\xampp\htdocs\pizzaria\app\view\cardapio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4f1bfe6345f3_65150623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4f50ff6542627d84e83f618edc0395d245a2de1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizzaria\\app\\view\\cardapio.tpl',
      1 => 1565465511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4f1bfe6345f3_65150623 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main id="main">
    <section>

            <div id="title-cardapio">

                 <h1>Faça o seu pedido</h1>

                 <h5>Cardápio Completo sujeito a alterações.</h5>
            </div>

           <div class="container">
                <div class="row">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>

                    <!-- ############ PRIMEIRA COLUNA ###############-->
                    <div class="card col-md-3">
                        <div class="card-header">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_img'];?>
.png" alt="">
                        </div>

                        <div class="card-body">

                              <h1><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</h1>
                              <p><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_preco'];?>
</p>


                        </div> 

                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo '<?php ';?>$modal = 'modal_1'; echo $modal; <?php echo '?>';?>">
                            Pedir
                            </button>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               
                   
                </div>
           </div>
               
          

           </section>
    
    
        </main>
    <?php }
}
