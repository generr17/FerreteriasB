<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>| Ferreterías Bolívar</title>
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

  <!-- Template Main CSS File -->
  <link href="https://ferreteriasbolivar.com/assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!--header-->
<?php include('header.php'); ?>
  <!--endheader-->

  <main id="main">
    <div class="fondoa">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contáctanos</h2>
          <p>Si tienes alguna pregunta, no dudes en decírnosla estaremos felices en responderte!</p>
        </div>


          <div class="row mt-5">

            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <a href="https://ferreteriasbolivar.com/puntosVenta#nuestrosLocales"><i class="icofont-google-map" style="background-color: #20449B;color: white;"></i></a>
                  <h4>Nuestros locales:</h4>
                  <br/>
                  <p><b>Matriz:</b></p>
                  <br/>
                  <p style="text-align: justify;">Av. Los Chasquis 13-28 y Manco Capac</p>
                  <p>Teléfono trabajo: 032846813</p>
                  <p>Celulares: 0998371958 / 0988228466</p>
                  <br/>
                  <p><b>Sucursal 1:</b></p>
                  <br/>
                  <p>Av. Jose Peralta a treinta metros del redondel de huachi</p>
                  <p>Celular: 0995378425</p>
                  <br/>
                  <p><b>Sucursal 2:</b></p>
                  <br/>
                  <p style="text-align: justify;">Av. Los Capulíes y Av Rodrigo Pachano</p>
                  <p>Teléfono trabajo: 032856464</p>
                  <p>Celular: 0999622158</p>
                </div>
  
                <div class="email">
                  <i class="icofont-envelope" style="background-color: #20449B;color: white;"></i>
                  <h4>Email principal:</h4>
                  <p>contaferrbolivar@outlook.com</p>
                </div>
  
              </div>
  
            </div>
  
            <div class="col-lg-8 mt-5 mt-lg-0">
  
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingresa nombre" data-rule="minlen:4" data-msg="Por favor ingresa un nombre de al menos 4 carácteres" />
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingresa teléfono" data-rule="minlen:10" data-msg="Ingresa un teléfono válido"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/> 
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa email" data-rule="email" data-msg="Por favor ingresa un email válido" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Ingresa asunto" data-rule="minlen:4" data-msg="Por favor ingresa un asunto mayor a 8 carácteres" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="mensaje" rows="5" data-rule="required" data-msg="Por favor ingresa tu requerimiento" placeholder="Mensaje"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Cargando</div>
                  <div class="error-message">No se ha podido enviar el mensaje correctamente, por favor contacta con el administrador.</div>
                    <div class="sent-message">Tu mensaje ha sido enviado, gracias!</div>
                  </div>
                <div class="text-center"><button type="submit" class="btnEnviar" style="background-color: #1976CB;color: white;">Enviar mensaje</button></div>
              </form>
  

        </div>

      </div>
    </section><!-- End Contact Section -->
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

  <!-- Template Main JS File -->
  <script src="https://ferreteriasbolivar.com/assets/js/main.js"></script>

</body>

</html>