<<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Poetry, electronic literature, coding, essays and other things by Fernanda Mugica">
    <meta name="keywords" content="poetry, art, code, philosophy">
    <title>Fernanda Mugica | Portfolio</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo:500|Open+Sans:300,700" rel="stylesheet">

    <!-- Vendor CSS -->
        
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- BOOTSTRAP-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <!-- ÍCONOS TWITTER ETC -->
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- EFECTO DE COSAS QUE VAN LLEGANDO-->
    <link href="vendor/aos/aos.css" rel="stylesheet"> 
    

    <!-- CSS --> 
    <link href="css/style.css" rel="stylesheet">
    

    <!--llama a la página individual-->
    <link href="individual.html" rel="import"/>

  </head>

  <body>

  <!-- Navbar -->
  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">Bio</a></li>      
            <li><a href="forms/form.php">Contacto</a></li>
          </ul>
        </div>
        

        <div class="col-md-6 d-none d-md-block  mr-auto">
          
        </div>
        <div class="col-md-4 d-none d-md-block">   
          <div class="col-sm-12 social text-md-end">
          <a href="http://twitter.com/vanityfer"><span class="bi bi-twitter"></span></a>
          <a href="https://www.facebook.com/fernanda.mugica/"><span class="bi bi-facebook"></span></a>
          <a href="https://www.instagram.com/vanity.fer/?hl=fr"><span class="bi bi-instagram"></span></a>
                  
        </div>
        </div>


      </div>

    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">FERNANDA MUGICA</a>
      <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>

  <main id="main">
<body>

    <?php
        //include('header.php');
        // require 'header.php';

        /* include / require / include_once  / require_once*/
    ?>
    
    <div class="container">
        <h2>Envios por POST</h2>
        <hr>
    <div class="form w-75">
        <form action="enviardatos.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensaje" required></textarea>
            </div>

            <div class="mb-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="invalidCheck" name="newsletter" value="true" checked>
                <label class="form-check-label" for="invalidCheck">
                   Deseo suscribirme al newsletter del sitio.
                </label>
                </div>
            </div>


            <input class="btn btn-outline-primary" type="submit" value="Enviar">
        </form>
    </div>
</div>

<?php include "footer.php"; ?>

</body>
</html>