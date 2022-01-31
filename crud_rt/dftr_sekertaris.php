<?php 

session_start();
if (!isset($_SESSION["rt"])) {
    header("location: login1/");
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
              <img src="../assets/images/indata.png"height="50px" weight="auto" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="../rt.php" class="active">Data Masyarakat</a></li>
              <li class="scroll-to-section"><a href="add.php">Add Sekretaris</a></li>
              <li class="scroll-to-section"><a href="dftr_sekertaris.php">Sekretaris</a></li>
              <!-- <li class="scroll-to-section"><a href="#portfolio">Projects</a></li>
              <li class="scroll-to-section"><a href="#blog">Blog</a></li>
              <li class="scroll-to-section"><a href="form/index.php">Pengajuan</a></li>  -->
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
            <h4>Data  <em>Sekertaris</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              
              <div>
                <div class="container">
                <table  class="table table-hover ">
                    <thead>
                      <tr>
                      <th scope="col">#</th>
                              <th scope="col">Nama</th>
                              <th scope="col" colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      include '../conf.php';
                      $no = 1;
                      $data = mysqli_query($conn,"SELECT * from rt");
                      while($d = mysqli_fetch_array($data)){
                      ?>
                    <?php  if ($d['level']== "sekertaris") {?> 
                      <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['nama'];?></td>
                        <td>
                          <!-- Example single danger button -->
                          <div class="dropdown">
                          <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="delete.php?id=<?= $d['id_user'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">hapus</a></li>
                            </ul>
                        </div>
                          
                          <?php  }}
                          ?> 
                      </td>
                      <br> <br>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              
              
            </div>
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