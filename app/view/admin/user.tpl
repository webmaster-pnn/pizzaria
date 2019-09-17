<main>
<section id="section">
  <div class="row" style="height: 900px;display: flex;">

    <div class="col-lg-4">
    
       <div class="col-lg-12 col-md-12" id="photo-position">
       <form method="POST"   enctype="multipart/form-data">
        <label  name="up-foto" for="arquivos"   id="card-img">
          <figure id="figure">
            <img  src="{$SITE_USER}/{$ID_USER}/perfil/{$USER_IMG}" style=" max-width: 100%;" class="image">
              
          </figure>

        </label> 

        <input type="file" name="arquivos" id="arquivos" style="display:none;" onchange="previewImagem()">
        
       <center><button type="submit" class="btn btn-primary">Trocar Foto</button></center> 
       </form>
       </div>

    
     </div>
    <div class="col-lg-8">

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#info">Informações Pessoais</a></li>
          <li><a data-toggle="tab" href="#menu1">Endereço</a></li>
          <li><a data-toggle="tab" href="#menu2">Compras Realizadas</a></li>
          <li><a data-toggle="tab" href="#menu3">Compras em Andamento</a></li>
        </ul>

        <div class="tab-content">
          <div id="info" class="tab-pane fade in active">

                   <form  method="POST" style=" padding: 20px;">
                      <div class="form-group">
                        <label for="email">Endereço de email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{$USER_EMAIL}" >
                        
                      </div>
                      

                      <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="txt" class="form-control" id="nome" name="nome" value="{$USER_NOME}">
                      </div>
                      <div class="form-group">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="txt" class="form-control" id="sobrenome" name="sobrenome" value="{$USER_SOBRENOME}">
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Atualizar</button>
                   </form>

          </div>

          <div id="menu1" class="tab-pane fade">

            <form style=" padding: 20px;" >
               <div class="form-group">
                 <label for="cep">CEP</label>
                 <input type="txt" class="form-control" id="cep" >
                 
               </div>
               

               <div class="form-group">
                 <label for="end">Logradouro</label>
                 <input type="txt" class="form-control" id="end" >
               </div>

               <div class="form-group">
                 <label for="bairro">Bairro</label>
                 <input type="txt" class="form-control" id="bairro"  >
               </div>

               <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="txt" class="form-control" id="cidade"  >
              </div>
              <div class="form-group">
                <label for="estado">Estado</label>
                <input type="txt" class="form-control" id="estado"  >
              </div>
               
               <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>

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
          <div id="menu3" class="tab-pane fade">
              
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