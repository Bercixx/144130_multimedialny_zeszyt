<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Multimedialny zeszyt obserwacji dziecka</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- fullCalendar -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/fullcalendar.min.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('resources/css/fullcalendar.print.min.css');?>" media="print">
        
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
        <script src="<?php echo site_url('resources/js/jquery.min.js');?>"></script>
    </head>
    
    <body class="hold-transition skin-green-light layout-boxed sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">Multimedialny zeszyt obserwacji dziecka</span>
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
                                    <span class="hidden-xs"><?= zalogowanyUzytkownik('email') ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="<?= site_url('autoryzacja/wyloguj') ?>" class="btn btn-default btn-flat">Wyloguj się</a>
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
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">NAWIGACJA</li>
                        <li>
                            <a href="<?php echo site_url();?>">
                                <i class="fa fa-home"></i> <span>Strona główna</span>
                            </a>
                        </li>
                        
                        <?php if(czyAdmin()): ?>
						<li>
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Uzytkownicy</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('uzytkownicy/add');?>"><i class="fa fa-plus"></i> Dodaj użytkownika</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('uzytkownicy/index');?>"><i class="fa fa-list-ul"></i> Spis użytkowników</a>
                                </li>
							</ul>
                        </li>
                        <?php endif; ?>

                        <?php if(czyRodzic()): ?>
						<li>
                            <a href="<?php echo site_url('kalendarz/index');?>">
                                <i class="fa fa-calendar"></i> <span>Kalendarz</span>
                            </a>
                            
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-heartbeat"></i> <span>Lekarstwa</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('rodzic/lekarstwa_dodaj');?>"><i class="fa fa-plus"></i> Dodaj lekarstwo</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('rodzic/lekarstwa_lista');?>"><i class="fa fa-list-ul"></i> Spis lekarstw</a>
                                </li>
							</ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('rodzic/zajecia');?>">
                                <i class="fa fa-mortar-board"></i> <span>Zajęcia</span>
                            </a>
                            
                        </li>
                        <li>
                            <a href="<?php echo site_url('rodzic/opiekunowie_lista');?>">
                                <i class="fa fa-users"></i> <span>Opiekunowie</span>
                                </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('rodzic/dziecko');?>">
                                <i class="fa fa-user"></i> <span>Dziecko</span>
                                </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('rodzic/uwagi');?>">
                                <i class="fa fa-exclamation"></i> <span>Uwagi</span>
                            </a>
                            
                        </li>
                        <?php endif; ?>

                        <?php if(czyOpiekun()): ?>
						<li>
                            <a href="<?php echo site_url('kalendarz/index');?>">
                                <i class="fa fa-calendar"></i> <span>Kalendarz</span>
                            </a>
                            
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url('opiekun/zajecia');?>">
                                <i class="fa fa-mortar-board"></i> <span>Zajęcia</span>
                            </a>
                            
                        </li>
                        <li>
                            <a href="<?php echo site_url('opiekun/podopieczni');?>">
                                <i class="fa fa-user"></i> <span>Podopieczni</span>
                            </a>
                            
                        </li>
                       
                        <li>
                            <a href="<?php echo site_url('opiekun/uwagi');?>">
                                <i class="fa fa-exclamation"></i> <span>Uwagi</span>
                            </a>
                            
                        </li>
                        <?php endif; ?>
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content" style="min-height: 800px;">
                    <?php 
                                       
                    if(isset($_view) && $_view)
                    
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
          
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <!-- <script src="<?php echo site_url('resources/js/jquery.min.js');?>"></script> -->

        
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <script src="<?php echo site_url('resources/js/jquery-ui.min.js');?>"></script>

        