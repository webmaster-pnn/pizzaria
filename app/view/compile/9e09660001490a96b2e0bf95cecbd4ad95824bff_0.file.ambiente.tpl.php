<?php
/* Smarty version 3.1.33, created on 2019-09-15 20:13:08
  from 'C:\xampp\htdocs\pizzaria\app\view\ambiente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7e7f34216e94_14782940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e09660001490a96b2e0bf95cecbd4ad95824bff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizzaria\\app\\view\\ambiente.tpl',
      1 => 1566598300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7e7f34216e94_14782940 (Smarty_Internal_Template $_smarty_tpl) {
?>    <main id="main">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-amb ">

            <h1 id="titulo-nav"> Só aqui você tem a verdadeira pizza italiana! </h1>

        </nav>

        <section id="section">

        <article id="article" >

        <p>A Machado's Pizzaria é especializada no segmento de pizzas, dispondo de vários produtos e serviços.
                Possuimos excelentes profissionais dos quais estao devidamente preparados para melhor atende-los.

                Machado's Pizzaria é referência não só pelo seu atendimento, mais também, pelo fornecimento de produtos
                confiáveis e de melhor qualidade. 
                
                <h3>Ambiente Agradavel</h3>
                Possuimos um estabelecimento confortavel e com musica ambiente. Convido voce e toda sua familia  
                a conhecerem a pizza mais famosa da italia, a napolitana, feita magistralmente ao forno a lenha.
                <h3>Tradicional forno a lenha</h3>
                O grande diferencial desse tipo de forno é o sabor peculiar que a queima da lenha gera na pizza. 
                A madeira exala aromas que acabam se impregnando na pizza, por isso a pizza fica tão apetitosa e cheirosa, 
                ainda mais quando esse aroma se espalha também no ambiente.
            </p>

        </article>
        


        <div id="fotos-ambiente">
            <div id=title-foto>
            <hr id="hr-right"><i class="fas fa-camera"></i><hr id="hr-left">
            </div>

            <div id="body-foto" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators  ">
                <li data-target="#body-foto" data-slide-to="0" class="active"></li>
                <li data-target="#body-foto" data-slide-to="1"></li>
                <li data-target="#body-foto" data-slide-to="2"></li>
                <li data-target="#body-foto" data-slide-to="3"></li>
                <li data-target="#body-foto" data-slide-to="4"></li>
                <li data-target="#body-foto" data-slide-to="5"></li>
                </ol>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img  class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
image/foto-ambiente-1.jpg" alt="Primeiro Slide">
                </div>
                <div class="carousel-item ">
                  <img  class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
image/foto-ambiente-2.jpg" alt="Segundo Slide">
                </div>
                <div class="carousel-item ">
                  <img  class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
image/foto-ambiente-4.jpg" alt="Terceiro Slide">
                </div>
                <div class="carousel-item ">
                  <img  class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
image/lenha.jpg" alt="Quarto Slide">
                </div>
                <div class="carousel-item ">
                  <img  class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
image/lenha2.png" alt="Quinto Slide">
                </div>
                <div class="carousel-item ">
                  <img  class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['GET_PUBLIC']->value;?>
image/lenha3.jpg" alt="Sexto Slide">
                </div>
            </div>

             <a class="carousel-control-prev" href="#body-foto" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>

            <a class="carousel-control-next" href="#body-foto" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        

        </div>

      

        </section>



    </main>
<?php }
}
