<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Puri Lupin </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url('dashboard')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="<?=base_url()?>assets/img/logo_2.png" width="40px" height ="40px" />
</span>
      <!-- logo for regular state and mobile devices -->
      <img src="<?=base_url()?>assets/img/logo_2.png" width="40px" height ="40px" />
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
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
              <img src="<?=$this->fungsi->user_login()->avatar;?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$this->fungsi->user_login()->username;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=$this->fungsi->user_login()->avatar;?>" class="img-circle" alt="User Image">

                <p>
                <?=$this->fungsi->user_login()->name;?> 
                <small><?=$this->fungsi->user_login()->address;?></small>
                </p>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=site_url('profile')?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=site_url('auth/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=$this->fungsi->user_login()->avatar;?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=ucfirst($this->fungsi->user_login()->username)?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
          <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
          </a>
        </li>
        <?php if($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2) { ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-archive"></i> 
            <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('bhnbaku')?>"><i class="fa fa-circle-o"></i> Bahan Baku</a></li>
            <li><a href="<?=site_url('bumbu')?>"><i class="fa fa-circle-o"></i> Bumbu</a></li>
            <li><a href="<?=site_url('brgjadi')?>"><i class="fa fa-circle-o"></i> Barang Jadi</a></li>
          </ul>
        </li>
        <?php } ?>
        <?php if($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2) { ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> 
            <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('pbb')?>"><i class="fa fa-circle-o"></i> Permintaan Bahan Baku</a></li>
            <li><a href="<?=site_url('belibumbu')?>"><i class="fa fa-circle-o"></i> Pembelian Bumbu</a></li>
            <li><a href="<?=site_url('brgmasuk')?>"><i class="fa fa-circle-o"></i> Barang Masuk</a></li>
            <li><a href="<?=site_url('thpproduk')?>"><i class="fa fa-circle-o"></i> Tahap Produk</a></li>
            <li><a href="<?=site_url('distbrgjadi')?>"><i class="fa fa-circle-o"></i> Distribusi Barang Jadi</a></li>
          </ul>
        </li>
        <?php } ?>
        <?php if($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2 || $this->session->userdata('level') == 5) { ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('lap_pbb')?>"><i class="fa fa-circle-o"></i> Permintaan Bahan Baku</a></li>
            <li><a href="<?=site_url('lap_belibumbu')?>"><i class="fa fa-circle-o"></i> Pembelian Bumbu</a></li>
            <li><a href="<?=site_url('lap_brgmasuk')?>"><i class="fa fa-circle-o"></i> Barang Masuk</a></li>
            <li><a href="<?=site_url('lap_thpproduk')?>"><i class="fa fa-circle-o"></i> Tahap Produk</a></li>
            <li><a href="<?=site_url('lap_brgjadi')?>"><i class="fa fa-circle-o"></i> Barang Jadi</a></li>
            <li><a href="<?=site_url('lap_distbrgjadi')?>"><i class="fa fa-circle-o"></i> Distribusi Barang Jadi</a></li>
          </ul>
        </li>
        <?php } ?>
        <?php if($this->session->userdata('level') == 3 || $this->session->userdata('level') == 4) { ?>
            <li><a href="<?=site_url('suratjalan')?>"><i class="fa fa-envelope-o"></i>
              <span>Surat Jalan</span>
              </a>
            </li>
        <?php } ?>
        <?php if($this->session->userdata('level') == 3 || $this->session->userdata('level') == 4) { ?>
            <li><a href="<?=site_url('lap_suratjalan')?>"><i class="fa fa-file-pdf-o"></i>
              <span>Laporan Surat Jalan</span>
              </a>
            </li>
        <?php } ?>
          <li class="header">SETTINGS</li>
            <?php if($this->session->userdata('level') == 1) { ?>
            <li><a href="<?=site_url('user')?>"><i class="fa fa-users"></i> <span>Users</span></a></li>
            <?php }?>
            <li><a href="<?=site_url('tentang')?>"><i class="fa fa-exclamation"></i> <span>Tentang</span></a></li>
            <li><a href="<?=site_url('petunjuk')?>"><i class="fa fa-question-circle-o"></i> <span>Petunjuk Pemakaian</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
       <?php echo $contents ?>
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019 <a href="https://purilupin.com">PT Puri Lupin</a>.</strong> All rights
    reserved.
  </footer>

<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>

</body>
</html>
