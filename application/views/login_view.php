<!-- <html lang="es">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  	<title><?=$titulo?></title>
  </head>
	  <body>
	  		<h1>Iniciar sesión con Bcrypt</h1>
	  		<?=form_open(base_url().'secure_bcrypt/secure_login')?>
	  		<label>Username</label><input type="text" name="username" /><p><?=form_error('username')?></p>
	  		<label>Password</label><input type="password" name="password" /><p><?=form_error('password')?></p>
	  		<input type="hidden" name="token" value="<?=$token?>" />
	  		<input type="submit" name="submit" value="Login" />
	  		<?=form_close()?>
	  		<?=anchor(base_url().'secure_bcrypt', 'Registrar usuario')?>
	  		<?php
	  		$error = $this->session->flashdata('usuario_incorrecto');
	  		if($error)
			{
				echo $error;
			}
			?>
	  </body>
</html> -->

<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/960.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/text.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/reset.css" media="screen" />
		 <style type="text/css">
		 	h1{
		 		font-size: 22px;
		 		text-align: center;
		 		margin: 20px 0px;
		 	}
		 	#login{
		 		background: #fefefe;
		 		min-height: 500px;
		 	}
		 	#formulario_login{
		 		font-size: 14px;
		 		border: 8px solid #112233;
		 	}
		 	label{
		 		display: block;
		 		font-size: 16px;
		 		color: #333333;
		 		font-weight: bold;
		 	}
		 	input[type=text],input[type=password]{
		 		padding: 10px 6px;
		 		width: 400px;
		 	}
		 	input[type=submit]{
		 		padding: 5px 40px;
		 		background: #61399d;
		 		color: #fff;
		 	}
		 	#campos_login{
		 		margin: 50px 0px;
		 	}
		 	p{
		 		color: #f00;
		 		font-weight: bold;
		 	}
		 </style>
	</head>
	<body>
	<?php
	$username = array('name' => 'username', 'placeholder' => 'nombre de usuario');
	$password = array('name' => 'password',	'placeholder' => 'introduce tu password');
	$submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
	?>
	<div class="container_12">
		<h1>Formulario de login con varios perfiles de usuario</h1>
		<div class="grid_12" id="login">
			<div class="grid_8 push_2" id="formulario_login">
				<div class="grid_6 push_1" id="campos_login">
					<?//=form_open(base_url().'login/new_user')?>
					<?=form_open('secure_bcrypt/secure_login')?>
					<label for="username">Nombre de usuario:</label>
					<?=form_input($username)?><p><?=form_error('username')?></p>
					<label for="password">Introduce tu password:</label>
					<?=form_password($password)?><p><?=form_error('password')?></p>
					<?=form_hidden('token',$token)?>
					<?=form_submit($submit)?>
					<?=form_close()?>
					<?//=anchor(base_url().'secure_bcrypt', 'Registrar usuario')?>
					<?=anchor('secure_bcrypt', 'Registrar usuario')?>
			  		<?php
				  		$error = $this->session->flashdata('usuario_incorrecto');
				  		if($error){
							echo $error;
					} ?>

					<?php
					//if($this->session->flashdata('usuario_incorrecto')){
					?>
					<!-- <p><?//=$this->session->flashdata('usuario_incorrecto')?></p> -->
					<?php
					//}
					?>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>