

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <div class="wrap">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md d-flex align-items-center">
        <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">08973306609</a> or <span class="mailus">email :</span> <a href="#">Petcare@email.com</a></p>
      </div>

    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="index_user.php"><span class="flaticon flaticon-stethoscope"></span><h1>DHEE-NA VET<span class="mini">Pets Care</span></h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

<div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index_user.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="tentangkami.html" class="nav-link">Tentang kami</a></li>
          <li class="nav-item active"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="galeri.html" class="nav-link">Galeri</a></li>
          <li class="nav-item cta"><a href="pelayanan.php" class="nav-link">Pelayanan</a></li>

      </ul>
    </div>
  </div>
</nav>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg10.jpeg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-3 bread">Semua Blog</h1>
     </div>
   </div>
 </div>
</section>



<section class="ftco-section bg-light">
  <div class="container">

  
    
<?php

$koneksi = mysqli_connect("localhost","root","","adminpetcare");



#------- memulai page number -------------------------------------------------------------------------------------#
$dataPerPage = 5; 
if(isset($_GET['hal']))
{ 
  $noPage = $_GET['hal'];
}else{  
  $noPage = 1;
}
$offset   = ($noPage - 1) * $dataPerPage;

$ambil_data = mysqli_query($koneksi, "select * from blog order by id desc limit $offset, $dataPerPage");
$hitung_record = mysqli_query($koneksi, "SELECT COUNT(*) AS jumData FROM blog");
$data          = mysqli_fetch_array($hitung_record);
$jumData       = $data['jumData'];
$jumPage  = ceil($jumData/$dataPerPage);
# ceil digunakan untuk membulatkan hasil pembagian
#------- akhir page number -------------------------------------------------------------------------------------#

while($hasil_data = mysqli_fetch_array($ambil_data)){
?>

  <div class="row-fluid">
      <div class="span4">
        <img alt="300x200" src="images/<?=$hasil_data['gambar'];?>" style="width: 300px; height: 200px;">
      </div>
      <div class="span8">
          <h2><?=$hasil_data['judul'];?></h2>
          <p style="text-align:justify;"><?=substr($hasil_data['isi'],0,500);?></p>
          <p>
            <a href="lihatblog.php?id=<?=$hasil_data['id'];?>" class="btn btn-primary">Baca Selengkapnya</a> 
            <a href="#" class="btn btn-inverse">Dipostkan pada <?=$hasil_data['tgl'];?></a>
          </p>
      </div>      
    </div>
    <hr>

    
<?php
}
?>

    </ul>
</div>


</div>
</section>

<footer class="ftco-footer">
  <div class="container mb-5 pb-4">
    <div class="row">
      <div class="col-lg col-md-6">
        <div class="ftco-footer-widget">
          <h2 class="logo d-flex align-items-center">
            <a href="#" class="d-flex align-items-center">
              <div class="icon"><span class="flaticon-stethoscope flaticon"></span></div>
              <div class="logo1">
                <span> DHEE-NA VET</span>
                <span class="sub">Pets Care</span>
              </div>
            </a>
          </h2>
          <p>Kami Akan Lakukan Terbaik Untuk Hewan Anda.</p>
          <ul class="ftco-footer-social list-unstyled mt-4">
            <li><a href="hubungi.html"><span class="fa fa-phone"></span></a></li>
            <li><a href="hubungi.html"><span class="fa fa-map-marker"></span></a></li>
            <li><a href="hubungi.html"><span class="fa fa-paper-plane"></span></a></li>
          </ul>
        </div>
      </div>


     <div class="col-lg-2 col-md-6">
            <div class="ftco-footer-widget">
              <h2 class="ftco-heading-2">Semua Halaman</h2>
              <ul class="list-unstyled">
                <li><a href="index_user.php"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
                <li><a href='pelayanan.php'><span class="fa fa-chevron-right mr-2"></span>Pelayanan</a></li>
                <li><a href="blog.php"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                <li><a href="galeri.html"><span class="fa fa-chevron-right mr-2"></span>Galeri</a></li>
                <li><a href="tentangkami.html"><span class="fa fa-chevron-right mr-2"></span>Tentang Kami</a></li>
                <li><a href="hubungi.html"><span class="fa fa-chevron-right mr-2"></span>Hubungi Kami</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg col-md-6">
            <div class="ftco-footer-widget">
              <h2 class="ftco-heading-2">Silahkan Hubungi?</h2>
              <div class="block-23 mb-3">
                <ul>
              <li><span class="fa fa-map-marker mr-3"></span><span class="text">Indramayu</span></li>
              <li><a href="#"><span class="fa fa-phone mr-3"></span><span class="text">081 328 353 001</span></a></li>
              <li><a href="#"><span class="fa fa-paper-plane mr-3"></span><span class="text">dheenavet@gmail.com</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-primary py-5">
    <div class="row">
      <div class="col-md-12 text-center">


      </div>
    </div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>

<script src="js/main.js"></script>

</body>
</html>