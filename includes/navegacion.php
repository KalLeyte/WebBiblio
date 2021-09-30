<!-- barra de navegacion -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark table-hover table-dark border border-primary navbar-blue  bgnav animated wow bounceInDowns">
   <!-- animated wow bounceInDown (animacion para el menu :,v)-->
   <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
      <img src="favico.ico" width="30" height="30" class="d-inline-block align-top" alt=""> &nbsp;&nbsp;&nbsp; <a class="navbar-brand" href="index.php">BIBLIOTECA</a>
      <hr>
      <div class="collapse navbar-collapse justify-content-end blue" id="navbarCollapse">
         <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">INICIO</a></li>
            <li class="nav-item"><a class="nav-link" href="nosotros.php">Nuestra biblioteca</a></li>
            <li class="nav-item"><a class="nav-link" href="digital.php">bibliotecas digitales</a></li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">busqueda de libros por</a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item navbar-blue" href="tema.php">tema</a>
                  <a class="dropdown-item navbar-blue" href="area.php">area</a>
                  <a class="dropdown-item navbar-blue" href="materia.php">materia</a>
                  <a class="dropdown-item" href="nombre.php">nombre</a>
                  <a class="dropdown-item" href="autor.php">autor</a>
                  <a class="dropdown-item" href="editorial.php">editorial</a>
                  <a class="dropdown-item" href="edicion.php">edición</a>
                  <a class="dropdown-item" href="año.php">año</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="contacto.php">contacto</a></li>
         </ul>
      </div>
   </div>
</nav>