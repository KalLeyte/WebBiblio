<!-- inicio nombre -->
<?php $nombrePagina = 'Biblioteca Digital'; ?>
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
      <h2>bibliotecas digitales</h2>
    </div>
  </div>
</div>
<!-- fin header -->

<!-- inicio contenido -->
<br>
<div class="card-deck">
  <div class="container extra">
    <h1>no encontraste algun libro que necesitabas! aqui puedes consultar nuestra seccion de bibliotecas digitales en las cuales puedes buscar mas variedad</h1>
    <br>
    <div class="row">
      <div class="card mb-3 card text-white table-hover table-dark border border-primary aso1" style="max-width: 34rem;" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4 border border-dark">
            <img src="img/jl.jpg" height="250px" class="card-img" alt="">
          </div>
          <div class="col-md-8 ">
            <div class="card-body">
              <h5 class="card-title">biblioteca sems: jovenes lectores</h5>
              <p class="card-text">
                En el puedes leer diversos textos, escribir tus propias creaciones y compartirlas con otras personas que como tú.</p>
              <a href="http://www.joveneslectores.sems.gob.mx/index.php/biblioteca-sems" class="btn btn-dark my-2 ">ir a la pagina</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 card text-white table-hover table-dark border border-primary aso1" style="max-width: 34rem;" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4 border border-dark">
            <img src="img/unam.png" height="250px" class="card-img">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">unam</h5>
              <p class="card-text">
                En este Portal puedes encontrar los datos de cada una de las Bibliotecas que integran el Sistema Bibliotecario y de Información de la Universidad Nacional Autónoma de México. </p>
              <a href="http://www.bibliotecas.unam.mx" class="btn btn-dark my-2">ir a la pagina</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card-deck">
  <div class="container">
    <div class="row">
      <div class="card mb-3 card text-white table-hover table-dark border border-primary aso1" style="max-width: 34rem;" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4 border border-dark">
            <img src="img/bnm.png" height="250px" class="card-img" alt="">
          </div>
          <div class="col-md-8 ">
            <div class="card-body">
              <h5 class="card-title">biblioteca nacional de méxico</h5>
              <p class="card-text">
                Permite la búsqueda sobre la información catalográfica de las obras pertenecientes al catálogo general de la Biblioteca.</p>
              <a href="http://www.cervantesvirtual.com/" class="btn btn-dark my-2 ">ir a la pagina</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 card text-white table-hover table-dark border border-primary aso1" style="max-width: 34rem;" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4 border border-dark">
            <img src="img/world.png" height="250px" class="card-img">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">biblioteca digital mundial</h5>
              <p class="card-text">
                Pone a disposición en Internet, de manera gratuita y en formato multilingüe, importantes materiales fundamentales de culturas de todo el mundo.</p>
              <a href="http://www.wdl.org/es/" class="btn btn-dark my-2">ir a la pagina</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card-deck">
  <div class="container">
    <div class="row">
      <div class="card mb-3 card text-white table-hover table-dark border border-primary aso1" style="max-width: 34rem;" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4 border border-dark">
            <img src="img/ula.png" height="250px" class="card-img" alt="">
          </div>
          <div class="col-md-8 ">
            <div class="card-body">
              <h5 class="card-title">biblioteca virtual ula</h5>
              <p class="card-text">
                Es un espacio de diferentes fuentes de información electrónica, entre ellas: libros, artículos de revistas, videograbaciones, obras de referencias.</p>
              <a href="http://biblioteca.ajusco.upn.mx/web/bibliotecas-en-linea.php" class="btn btn-dark my-2 ">ir a la pagina</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 card text-white table-hover table-dark border border-primary aso1" style="max-width: 34rem;" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4 border border-dark">
            <img src="img/free.png" height="250px" class="card-img">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">the free library</h5>
              <p class="card-text">
                Se trata de una biblioteca con artículos y libros (en inglés) de diversas áreas principalmente científicas y de divulgación humanística (incluyendo literatura).</p>
              <a href="http://www.thefreelibrary.com/" class="btn btn-dark my-2">ir a la pagina</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- fin contenido -->

<!-- inicio footer -->
<br>
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