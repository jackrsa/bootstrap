<div data-role="Cursos View">

  <div data-role="header">
    <h1>Listado de Cursos</h1>
  </div><!-- /header -->

  <div data-role="content">  
    <p>
    	<?
			if ($cursos) {
				foreach ($cursos->result() as $curso) { ?>
					<ul>
						<li><a href="registrosIndividuales/<?= $curso->idCurso?>"><?= $curso->idCurso." - ".$curso->nombreCurso." - Videos: ".$curso->videosCurso?></a></li>					
					</ul>
				<? } 
			} else {
				echo "<p>El id de curso enviado en la url no existe en la db</p>";
			}
		?>
    </p>    
  </div><!-- /content -->

  <div data-role="footer">
    <h4>CodeIgniter&JQueryMobile</h4>
  </div><!-- /footer -->
</div><!-- /page -->