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
            
          <li><a href="registration.php">Sign up</a></li>
            
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
            <h2>INICIAR SESIÓN</h2>
            <p class="mb-0">
              
            </p>
          </div>

        </div>

        <?php
 
include('config.php');
session_start();


 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">La combinación de usuario y contraseña no es correcta</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['username'];
            echo '<div class= "exito">Has ingresado correctamente<br><br></div>';
        } else {
            echo '<div class="error"> La combinación de usuario y contraseña no es correcta<br><br></div>';
        }
    }
     
    if(!isset($_SESSION['user_id'])){
      header('Location: login.php');
      exit;
  } else {
      header('Location:indexE.php');
  }
}




 

?>

 

        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">

            <div class="row">
            <form method="post" action="indexE.php">
         
          
            <div class="row gy-3">
             <div class="col-md-12 form-group">
             <label for="name">Usuario</label>
                  <input type="text" name="username" class="form-control" id="username" pattern="[a-zA-Z0-9]+" required>
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
                  <input type="submit" class="readmore d-block w-100" name="login" value="login">
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

