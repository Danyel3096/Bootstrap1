<?php
$Titulo = 'Catolicismo | Subpágina';
include_once 'Plantillas/InicioPagina.php';
include_once 'Plantillas/BarraNavegacion.php';
?>
<div class="container">
<div class="jumbotron">
		<h1>Mi persona en el ámbito religioso</h1>
			<p>
				Sitio dedicado a compartir las experiencias que destacan en mi vida>
			</p>
	</div>
<div id="exampleModalPopovers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalPopoversLabel">Titulo del Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Tooltips en un modal</h5>
        <p><a href="#" class="tooltip-test" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>" data-container="#exampleModalPopovers" data-toggle="tooltip" data-html="true">Este enlace web</a> y <a href="#" class="tooltip-test" title="Tooltip" data-container="#exampleModalPopovers" data-toggle="tooltip">ese enlace web</a> tiene tooltips por encima.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cierra esta ventana</button>
        <button type="button" class="btn btn-primary">Guarda los cambios</button>
      </div>
    </div>
  </div>
</div>

<div class="bd-example">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPopovers">
    Prueba el modal
  </button>
		</div>
		<button type="button" class="btn btn-lg btn-danger float-right" data-toggle="popover" data-placement="left" title="Titulo del Popover" data-content="Los colores web son aquellos colores que aparecen en una página web.">Haz click para ver-toggle popover</button>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
<?php
include_once 'Plantillas/CierrePagina.php';
?>