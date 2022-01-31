<?php 

session_start();
if (!isset($_SESSION["sekertaris"])) {
    header("location: ../login1/");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/png" href="assets/images/surat.png"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>inData</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css1/fontawesome.css">
    <link rel="stylesheet" href="../assets/css1/templatemo-digimedia-v2.css">
    <link rel="stylesheet" href="../assets/css1/animated.css">
    <link rel="stylesheet" href="../assets/css1/owl.css">
<!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="../assets/images/indata.png" height="50px" weight="auto"alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
            <li class="scroll-to-section"><a href="wl.php" >daftar Kartu Keluarga </a></li>
              <li class="scroll-to-section"><a href="../sekertaris.php" >data warga</a></li>
              <li class="scroll-to-section"><a href="add_kk.php" >tambah data kk</a></li>
              <li class="scroll-to-section"><a href="add_wd.php">tambah data warga</a></li>
              <li class="scroll-to-section"><div class="border-first-button"><a href="../logout.php">logout</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
      <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Tambah Data Warga <em>lokal</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
      <form action="crud/edit_wl.php" method="post">
        <?php
          include "../conf.php";
          $id = $_GET['id'];
          $query_mysql = mysqli_query($conn,"SELECT * FROM warga_dalam WHERE nik='$id'")or die(mysql_error());
          $no = 1;
          while($d = mysqli_fetch_array($query_mysql)){
          ?>
          <input type="text" class="form-control" name="id" value="<?php echo $d['id_masyarakat'];?>"hidden >
        <div class="mb-3">
          <label  class="form-label">Nomor KK</label>
          <input type="text" class="form-control" name="no_kk" value="<?php echo $d['no_kk'];?>" >
        </div>
        <div class="mb-3">
          <label  class="form-label">Nama lengkap</label>
          <input type="text" class="form-control" name="nama"value="<?php echo $d['nama_lengkap'];?>" >
        </div>
        <div class="mb-3">
          <label  class="form-label">NIK</label>
          <input type="text" class="form-control" name="nik" value="<?php echo $d['nik'];?>" >
        </div>
        <div class="mb-3">
          <label  class="form-label">jeni kelamin</label>
          <input type="text" class="form-control" name="gender" value="<?php echo $d['jenis_kelamin'];?>" >
        </div>
        <div class="mb-3">
          <label  class="form-label">tempat lahir</label>
          <input type="text" class="form-control" name="tempat" value="<?php echo $d['tempat_lahir'];?>" >
        </div>
        <div class="mb-3">
          <label  class="form-label">tanggal lahir</label>
          <input type="date" class="form-control" name="tanggal" value="<?php echo $d['tanggal_lahir'];?>" >
        </div>
        <div class="mb-3">
          <label  class="form-label">agama</label>
          <input type="text" class="form-control" name="agama"  value="<?php echo $d['agama'];?>">
        </div>
        <div class="mb-3">
          <label  class="form-label">pendidikan</label>
          <input type="text" class="form-control" name="pendidikan" value="<?php echo $d['pendidikan'];?>"  >
        </div>
        <div class="mb-3">
          <label  class="form-label">jenis pekerjaan</label>
          <input type="text" class="form-control" name="pekerjaan" value="<?php echo $d['jenis_pekerjaan'];?>" >
        </div>
        <div class="mb-3">
          <label  class="form-label">status pernikahan</label>
          <input type="text" class="form-control" name="nikah" value="<?php echo $d['status_pernikahan'];?>" >
        </div>
        <div class="mb-3">
          <label  class="form-label">status hubungan</label>
          <input type="text" class="form-control" name="hubungan" value="<?php echo $d['status_hubungan'];?>"  >
        </div>
        <div class="mb-3">
          <label  class="form-label">kewarganegaraan</label>
          <input type="text" class="form-control" name="warga"  value="<?php echo $d['kewarganegaraan'];?>" >
        </div>
        
        <?php } ?>
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <p>Copyright © 2022  </p>
          <!-- <p>Copyright © 2022  
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p> -->
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/animation.js"></script>
  <script src="../assets/js/imagesloaded.js"></script>
  <script src="../assets/js/custom.js"></script>

</body>
</html>