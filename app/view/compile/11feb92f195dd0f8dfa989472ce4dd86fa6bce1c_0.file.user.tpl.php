<?php
/* Smarty version 3.1.33, created on 2019-08-15 04:54:02
  from 'C:\xampp\htdocs\pizzaria\app\view\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54c94a093c79_43687082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11feb92f195dd0f8dfa989472ce4dd86fa6bce1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizzaria\\app\\view\\user.tpl',
      1 => 1565837638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54c94a093c79_43687082 (Smarty_Internal_Template $_smarty_tpl) {
?><main>
<section>
<div class="container" >
  <div class="row align-items-center" id="center">
    <div class="col-xl-8 col-12">
      <div class="card" >
        <div class="row align-items-center" id="center">
          <div class="col-xl-6 col-md-6  col-10">
             <form method="POST"  enctype="multipart/form-data">
             <label  name="up-foto" for="arquivos"   id="card-img">
                <figure >
                  <img src="<?php echo $_smarty_tpl->tpl_vars['SITE_USER']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ID_USER']->value;?>
/perfil/<?php echo $_smarty_tpl->tpl_vars['USER_IMG']->value;?>
" class="rounded-circle t">
                    <div  id="label">
                <i class="fas fa-camera"></i>
                </div>
                </figure>

                </label>  
                <input type="file" name="arquivos" id="arquivos" style="display:none;" onchange="previewImagem()">
                <input type="submit" class="btn btn-sm btn-info mr-4" name="botao" value="Trocar Foto">
             
              </form>
          </div>
        </div>
<div class="card-body">
  
 <div class="text-center">

                <h3>
                  <?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>

                </h3>
                 <h3>
                  <?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>

                </h3>
                
  </div>
</div>
  </div>
</div>
</section>
</main><?php }
}
