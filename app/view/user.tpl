<main>
<section>
<div class="container" >
  <div class="row align-items-center" id="center">
    <div class="col-xl-8 col-12">
      <div class="card" >
        <div class="row align-items-center" id="center">
          <div class="col-xl-6 col-md-6  col-10">
             <form method="POST"  enctype="multipart/form-data">
             <label  name="up-foto" for="arquivos"   id="card-img">
                <figure >
                  <img src="{$SITE_USER}/{$ID_USER}/perfil/{$USER_IMG}" class="rounded-circle t">
                    <div  id="label">
                <i class="fas fa-camera"></i>
                </div>
                </figure>

                </label>  
                <input type="file" name="arquivos" id="arquivos" style="display:none;" onchange="previewImagem()">
                <input type="submit" class="btn btn-sm btn-info mr-4" name="botao" value="Trocar Foto">
             
              </form>
          </div>
        </div>
<div class="card-body">
  
 <div class="text-center">

                <h3>
                  {$CLI_NOME}
                </h3>
                 <h3>
                  {$CLI_SOBRENOME}
                </h3>
                
  </div>
</div>
  </div>
</div>
</section>
</main>