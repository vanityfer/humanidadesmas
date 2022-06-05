


<!--esta es la parte de adelante que ve el usuario. guardar.php va a ser el intermediario entre frontend y backend. proxima clase. -->
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
            
          
            <li><a href="login.php">Log in</a></li>
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
            <h2>REGISTRO</h2>
            <p class="mb-0">
              
            </p>
          </div>

        </div>

        <?php
 
 include('config.php');
 session_start();
  
 if (isset($_POST['register'])) {
  
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $password_hash = password_hash($password, PASSWORD_BCRYPT);
  
     $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
     $query->bindParam("email", $email, PDO::PARAM_STR);
     $query->execute();
  
     if ($query->rowCount() > 0) {
         echo '
         <div class="error">  
            La dirección de e-mail introducida ya ha sido registrada previamente<br><br>
               
   
           </div>';
     }
  
     if ($query->rowCount() == 0) {
         $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
         $query->bindParam("username", $username, PDO::PARAM_STR);
         $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
         $query->bindParam("email", $email, PDO::PARAM_STR);
         $result = $query->execute();
  
         if ($result) {
             echo '
             <div class="exito"> 
             Te has registrado correctamente<br><br>
             </div>';
         } else {
             echo 'Something went wrong!';
         }
     }
 }
  
 ?>
 


        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">

            <div class="row">
            <form method="post" action="" name="signup-form">
         
          
            <div class="row gy-3">
             <div class="col-md-6 form-group">
             <label for="name">Usuario</label>
                  <input type="text" name="username" class="form-control" id="username" pattern="[a-zA-Z0-9]+" required>
             </div>
          
            <div class="col-md-6 form-group">
            <label for="name">E-mail</label>
                  <input type="email" class="form-control" name="email" id="email" required>
            </div>

            <div class="col-md-12 form-group">
            <label for="name">Contraseña</label>
                  <input type="password" class="form-control" name="password" id="password" required>
             </div>

             
         
            
              <div class="col-md-12 my-3">
                  <div class="loading"></div>
                  <div class="error-message"></div>
                  <div class="sent-message"></div>
                </div>

                <div class="col-md-12 mt-0 form-group">
                  <input type="submit" class="readmore d-block w-100" name="register" value="register">
                </div>


                
              </div>

              

            </form>

          </div>
        </div>

          
        

      </div>

    </section>

  </main>

<!-- ======= Footer ======= -->
<footer class="footer" role="contentinfo">
<div class="container">
<div class="row">
<div class="col-sm-6">
<p class="mb-1"></p>
<div class="credits">
  
</div>
</div>
<div class="col-sm-6 social text-md-end">
<a href="http://twitter.com/vanityfer"><span class="bi bi-twitter"></span></a>
<a href="https://www.facebook.com/fernanda.mugica/"><span class="bi bi-facebook"></span></a>
<a href="https://www.instagram.com/vanity.fer/?hl=fr"><span class="bi bi-instagram"></span></a>
<!--<a href="#"><span class="bi bi-linkedin"></span></a>-->
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

