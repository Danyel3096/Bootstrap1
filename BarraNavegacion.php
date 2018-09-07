<?php
include_once 'App/Configuracion.php';
?>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
<div class="container">
	<div class="navbar-header">
		<a class="navbar-brand" href="<?php echo SERVIDOR ?>">My Web Site</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</div>
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo RUTA_OTAKU ?>"><i class="far fa-address-card"></i> Otaku</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo RUTA_CATOLICISMO ?>"><i class="far fa-address-book"></i> Catolicismo</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo RUTA_ESTUDIO ?>"><i class="far fa-address-book"></i> Estudio</a>
			</li>
		</ul>
	</div>
</div>
</nav>