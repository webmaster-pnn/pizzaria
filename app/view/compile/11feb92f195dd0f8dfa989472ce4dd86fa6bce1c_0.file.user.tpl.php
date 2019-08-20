<?php
/* Smarty version 3.1.33, created on 2019-08-20 02:29:11
  from 'C:\xampp\htdocs\pizzaria\app\view\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b3ed7ceb9c8_25690138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11feb92f195dd0f8dfa989472ce4dd86fa6bce1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizzaria\\app\\view\\user.tpl',
      1 => 1566260947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b3ed7ceb9c8_25690138 (Smarty_Internal_Template $_smarty_tpl) {
?><main>
<section>
  <div class="container" >
    <div class="row align-items-center" id="center">
      <div class="col-xl-8 col-12">
        <div class="card" >
          <form method="POST"  enctype="multipart/form-data">
            <div class="row align-items-center" id="center">
              <div class="col-xl-6 col-md-6  col-10">
             
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
               
             
           
                </div>
              </div>
              <div class="card-body">
                
                <div class="text-center">
              
                     <div class="form-group col-md-6">
                                <label for="txtName">Nome</label>
                                <input type="text" class="form-control" id="txtName" name="txtName" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
">
                                <span class="help-block">help</span> 
                        </div>
                        <div class="form-group col-md-6">
                                <label for="txtSobrenome">Sobrenome</label>
                                <input type="text" class="form-control" id="txtSobrenome" name="txtSobrenome" value="<?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>
">
                                <span class="help-block">help</span> 
                         </div>

                         <div class="form-group col-md-12">
                                <label for="txtEmail">Email</label>
                                <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Coloque um email válido" required="required">
                                <span class="help-block">help</span> 
                          </div>
                 
                              
                 </div>
              
                </div>
            <input type="submit" class="btn btn-sm btn-info mr-4" name="botao" value="Trocar Foto">
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
</main><?php }
}
