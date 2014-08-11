<style>

  body {
  padding-top:65px;
}

@media (min-width: 979px) {

  #midCol.affix-top {
      position:fixed;
      width:265px;
      margin-right:10px;
      border: solid;
  }

  #midCol.affix {
      position:static;
      width:100%;
      border: solid;
  }

}

@media (min-width: 767px) {
  .affix,.affix-top {
      position:fixed;
  }
}

</style>

<div class="container">




	<div class="row clearfix">
		<div class="col-md-2 column">

	        <!-- Sidebar -->
	        <div class="well" id="sidebar-wrapper">
	            <ul class="sidebar-nav nav nav-stacked">
	                <li class="sidebar-brand"><a href="#">Start Bootstrap</a>
	                </li>
	                <li><a href="#">Dashboard</a>
	                </li>
	                <li><a href="#">Shortcuts</a>
	                </li>
	                <li><a href="#">Overview</a>
	                </li>
	                <li><a href="#">Events</a>
	                </li>
	                <li><a href="#">About</a>
	                </li>
	                <li><a href="#">Services</a>
	                </li>
	                <li><a href="#">Contact</a>
	                </li>
	            </ul>
	      	</div>

		</div>
		<div class="col-md-10 column">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
					 </button>
					 <a class="navbar-brand" href="<?php echo site_url().'/qrnetwork/login_ok'?>">QR Network</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input class="form-control" type="text" />
						</div> <button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php  echo $this->session->userdata('username');?><strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php echo site_url().'/qrnetwork/logout'?>">Logout</a>
						</li>
					</ul>
				</div>

			</nav>

			<!-- JUMBOTRON -->
			<div class="jumbotron">
				<h1>
					Bienvenido <?=$this->session->userdata('username')?>
				</h1>
				<p>
					Datos de sesion: <br>
					<?php  echo "id_usuario: ".$this->session->userdata('id_usuario');?><br>
					<?php  echo "perfil: ".$this->session->userdata('perfil');?><br>
					<?php  echo "username: ".$this->session->userdata('username');?><br>
					<?php  echo "password: ".$this->session->userdata('password');?><br>
					<?php  echo "token: ".$this->session->userdata('token');?>
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Learn more</a>
				</p>
			</div> <!-- ./JUMBOTRON -->
		</div>
	</div>

	<div class="row clearfix">
		<div class="col-md-4 column">
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
		<div class="col-md-4 column">
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
		<div class="col-md-4 column">
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
	</div>
</div>

	<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    </script>



