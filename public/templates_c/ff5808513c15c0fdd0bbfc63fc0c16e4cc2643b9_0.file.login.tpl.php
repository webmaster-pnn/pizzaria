<?php
/* Smarty version 3.1.33, created on 2019-08-09 07:28:38
  from 'C:\xampp\htdocs\pizzaria\app\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4d04867dd4d5_84491175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff5808513c15c0fdd0bbfc63fc0c16e4cc2643b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizzaria\\app\\view\\login.tpl',
      1 => 1565327383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4d04867dd4d5_84491175 (Smarty_Internal_Template $_smarty_tpl) {
?><main>
<section>
 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
           
            <form class="form-signin" method="post" >
              <div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Entre com o Email cadastrado" required autofocus>
                <label for="email">Endereço de Email</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                <label for="senha">Senha</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="lembrar">
                <label class="custom-control-label" for="lembrar">Lembrar Senha</label>
              </div>
             
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" >Conectar</button>
              
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Conectar com o Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Conectar com o Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</main><?php }
}
