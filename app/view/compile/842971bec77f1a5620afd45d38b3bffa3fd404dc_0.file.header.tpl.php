<?php
/* Smarty version 3.1.33, created on 2019-09-05 22:58:24
  from 'C:\xampp\htdocs\pizzaria\app\view\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7176f042f4c4_24235296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '842971bec77f1a5620afd45d38b3bffa3fd404dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizzaria\\app\\view\\header.tpl',
      1 => 1567717102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7176f042f4c4_24235296 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php ';
echo '?>';?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
css/home.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
css/<?php echo $_smarty_tpl->tpl_vars['GET_CSS']->value;?>
.css">

  
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/376bbefc47.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
js/login.js"><?php echo '</script'; ?>
>


    <title>Machado's Pizzaria</title>
   
   
</head>

<body>
    <!--######################################### MENU HEADER - NAV-BAR ######################################################################################################-->
    <header>
           
               
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-mod">


            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['PAGE_HOME']->value;?>
">

                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
image/logo.png" alt="" >
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu-mod" id="navbarNavDropdown">
                <ul class="navbar-nav text-mod ">
                    <li class="nav-item "  name="home">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAGE_HOME']->value;?>
">Página Inicial<span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item " name="ambiente">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAGE_AMBIENTE']->value;?>
">Ambiente</a>
                    </li>
                    <li class="nav-item "  name="cardapio">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAGE_CARDAPIO']->value;?>
">Cardápio</a>
                    </li>
                    <li class="nav-item "  name="contato">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAGE_CONTATO']->value;?>
">Contato</a>
                    </li>
                    
                </ul>
                
            </div>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        
                      <?php if ($_smarty_tpl->tpl_vars['SESSAO']->value == "true") {?>
             <li class="nav-item dropdown no-arrow userInfo">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_smarty_tpl->tpl_vars['USER_NOME']->value;?>
</span>
                <img class="img-profile rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['SITE_USER']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ID_USER']->value;?>
/perfil/<?php echo $_smarty_tpl->tpl_vars['USER_IMG']->value;?>
">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in userD" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="user">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configurações
                </a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

            <?php } else { ?>
            <div class="login collapse navbar-collapse" id="navbarNavDropdown" >
                <ul class="navbar-nav">
                    <li class="nav-item" name="cadastro">
                        <a  class="nav-link"  href="<?php echo $_smarty_tpl->tpl_vars['PAGE_CADASTRO']->value;?>
">Cadastre-se</a>
                    </li>
                    <li class="nav-item" name="login" id="login">
                        <a  class="nav-link"  href="login">Login</a>
                    </li>
                </ul>
            </div>
            <?php }?>
                </ul>
                </div>
        </nav>
         
    </header>
       <!--##################################### FIM    MENU HEADER - NAV-BAR ######################################################################################################-->


     
     <!-- MODAL EXIT -->
        <div class="modal" id="logoutModal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <form action="logout">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Sair</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Tem certeza que você deseja encerrar a sessão?</p>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Sair</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </div>
            </div>
            </form>
          </div>
        </div> 




       
      </div>
      
    </div>
  </div>
</div>


<?php }
}
