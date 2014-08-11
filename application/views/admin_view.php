<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/960.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/text.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/reset.css" media="screen" />
	</head>
	<body>
		<div class="container_12">
			<div class="grid_12">
				<h1 style="text-align: center">Bienvenido de nuevo <?=$this->session->userdata('perfil')?></h1>
				<h4>Datos de sesion extraidos de la cookie mediante $this->session->userdata(param)</h4>
				<p>Session_id= <?php echo $this->session->userdata('session_id'); ?></p>
				<p>Ip address= <?php echo $this->session->userdata('ip_address'); ?></p>
				<p>User_agent= <?php echo $this->session->userdata('user_agent'); ?></p>
				<p>Last_activity= <?php echo $this->session->userdata('last_activity'); ?></p>
				<p>Last_activity= <?php 

					$hash = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, ['cost' => 10]);
					echo "<br>";
					echo $hash; 
					echo "<br>";
					/**
					 * Note that the salt here is randomly generated.
					 * Never use a static salt or one that is not randomly generated.
					 *
					 * For the VAST majority of use-cases, let password_hash generate the salt randomly for you
					 */
					$options = [
					    'cost' => 12,
					    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
					];
					echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."\n";


					$salt = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
					$salt = base64_encode($salt);
					$salt = str_replace('+', '.', $salt);
					$hash = crypt('rasmuslerdorf', '$2y$10$'.$salt.'$');
					echo "<br>";
					echo $hash;

				?></p>
				<?//=anchor(base_url().'login/logout_ci', 'Cerrar sesión')?>
				<?=anchor('login/logout_ci', 'Cerrar sesión')?>
			</div>
		</div>	
	</body>
</html>