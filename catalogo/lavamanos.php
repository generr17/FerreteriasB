<?php ob_start('comprimir_pagina'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Lavamanos | Ferreterías Bolívar</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <link href="https://ferreteriasbolivar.com/assets/img/ferreteria/favicon.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://ferreteriasbolivar.com/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://ferreteriasbolivar.com/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="https://ferreteriasbolivar.com/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://ferreteriasbolivar.com/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="https://ferreteriasbolivar.com/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="https://ferreteriasbolivar.com/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="https://ferreteriasbolivar.com/assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php include('../header.php'); ?>
<div class="fondoa">
      <main id="main">
    <section class="property-grid grid">
    <div class="section-title">
        <h2>Lavamanos</h2>
      </div>
        <div class="container" >
          <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="https://ferreteriasbolivar.com/assets/img/productos/Acabados/Lavamanos/corona.png" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-footer-a" style="bottom:-420px">
                    <div class="descripcion">
                    <h4 class="card-info-title">Lavamanos Corona</h4>
                    </div>     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200"class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="https://ferreteriasbolivar.com/assets/img/productos/Acabados/Lavamanos/edesa.png" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-footer-a" style="bottom:-420px">
                    <div class="descripcion">
                    <h4 class="card-info-title">Lavamanos Edesa</h4>
                    </div>     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="https://ferreteriasbolivar.com/assets/img/productos/Acabados/Lavamanos/briggs.png" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-footer-a" style="bottom:-420px">
                    <div class="descripcion">
                    <h4 class="card-info-title">Lavamanos Briggs</h4>
                    </div>     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="https://ferreteriasbolivar.com/assets/img/productos/Acabados/Lavamanos/fv.png" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-footer-a" style="bottom:-420px">
                    <div class="descripcion">
                    <h4 class="card-info-title">Lavamanos Franz Viegener</h4>
                    </div>     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
   </div> 
    <?php include('../footer.php'); ?>
    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
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
    <script src="https://ferreteriasbolivar.com/assets/js/main.js"></script>
</body>
</html>
<?php
ob_end_flush(); 
function comprimir_pagina($buffer) { 
    $busca = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'); 
    $reemplaza = array('>','<','\\1'); 
    return preg_replace($busca, $reemplaza, $buffer); 
} 
?>