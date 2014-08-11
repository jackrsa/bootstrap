<div data-role="Cursos View">

  <div data-role="header">
    <h1>Listado de Cursos</h1>
  </div><!-- /header -->

  <div data-role="content">  
    <p>
    	<?= form_open("/codigoFacilito/recibirdatos")?>
		<? $nombre = array(
			'name' => 'nombre',
			'placeholder' => 'Escribe tu Nombre'
		);

		$videos = array(
			'name' => 'video',
			'placeholder' => 'Cantidad Videos del Curso'
		);?>
		
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

  <div data-role="footer">
    <h4>CodeIgniter&JQueryMobile</h4>
  </div><!-- /footer -->
  
</div><!-- /page -->
