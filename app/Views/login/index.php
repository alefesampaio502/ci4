 <?php 
    $session = session();
    $alert = $session->get('alert');



   ?>

<!DOCTYPE html>
<html lang="pt-BR">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Painel administrador</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/css/app.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/bundles/bootstrap-social/bootstrap-social.css');?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/components.css');?>">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/custom.css');?>">
  <link rel='shortcut icon' type='image/x-icon' href='<?= base_url("assets/img/favicon.ico");?>' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section mt-5">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <div class="align-center">
                <h4 class="text-muted text-center">Aréa Restrita</h4>
              </div>
              </div>
              <div class="card-body">
                <?php if(isset($alert) && $alert == 'error_login'): ?>

                       <!--alerta-->
                      <div class="alert alert-danger alert-dismissible show fade">
                        <div class="alert-body">
                          <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                          </button>
                        <i class="fas fa-user-lock mr-2"></i><strong>Atenção:</strong> E-mail ou senha não encontrado! 
                        </div>
                      </div> 
                      <!--fim -->
                     <?php endif;?>
                <form  action="/login/autenticar" method="POST">
                  <div class="form-group">
                    <label>E-mail</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required>

                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label class="control-label">Senha</label>

                       <div class="invalid-feedback">
                     Campo obrigatório
                    </div>
                      
                    </div>
                    <input id="password" type="password" class="form-control" name="senha" tabindex="2" required>
                    <div class="invalid-feedback">
                     Campo obrigatório
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Manter conectado</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              <a href="#">Com muito <i class="fas fa-heart mr-2 text-danger"></i>CodeStatus</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="<?= base_url('assets/js/app.min.js');?>"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="<?= base_url('assets/js/scripts.js');?>"></script>
  <!-- Custom JS File -->
  <script src="<?= base_url('assets/js/custom.js');?>"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>