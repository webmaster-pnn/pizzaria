<main>
<section>
  <div class="container" >
    <div class="row align-items-center" id="center">
      <div class="col-xl-8 col-12">
        <div class="card" >
          <form method="POST"  enctype="multipart/form-data">
            <div class="row align-items-center" id="center">
              <div class="col-xl-6 col-md-6  col-10">
             
                <label  name="up-foto" for="arquivos"   id="card-img">
                  <figure >
                    <img src="{$SITE_USER}/{$ID_USER}/perfil/{$USER_IMG}" class="rounded-circle t">
                      <div  id="label">
                        <i class="fas fa-camera"></i>
                      </div>
                  </figure>

                </label>  
                <input type="file" name="arquivos" id="arquivos" style="display:none;" onchange="previewImagem()">
               
             
           
                </div>
              </div>
              <div class="card-body">
                
                <div class="text-center">
              
                     <div class="form-group col-md-6">
                                <label for="txtName">Nome</label>
                                <input type="text" class="form-control" id="txtName" name="txtName" value="{$CLI_NOME}">
                                <span class="help-block">help</span> 
                        </div>
                        <div class="form-group col-md-6">
                                <label for="txtSobrenome">Sobrenome</label>
                                <input type="text" class="form-control" id="txtSobrenome" name="txtSobrenome" value="{$CLI_SOBRENOME}">
                                <span class="help-block">help</span> 
                         </div>

                         <div class="form-group col-md-12">
                                <label for="txtEmail">Email</label>
                                <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Coloque um email válido" required="required">
                                <span class="help-block">help</span> 
                          </div>
                 
                              
                 </div>
              
                </div>
            <input type="submit" class="btn btn-sm btn-info mr-4" name="botao" value="Trocar Foto">
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
</main>