<?php
$Titulo = 'Estudio | Subpágina';
include_once 'Plantillas/InicioPagina.php';
include_once 'Plantillas/BarraNavegacion.php';
?>
<div class="container">
	<div class="jumbotron">
		<h1>Mi persona en el ámbito educativo</h1>
		<p>
			Sitio dedicado a compartir las experiencias que destacan en mi vida
		</p>
	</div>
	<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://4.bp.blogspot.com/-9Cj5VBgutkc/Up1NEEJJ6GI/AAAAAAAAADA/3CaeRjFpCs0/s1600/gran+colombia.gif" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://www.imagenesdeamor.net/user-content/uploads/wall/o/29/10271599_636235973134134_5188027942511819788_n_(Copiar).jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://media.juiceonline.com/wp-content/uploads/2017/11/01164331/rthtrhrt.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
</div>
<?php
include_once 'Plantillas/CierrePagina.php';
?>