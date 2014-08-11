<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  	<title><?=$titulo?></title>
  </head>
	  <body>
	  		Bienvenido <?=$this->session->userdata('username')?><br>
	  		Tu password encriptado con Bcrypt es <?=$this->session->userdata('password')?><br>
	  		<p>
	  			Otros datos de sesion: <br>
	  			<?php  echo "id_usuario: ".$this->session->userdata('id_usuario');?><br>
	  			<?php  echo "perfil: ".$this->session->userdata('perfil');?><br>
				<?php  echo "username: ".$this->session->userdata('username');?><br>
				<?php  echo "password: ".$this->session->userdata('password');?>
	  			

	  		</p>
	  		<?//=anchor(base_url().'secure_bcrypt/logout_bcrypt', 'Cerrar sesión')?>
	  		<?=anchor('secure_bcrypt/logout_bcrypt', 'Cerrar sesión')?>

	  </body>
</html>