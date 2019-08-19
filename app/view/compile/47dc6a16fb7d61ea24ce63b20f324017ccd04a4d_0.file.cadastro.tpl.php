<?php
/* Smarty version 3.1.33, created on 2019-08-10 21:30:02
  from 'C:\xampp\htdocs\pizzaria\app\view\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4f1b3adf01e8_03675357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47dc6a16fb7d61ea24ce63b20f324017ccd04a4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizzaria\\app\\view\\cadastro.tpl',
      1 => 1565155854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4f1b3adf01e8_03675357 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="formulario">
<br>
<h1>Novo Usuário</h1>
<br>
<form method="post" action="">
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="txtName">Nome</label>
      <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Escreva seu nome..." required="required">
       <span class="help-block">help</span> 
    </div>
     <div class="form-group col-md-6">
      <label for="txtSobrenome">Sobrenome</label>
      <input type="text" class="form-control" id="txtSobrenome" name="txtSobrenome" placeholder="Escreva seu Sobrenome..." required="required">
       <span class="help-block">help</span> 
    </div>

    <div class="form-group col-md-12">
      <label for="txtEmail">Email</label>
      <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Coloque um email válido" required="required">
       <span class="help-block">help</span> 
    </div>
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
       <div class="form-group col-md-2">
      <label for="sexo">Sexo</label>
      <select id="sexo" name="sexo" class="form-control">
        <option selected>M</option>
        <option>F</option>
      </select>
    </div>
     <div class="form-group col-md-4">
     <label for="cpf">CPF</label>
     <input type="text" class="form-control" id="cpf" name="cpf" required="required">
     <span class="help-block">help</span>
     </div>
      <div class="form-group col-md-6">
     <label for="nasc">Nascimento</label>
     <input type="date" class="form-control" id="nasc" name="nasc" required="required">
     <span class="help-block">help</span>
     </div>
       <div class="form-group col-md-6">
     <label for="tel">Telefone</label>
     <input type="text" class="form-control" id="tel" name="tel" required="required">
     <span class="help-block">help</span>
     </div>
       <div class="form-group col-md-6">
     <label for="cel">Celular</label>
     <input type="cel" class="form-control" id="cel" name="cel" required="required">
     <span class="help-block">help</span>
     </div>
  </div>

  <div class="form-group">
    <label for="Endereço">Endereço</label>
    <input type="text" class="form-control" id="Endereço" name="Endereço" placeholder="Rua dos Bobos, nº 0">
  </div>
  <div class="form-group">
    <label for="bairro">Bairro</label>
    <input type="text" class="form-control" id="bairro"  name="bairro" >
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="cidade">Cidade</label>
      <input type="text" class="form-control" id="cidade" name="cidade">
    </div>
    <div class="form-group col-md-4">
      <label for="estado">Estado</label>
      <select id="estado" name="estado" class="form-control">
        <option selected>Escolher...</option>
        <option>Acre</option>
        <option>Alagoas </option>
        <option>Amapá </option>
        <option>Amazonas </option>
        <option>Bahia </option>
        <option>Ceará </option>
        <option>Distrito Federal </option>
        <option>Espírito Santo</option>
        <option>Goiás</option>
        <option>Maranhão</option>
        <option>Mato Grosso</option>
        <option>Mato Grosso do Sul </option>
        <option>Minas Gerais </option>
        <option>Pará </option>
        <option>Paraíba</option>
        <option>Paraná </option>
        <option>Pernambuco </option>
        <option>Rio de Janeiro </option>
        <option>Rio Grande do Norte </option>
        <option>Rio Grande do Sul  </option>
        <option>Rondônia </option>
        <option>Roraima </option>
        <option>Santa Catarina </option>
        <option>São Paulo  </option>
        <option>Sergipe </option>
        <option>Tocantins  </option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="cep">CEP</label>
      <input type="text" class="form-control" id="cep" name="cep">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Aceito os termos e condições de uso do Machado's Pizzaria.
      </label>
    </div>
  </div>
  <button type="submit" id="btnenviar" class="btn btn-primary">Entrar</button>
</form>
</section><?php }
}
