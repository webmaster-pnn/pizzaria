

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{$GET_PUBLIC}image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{$GET_PUBLIC}node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$GET_PUBLIC}css/home.css">
    <link rel="stylesheet" href="{$GET_PUBLIC}css/{$GET_CSS}.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/376bbefc47.js"></script>
    <script src="{$GET_PUBLIC}js/login.js"></script>


    <title>Machado's Pizzaria</title>
   
   
</head>

<body>
    <!--######################################### MENU HEADER - NAV-BAR ######################################################################################################-->
    <header>
           
               
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-mod">


            <a class="navbar-brand" href="{$PAGE_HOME}" style="padding: 0;">

                <img src="{$GET_PUBLIC}image/logo.png" alt="" >
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu-mod" id="navbarNavDropdown">
                <ul class="navbar-nav text-mod ">
                    <li class="nav-item "  name="home">
                        <a class="nav-link" href="{$PAGE_HOME}">Página Inicial<span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item " name="ambiente">
                        <a class="nav-link" href="{$PAGE_AMBIENTE}">Ambiente</a>
                    </li>
                    <li class="nav-item "  name="cardapio">
                        <a class="nav-link" href="{$PAGE_CARDAPIO}">Cardápio</a>
                    </li>
                    <li class="nav-item "  name="contato">
                        <a class="nav-link" href="{$PAGE_CONTATO}">Contato</a>
                    </li>
                    
                </ul>
                
            </div>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        
                      {if $SESSAO eq "true"}
             <li class="nav-item dropdown no-arrow userInfo">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{$USER_NOME}</span>
                <img class="img-profile rounded-circle" src="{$SITE_USER}/{$ID_USER}/perfil/{$USER_IMG}">
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

            {else}
            <div class="login collapse navbar-collapse" id="navbarNavDropdown" >
                <ul class="navbar-nav">
                    <li class="nav-item" name="cadastro">
                        <a  class="nav-link"  href="{$PAGE_CADASTRO}">Cadastre-se</a>
                    </li>
                    <li class="nav-item" name="login" id="login">
                        <a  class="nav-link"  href="login">Login</a>
                    </li>
                </ul>
            </div>
            {/if}
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


