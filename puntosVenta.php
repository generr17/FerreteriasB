<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Puntos de Venta | Ferreterías Bolívar</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://ferreteriasbolivar.com/assets/img/ferreteria/logo redondo 2.png" rel="icon">
  <link href="https://ferreteriasbolivar.com/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://ferreteriasbolivar.com/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://ferreteriasbolivar.com/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="https://ferreteriasbolivar.com/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="https://ferreteriasbolivar.com/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="https://ferreteriasbolivar.com/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="https://ferreteriasbolivar.com/assets/vendor/aos/aos.css" rel="stylesheet">
  
  <!-- Leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==" crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js" integrity="sha512-WXoSHqw/t26DszhdMhOXOkI7qCiv5QWXhH9R7CgvgZMHz1ImlkVQ3uNsiQKu5wwbbxtPzFXd1hK4tzno2VqhpA==" crossorigin=""></script>
	<link rel="stylesheet" href="https://leaflet.github.io/Leaflet.markercluster/example/screen.css" />\
	<link rel="stylesheet" href="https://leaflet.github.io/Leaflet.markercluster/dist/MarkerCluster.css" />
	<link rel="stylesheet" href="https://leaflet.github.io/Leaflet.markercluster/dist/MarkerCluster.Default.css" />
	<script src="https://leaflet.github.io/Leaflet.markercluster/dist/leaflet.markercluster-src.js"></script>
	<script src="https://leaflet.github.io/Leaflet.markercluster/example/realworld.388.js"></script>

  <!-- Template Main CSS File -->
  <link href="https://ferreteriasbolivar.com/assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!--header-->
<?php include('header.php'); ?>
  <!--endheader-->
<a name="mapa"></a>mapa
  <main id="main">
      
    <div class="fondoa">
    <!-- ======= Contact Section ======= -->
    <section id="pv" class="pv section-bg">
      <div class="container" data-aos="fade-up">
  
        <div class="section-title">
          <h2>Puntos de venta</h2>
        </div>

        <div id="map"></div>

        <br/>
        <div class="ajTit">
          <div class="section-title">
            <a name="nuestrosLocales"></a>
            <h2>Nuestros locales</h2>
          </div>
        </div>
        <br><br>
        <div class="row">
  
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic">
                <a href="#mapa" id="matriz"><img src="https://ferreteriasbolivar.com/assets/img/puntosVenta/img1.jpg" class="img-fluid" alt="" onClick="abrirUbicacion(0)"></a>
              </div>
              <div class="member-info">
                <h4>Matriz</h4>
               
              </div>
            </div>
          </div>
        <div></div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic">
                <a href="#mapa" id="sucursal1"><img src="https://ferreteriasbolivar.com/assets/img/puntosVenta/img2.jpg" class="img-fluid" alt="" onClick="abrirUbicacion(1)"></a>
              </div>
              <div class="member-info">
                <h4>Sucursal 1</h4>
              
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <div class="pic">
                  <a href="#mapa" id="sucursal2"><img src="https://ferreteriasbolivar.com/assets/img/puntosVenta/img3.jpg" class="img-fluid" alt="" onClick="abrirUbicacion(2)"></a>
                </div>
                <div class="member-info">
                  <h4>Sucursal 2</h4>
                 
                </div>
              </div>
            </div>
        </div>
  
      </div>
    </section><!-- End Team Section -->
    
    </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php'); ?>
  <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://ferreteriasbolivar.com/assets/vendor/jquery/jquery.min.js"></script>
  <script src="https://ferreteriasbolivar.com/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://ferreteriasbolivar.com/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="https://ferreteriasbolivar.com/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://ferreteriasbolivar.com/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="https://ferreteriasbolivar.com/assets/vendor/counterup/counterup.min.js"></script>
  <script src="https://ferreteriasbolivar.com/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="https://ferreteriasbolivar.com/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://ferreteriasbolivar.com/assets/vendor/venobox/venobox.min.js"></script>
  <script src="https://ferreteriasbolivar.com/assets/vendor/aos/aos.js"></script>
  <script src="https://ferreteriasbolivar.com/assets/js/mapa.js"></script>

  <!-- Template Main JS File -->
  <script src="https://ferreteriasbolivar.com/assets/js/main.js"></script>

</body>

</html>