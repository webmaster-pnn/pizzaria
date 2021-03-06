<?php
/* Smarty version 3.1.33, created on 2019-09-15 00:59:35
  from 'C:\xampp\htdocs\pizzaria\app\view\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7d70d792ac87_06538069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47dc6a16fb7d61ea24ce63b20f324017ccd04a4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizzaria\\app\\view\\cadastro.tpl',
      1 => 1567716500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7d70d792ac87_06538069 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="formulario">
<br>
<h1>Novo Usuário</h1>
<br>
<form method="post" action="">
  <div class="form-row">
                                <!-- NOME -->
    <div class="form-group col-md-6">
      <label for="txtName">Nome</label>
      <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Escreva seu nome..." required="required">
       <span class="help-block">help</span> 
    </div>
                                <!-- SOBRENOME -->

     <div class="form-group col-md-6">
      <label for="txtSobrenome">Sobrenome</label>
      <input type="text" class="form-control" id="txtSobrenome" name="txtSobrenome" placeholder="Escreva seu Sobrenome..." required="required">
       <span class="help-block">help</span> 
    </div>
                                <!-- EMAIL -->

    <div class="form-group col-md-12">
      <label for="txtEmail">Email</label>
      <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Coloque um email válido" required="required">
       <span class="help-block">help</span> 
    </div>

                                <!-- SENHA -->

    <div class="form-group col-md-6">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" required="required" placeholder="Senha">
     <span class="help-block">help</span>
    </div>
    <div class="form-group col-md-6">
       <label for="confirm_senha">Confirme a Senha</label>
       <input type="password" class="form-control" id="confirm_senha" name="confirm_senha" required="required" placeholder="Confirme a Senha">
       <span class="help-block">help</span>
    </div>

                                <!-- SEXO -->

    <div class="form-group col-md-2">
      <label for="sexo">Sexo</label>
      <select id="sexo" name="sexo" class="form-control">
        <option selected>M</option>
        <option>F</option>
      </select>
    </div>

                                <!-- CPF -->

    <div class="form-group col-md-4">
     <label for="cpf">CPF</label>
     <input type="text" class="form-control" id="cpf" name="cpf" required="required">
     <span class="help-block">help</span>
    </div>

                                <!-- NASCIMENTO -->

    <div class="form-group col-md-6">
     <label for="nasc">Nascimento</label>
     <input type="date" class="form-control" id="nasc" name="nasc" required="required">
     <span class="help-block">help</span>
    </div>



  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Aceito os termos e condições de uso do Machado's Pizzaria.
      </label>
    </div>
  </div>

</div>
<div id="button-align">
   <button type="submit" id="btnenviar" class="btn btn-primary">Cadastrar</button>
</div>
 
</form>
</section><?php }
}
