<?php
/* Smarty version 3.1.33, created on 2019-09-14 01:53:17
  from 'C:\xampp\htdocs\pizzaria\app\view\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7c2bed5c1501_03847866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11feb92f195dd0f8dfa989472ce4dd86fa6bce1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizzaria\\app\\view\\user.tpl',
      1 => 1568418795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7c2bed5c1501_03847866 (Smarty_Internal_Template $_smarty_tpl) {
?><main>
<section id="section">
  <div class="row" style="height: 900px;display: flex;">

    <div class="col-lg-4">
    
       <div class="col-lg-12 col-md-12" id="photo-position">
        <figure id="figure">
          <img  src="<?php echo $_smarty_tpl->tpl_vars['SITE_USER']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ID_USER']->value;?>
/perfil/<?php echo $_smarty_tpl->tpl_vars['USER_IMG']->value;?>
" style=" max-width: 100%;">
        </figure> 
       </div>

    
     </div>
    <div class="col-lg-8">

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#info">Informações Pessoais</a></li>
          <li><a data-toggle="tab" href="#menu1">Ultimas Compras</a></li>
          <li><a data-toggle="tab" href="#menu2">Em Andamento</a></li>
        </ul>

        <div class="tab-content">
          <div id="info" class="tab-pane fade in active">

                   <form style=" padding: 20px;">
                      <div class="form-group">
                        <label for="email">Endereço de email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?php echo $_smarty_tpl->tpl_vars['USER_EMAIL']->value;?>
" >
                        
                      </div>
                      

                      <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="txt" class="form-control" id="nome"  value="<?php echo $_smarty_tpl->tpl_vars['USER_NOME']->value;?>
">
                      </div>
                      <div class="form-group">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="txt" class="form-control" id="sobrenome"  value="<?php echo $_smarty_tpl->tpl_vars['USER_SOBRENOME']->value;?>
">
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Atualizar</button>
                   </form>

          </div>
          <div id="menu1" class="tab-pane fade">
            
                       <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Quantidade</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>

          </div>
          <div id="menu2" class="tab-pane fade">
              
              <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Quantidade</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
    


          </div>
        </div>
    

   
     </div>

      
    </div>
</section>
</main><?php }
}
