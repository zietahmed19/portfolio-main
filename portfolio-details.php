<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:500,500i,400,400i,600,600i,700,700i|Raleway:500,500i,400,400i,500,500i,600,600i,700,700i|Poppins:500,500i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
  
  <div class="d-flex flex-column">
    <a href="forms/index.php" class="nav-link scrollto active"><i class="bx bx-lock"></i></a>
    <div class="profile">
      <img src="forms/portfolio/<?=$inf['img_profile']?>" class="img-fluid rounded-circle">
      <h1 class="text-light"><a href="index.php"><?=$inf['name']?></a></h1>
      <div class="social-links mt-3 text-center">
        <a href="<?=$inf['twit']?>" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="<?=$inf['face']?>" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="<?=$inf['inst']?>" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="<?=$inf['skype']?>" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="<?=$inf['linkedin']?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfoio Details</h2>
          <div class=" justify-content-end align-items-center fs-2">
        <a  href="index.php"><i class='bx bx-share'></i></a>
         
        </div>
        </div>
       
       
      </div>
    </section><!-- End Breadcrumbs -->
    <?php
     include_once "include/db.php";
      
        if (isset($_GET['id'])) {  
           
        $id=$_GET['id'];
         
        
       
          $sql = "SELECT * FROM portfolio WHERE id='$id' ";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) ==1) {
          	while ($images = mysqli_fetch_assoc($res)) { 
         ?>
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

      
        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">
        
                <div class="swiper-slide">
                  <img src="forms/uploads/<?=$images['img_details']?>"height = "400px" width = "390px" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="forms/uploads/<?=$images['img_details1']?>"height = "400px" width = "390px" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="forms/uploads/<?=$images['img_details2']?>"height = "400px" width = "390px" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="forms/uploads/<?=$images['img_details3']?>"height = "400px" width = "390px" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="forms/uploads/<?=$images['img_details4']?>"height = "400px" width = "390px"alt="">
                </div>

                

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>:   <?=$images['category']?></li>
                <li><strong>langage</strong>:    <?=$images['langage']?></li>
                <li><strong>data_base</strong>:  <?=$images['data_base']?></li>
                <li><strong>Project</strong>:    <?=$images['project']?> </li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Description</h2>
              <p>
              <?=$images['descr']?>
              </p>
            </div>
          </div>
<?php } } }?>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>A Inversion</span></strong>
      </div>
      <div class="credits">
      
        Designed by <a href="https://www.facebook.com/Ainversionn"> AInversion team</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>