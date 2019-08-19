
<?php 

$pag = 'home';

if(isset($_GET['pag'])){
    $pag = $_GET['pag'];
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./fotos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/<?php switch($pag){ 
        case 'ambiente': 
        echo 'ambiente'; 
        break;
        case 'cardapio';
        echo 'cardapio';
        break;
        case 'contato';
        echo 'contato';
        default: 
        echo 'home'; 
        }?>.css">

    <script src="https://kit.fontawesome.com/376bbefc47.js"></script>


    <title>Machado's Pizzaria</title>
</head>

<body>
    <!--######################################### MENU HEADER - NAV-BAR ######################################################################################################-->
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-mod">


            <a class="navbar-brand" href="index.php">

                <img src="./fotos/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu-mod" id="navbarNavDropdown">
                <ul class="navbar-nav text-mod">
                    <li class="nav-item <?php if($pag == 'home'){echo 'active';} ?>">
                        <a class="nav-link" href="index.php">Página Inicial<span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item <?php if($pag == 'ambiente'){echo 'active';} ?>">
                        <a class="nav-link" href="index.php?pag=ambiente">Ambiente</a>
                    </li>
                    <li class="nav-item <?php if($pag == 'cardapio'){echo 'active';} ?>">
                        <a class="nav-link" href="index.php?pag=cardapio">Cardápio</a>
                    </li>
                    <li class="nav-item <?php if($pag == 'contato'){echo 'active';} ?>">
                        <a class="nav-link" href="index.php?pag=contato">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>