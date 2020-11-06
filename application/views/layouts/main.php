<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>contable</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
        
        <style>
            #loader{display: none}
        </style>

        <!-- cargamos los CSS si son enviados desde el controlador -->
        <?php if(isset($css)): ?>
            <?php 
                $us = base_url();
                foreach($css as $script):?>
                    <link rel="stylesheet" href="<?php echo $us . $script;?>">
                <?php endforeach ?>
        <?php endif ?>

        <?php if(isset($css_txt)): ?>
            <?php 
                foreach($css_txt as $script):?>
                    <style> <?php echo $script;?>"</style>
                <?php endforeach ?>
        <?php endif ?>

        <!-- /cargados CSS personalizados desde controlador -->


        <script type="text/javascript">
            base_url = '<?= base_url();?>'
        </script>

        
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">Smart-ERP</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">Smart-ERP</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo site_url('resources/img/'.$this->session->userdata()['img'].'');?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"> <?php echo $this->session->userdata()['nombre']; ;?> </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo site_url('resources/img/'.$this->session->userdata()['img'].'');?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo $this->session->userdata()['nombre'].' - '.$this->session->userdata()['cargo']; ;?>
                                    </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Salir</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo site_url('resources/img/'.$this->session->userdata()['img'].'');?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $this->session->userdata()['nombre'];?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MENU PRINCIPAL</li>
                        <li>
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Maestros</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('empresa/index');?>"><i class="fa fa-bank"></i> Empresas</a>
                                </li>
                                <li class="active">
                                    <a href="<?php echo site_url('tipos_libro/index');?>"><i class="fa fa-book"></i> Libros</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('usuario/index');?>"><i class="fa fa-address-book"></i> Usuarios</a>
                                </li>
                            </ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Comprobantes Timbraje</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('comprobantes_timbraje/index');?>"><i class="fa fa-list-ul"></i> Listar</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Timbraje</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('timbraje/index');?>"><i class="fa fa-list-ul"></i> Listar</a>
                                </li>
							</ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <img id="loader" src="<?php echo base_url() ?>resources/img/712.GIF" style="position: absolute; left: 45%; background: #ff9900; padding: 5px; width: 50px; box-shadow: 0px 0px 3px #333"/>
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Creado Por <a href="http://www.smartencoding.cl/">Smart Encoding</a> 1.0</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

<?php $this->load->view('layouts/js',isset($js) ? $js : null ); ?>


    </body>
</html>
