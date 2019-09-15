<main>
<section>
 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
           
            <form class="form-signin" method="post" >
              <div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Entre com o Email cadastrado" required autofocus>
                <label for="email">Endereço de Email</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                <label for="senha">Senha</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="lembrar">
                <label class="custom-control-label" for="lembrar">Lembrar Senha</label>
              </div>
             
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" >Conectar</button>
              
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Conectar com o Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Conectar com o Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</main>