<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Poetry, electronic literature, coding, essays and other things by Fernanda Mugica">
    <meta name="keywords" content="poetry, art, code, philosophy">
    <title>Fernanda Mugica | Bio</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo:500|Open+Sans:300,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            
            <li><a href="about.html">Bio</a></li>
            <li><a href="formu_db.php">Contacto</a></li>
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
      <a class="navbar-brand" href="index.html">Home</a>
      <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>

  <main id="main">

    <section class="section pb-5">
      <div class="container">

        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">
            <h2><?php 
            if(mysqli_query($acceso,$sql)){
               
            echo "El mensaje se ha enviado correctamente<br><br><br><br><br><br>";
            
          }else{
            echo "El mensaje no pudo enviarse.<br><br><br><br><br><br>";
          }
          ?></h2>
            <p class="mb-0">
            
            </p>
          </div>

        </div>

        

<!-- ======= Footer ======= -->
<footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="mb-1">&copy; Copyright MyPortfolio. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyPortfolio
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-sm-6 social text-md-end">
          <a href="#"><span class="bi bi-twitter"></span></a>
          <a href="#"><span class="bi bi-facebook"></span></a>
          <a href="#"><span class="bi bi-instagram"></span></a>
          <a href="#"><span class="bi bi-linkedin"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>