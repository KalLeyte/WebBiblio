<!-- inicio nombre -->
<?php $nombrePagina = 'Biblioteca CBTA 35'; ?>
<!-- fin nombre -->

<!-- inicio header -->
<?php
include 'includes/header.php';
?>
<!-- fin header -->

<!-- inicio barra de navegacion -->
<?php
include 'includes/navegacion.php';
?>
<!-- fin de barra de navegacion -->

<!-- inicio header -->
<div class="bgimagen-inicio">
  <div class="container animated wow zoomIn mt-5">
    <div class="titulo-bgimagen my-5">
      <h2>Bienvenidos</h2>
    </div>
  </div>
</div>
<!-- fin header -->

<!-- inicio contenido -->
<div class="text">
  <p>en esta pagina podras consultar los datos de la biblioteca y de los libros que se encuentran en el cbta 35 "leona vicario"</p>
</div>
<div class="container cbta">
  <p>Una biblioteca puede definirse, desde un punto de vista estrictamente etimológico, como el lugar donde se guardan libros. Sin embargo, en la actualidad esta concepción se ha visto superada para pasar a referirse tanto a las colecciones bibliográficas y audiovisuales como a las instituciones que las crean y las ponen en servicio para satisfacer las necesidades de los usuarios.
    Desde el 24 de octubre de 1997 se celebra el Día de la biblioteca.</p>
</div>

<br>
<br>
<br>
<!-- fin contenido -->

<!-- fin grid 1 -->
<center>
  <div class="container">
    <div class="col-md-3 ">
      <div class="card mb-4 text-white  table-hover table-dark border border-primary aso1">
        <div class="card-body">
          <h3 class="titul">horario</h3>
          <p>lunes a sabado</p>
          <p>7 AM - 3 PM</p>
        </div>
      </div>
    </div>
</center>
<!-- fin grid 1 -->

<!-- inicio del texto del slider -->
<div class="container">
  <div class="text">
    <p>la galeria se mueve automaticamente o usando las flechas</p>
  </div>
</div>
<!-- fin del texto del slider -->

<!-- slider -->
<div class="container">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/cbta.jpg" height="300" width="200" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="img/a.jpg" height="300" width="200" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="img/b.jpg" height="300" width="200" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="img/c.jpg" height="300" width="200" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="img/d.jpg" height="300" width="200" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="img/e.jpg" height="300" width="200" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="img/f.jpg" height="300" width="200" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="img/g.jpg" height="300" width="200" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="img/h.jpg" height="300" width="200" class="d-block w-100" alt="">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<!-- fin slider -->

<!-- inicio footer -->
<?php
include 'includes/footer.php';
?>
<!-- fin footer -->

<!-- archivos js -->
<?php
include 'includes/scripts.php';
?>
<!-- fin archivos js -->
</body>

</html>