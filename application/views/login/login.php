<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>LOGIN &mdash; Gestión</title>

  <!-- General CSS Files -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
  <!-- CSS Libraries -->
  
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/components.css">

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->view('dist/_partials/header');
?>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo base_url(); ?>resources/img/logo.jpg" alt="logo" width="100" class="shadow rounded-circle">
            </div>

            <div class="card card-primary shadow">
              <div class="card-header"><h4>Ingreso al sistema</h4></div>

              <div class="card-body">
                <form method="POST" action="Login/verifica" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" autocomplete="on" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Por Favor Ingrese correo electronico
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="<?php echo base_url(); ?>password_forgot" class="text-small">
                          Olvido Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Por favor ingrese la contraseña
                    </div>
                  </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Ingresar
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Smart Encoding EIRL 2020 <?php echo hash('sha256','benjamin'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 <div class="bullet"></div> Design By <a href="http://seba.woz.cl/">Smart Encoding EIRL</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>
  
  <!-- General JS Scripts -->
        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>
  <!-- JS Libraies -->
  <!-- Template JS File -->
</body>
</html>