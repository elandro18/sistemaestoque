<!DOCTYPE html>
<html>
	<head>
		<!--
		<meta charset="utf-8" />
		<title>Sistema de Estoque</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>System123 Stock</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/all.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/adminlte.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/summernote-bs4.min.css">

	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">
			<!-- Preloader -->
  			<div class="preloader flex-column justify-content-center align-items-center">
    			<img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  			</div>
			  <!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Left navbar links -->
				<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?php echo BASE_URL;?>" class="nav-link">Início</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?php echo BASE_URL;?>contato" class="nav-link">Contato</a>
				</li>
				</ul>


			</nav>
			<!-- /.navbar -->
			 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo BASE_URL; ?>" class="brand-link">
      <img src="<?php echo BASE_URL; ?>assets/images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">System123 Stock</span>
    </a>
      <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition os-host-scrollbar-vertical-hidden">
      <div class="os-resize-observer-host">
        <div class="os-resize-observer observed" style="left: 0px; right: auto;"></div>
      </div>
      <div class="os-size-auto-observer" style="height: calc(100% + 1px); float: left;">
	  	<div class="os-resize-observer observed"></div>
      </div>
      <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 872px;"></div>
      <div class="os-padding">
        <div class="os-viewport os-viewport-native-scrollbars-invisible">
          <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="<?php echo BASE_URL; ?>assets/images/avatar2.png" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="<?php echo BASE_URL;?>/login/profile" class="d-block">

					<?php for($i=0; $i < 6; $i++):?>
						<?php if($i == 1){
							echo $viewData['user'][$i];}?>
					<?php endfor;?>
				</a>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
				<?php if (isset($viewData['menu'])): ?>
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<li class="nav-header">MENU</li>
					<?php foreach ($viewData['menu'] as $url => $menutitle): ?>
					<li class="nav-item">
					<a href="<?php echo $url; ?>" class="nav-link">
						<?php if($menutitle == 'Adicionar Produto'):?>
							<i class="fas fa-cart-plus nav-icon"></i>
						<?php endif;?>
						<?php if($menutitle == 'Adicionar Novo Usuário'):?>
							<i class="fas fa-user-circle nav-icon"></i>
						<?php endif;?>
						<?php if($menutitle == 'Perfil'):?>
							<i class="fas fa-address-book nav-icon"></i>
						<?php endif;?>
						<?php if($menutitle == 'Relatório'):?>
							<i class="fas fa-clipboard nav-icon"></i>
						<?php endif;?>
						<?php if($menutitle == 'Sair'):?>
							<i class="fas fa-times nav-icon"></i>
						<?php endif;?>
						<p><?php echo $menutitle; ?></p>
					</a>
					</li>
					<?php endforeach;?>
				</ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
        </div>
      </div>
      <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
        <div class="os-scrollbar-track">
          <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
        </div>
      </div>
      <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden os-scrollbar-unusable">
        <div class="os-scrollbar-track">
          <div class="os-scrollbar-handle" style="height: 100%; transform: translate(0px, 0px);"></div>
        </div>
      </div>
      <div class="os-scrollbar-corner"></div>
    </div>
    <!-- /.sidebar -->
  </aside>

		</div>

		<div class="header">
			<nav>
				<ul>

						<li><a ></a></li>

				</ul>
			</nav>
		</div>
		<?php endif;?>
		<div class="container">
			<?php $this->loadViewInTemplate($viewName, $viewData);?>
		</div>


		<script src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="<?php echo BASE_URL; ?>assets/js/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		$.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
		<!-- ChartJS -->
		<script src="<?php echo BASE_URL; ?>assets/js/Chart.min.js"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="<?php echo BASE_URL; ?>assets/js/tempusdominus-bootstrap-4.js"></script>
		<!-- overlayScrollbars -->
		<script src="<?php echo BASE_URL; ?>assets/js/jquery.overlayScrollbars.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo BASE_URL; ?>assets/js/adminlte.js"></script>
		

		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>