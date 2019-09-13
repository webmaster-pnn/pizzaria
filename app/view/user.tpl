<main>
<section>
  <div class="container" style="height: 900px;display: flex;">

    <div style=" width: 30%;height: 100%;">
    
        <figure id="figure">
          <!-- <img  src="{$SITE_USER}/{$ID_USER}/perfil/{$USER_IMG}" style=" max-width: 100%;"> -->
        </figure> 

    
     </div>
    <div style="width: 70%;height: 100%;">

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#info">Informações Pessoais</a></li>
          <li><a data-toggle="tab" href="#menu1">Ultimas Compras</a></li>
          <li><a data-toggle="tab" href="#menu2">Em Andamento</a></li>
        </ul>

        <div class="tab-content">
          <div id="info" class="tab-pane fade in active">

                   <form style=" padding: 70px;">
                      <div class="form-group">
                        <label for="email">Endereço de email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" >
                        
                      </div>
                      <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" >
                      </div>

                      <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="txt" class="form-control" id="nome"  value="{$CLI_NOME}">
                      </div>
                      <div class="form-group">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="txt" class="form-control" id="sobrenome"  value="{$CLI_SOBRENOME}">
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
</main>