<div data-role="page">

  <div data-role="header" data-theme="b">
    <h1>Listado de Cursos</h1>
  </div><!-- /header -->

  <div data-role="content" data-theme="b">  
    <p>
    	<?= form_open("/cursos/alta")?>
		<?
			$nombre = array(
				'name' => 'nombre',
				'placeholder' => 'Escribe tu Nombre'
			);

			$videos = array(
				'name' => 'video',
				'placeholder' => 'Cantidad Videos del Curso'
			);
		?>
		
		<?= form_label("Nombre: ", "nombre")?>
		<?= form_input($nombre)?>
		<br>
		<?= form_label("Numero de Videos: ", "video")?>
		<?= form_input($videos)?>
		<br>
		<?= form_submit('','Subir Curso')?>

		<?= form_close()?>
    </p>    
  </div><!-- /content -->

  <div data-role="footer" data-theme="b">
    <h4>CodeIgniter&JQueryMobile</h4>
  </div><!-- /footer -->
</div><!-- /page -->