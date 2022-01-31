<?php
session_start();
if (!isset($_SESSION["sekertaris"])) {
    header("location: login1/");
}

$id = $_GET['id'];
include "../conf.php";
  $query_mysql = mysqli_query($conn,"SELECT * FROM kk_dalam WHERE no_kk='$id'")or die(mysql_error());
  while($i = mysqli_fetch_array($query_mysql)){
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
    <link rel="stylesheet" href="../assets/css1/templatemo-digimedia-v1.css">
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
              <img src="../assets/images/indata.png" height="50px" weight="auto" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
             <li class="scroll-to-section"><a href="wl.php" >daftar Kartu Keluarga </a></li>
              <li class="scroll-to-section"><a href="sekertaris.php" >data warga</a></li>
              <li class="scroll-to-section"><a href="add_kk.php" >tambah data kk</a></li>
              <li class="scroll-to-section"><a href="add_wd.php">tambah data warga</a></li>
              <li class="scroll-to-section"><div class="border-first-button"><a href="logout.php">logout</a></div></li> 
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
          <h4> Data Warga lokal  <em> RT 15 No <?php echo $i['no_rumah'];?></em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s" class="table-responsive">
                <div class="table-responsive">
                <table  class="table table-hover ">
                    <thead>
                      <tr>
                      <th scope="col">#</th>
                              <th scope="col">No KK</th>
                              <th scope="col">Nama</th>
                              <th scope="col">NIK</th>
                              <th scope="col">Jenis kelamin</th>
                              <th scope="col">Tempat lahir</th>
                              <th scope="col">tanggal lahir</th>
                              <th scope="col">agama</th>
                              <th scope="col">pendidikan</th>
                              <th scope="col">jenis_pekerjaan</th>
                              <th scope="col">status pernikahan</th>
                              <th scope="col">status hubungan</th>
                              <th scope="col">kewarganegaraan</th>
                              <th scope="col">action</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                     include "../conf.php";
                     $id = $_GET['id'];
                     $query_mysql = mysqli_query($conn,"SELECT * FROM warga_dalam WHERE no_kk='$id'")or die(mysql_error());
                     $no = 1;
                     while($d = mysqli_fetch_array($query_mysql)){
                     ?>
                      <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['no_kk'];?></td>
                      <td><?php echo $d['nama_lengkap'];?></td>
                      <td><?php echo $d['nik'];?></td>
                      <td><?php echo $d['jenis_kelamin'];?></td>
                      <td><?php echo $d['tempat_lahir'];?></td>
                      <td><?php echo $d['tanggal_lahir'];?></td>
                      <td><?php echo $d['agama'];?></td>
                      <td><?php echo $d['pendidikan'];?></td>
                      <td><?php echo $d['jenis_pekerjaan'];?></td>
                      <td><?php echo $d['status_pernikahan'];?></td>
                      <td><?php echo $d['status_hubungan'];?></td>
                      <td><?php echo $d['kewarganegaraan'];?></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="edit_wl.php?id=<?= $d['nik'] ?>">edit</a></li>
                              <li><a class="dropdown-item" href="crud/del_wl.php?id=<?= $d['nik'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">hapus</a></li>
                            </ul>
                        </div>
                      </td>
                      <?php  }}
                          ?> 
                      <br> <br>
                    </tr>
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
              
              
            </div>
                </div>
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