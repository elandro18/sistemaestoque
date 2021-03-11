<!DOCTYPE html>
<html>
<head>
	<!--
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>/assets/css/login1.css"/>
	-->
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Login Sistema</title>
	<!-- Google Font: Source Sans Pro -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
  	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/all.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
	<!-- /.login-logo -->
		<div class="card card-outline card-primary">
			<div class="card-header text-center">
				<a href="../../index2.html" class="h1"><b>System123</b> Stock</a>
			</div>
			<div class="card-body">
				<p class="login-box-msg">Acesse para iniciar a Sessão</p>

				<form method="POST">
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="number"  placeholder="Matrícula">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" name="password" class="form-control" placeholder="Senha">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-8">
							<div class="icheck-primary">
								<input type="checkbox" id="remember">
								<label for="remember">
									Lembrar-me
								</label>
							</div>
						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Entrar</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
				<!--
				
				<div class="social-auth-links text-center mt-2 mb-3">
					<a href="#" class="btn btn-block btn-primary">
					<i class="fab fa-facebook mr-2"></i> Sign in using Facebook
					</a>
					<a href="#" class="btn btn-block btn-danger">
					<i class="fab fa-google-plus mr-2"></i> Sign in using Google+
					</a>
				</div>
				/.social-auth-links -->
				<p class="mb-1">
					<a href="forgot-password.html">Eu esqueci minha senha</a>
				</p>
			</div>
			<!-- /.card-body -->
		</div>
	<!-- /.card -->
	</div>
	<!-- /.login-box -->
<!-- jQuery -->
<script src="<?php echo BASE_URL;?>assets/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo BASE_URL;?>assets/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASE_URL;?>assets/js/adminlte.min.js"></script>

<?php
	if (!empty($msg)): ?>
		<h2><?php echo $msg; ?>
<?php endif; ?>
</body>
</html>
