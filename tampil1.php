<?php 

require 'init.php';

$hasil = $db->query("SELECT * FROM hasil")->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cooks Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <title>Cooks a Hotels and Restaurants Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!-- animation-effect -->
    <link href="css/animate.min.css" rel="stylesheet"> 
    <script src="js/wow.min.js"></script>
    <script>
     new WOW().init();
    </script>
    <link href='//fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- header -->
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <div class="logo">
                        <a class="navbar-brand" href="index.html"><img src="images/20.png" alt="bolu" width="86" style="margin-top: -19px;"></a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="cl-effect-13" id="cl-effect-13">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">Home</a></li>
                            <li role="presentation" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    Products <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a href="zulaika.php">Bolu Zulaika</a></li>
                                  <li><a href="amanda.php">Bolu Amand</a></li>
                                  <li><a href="buah.php">Buah Buahan</a></li>
                                  <li><a href="bunga.php">Bunga</a></li>
                                  <li><a href="kopi.php">Kopi</a></li>
                                  <li><a href="sirup.php">Sirup</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="hasil.php" class="active">The Sell of Result</a></li>
                            <li><a href="hasil.php">Log out</a></li>
                        </ul>
                    </nav>
                    <div class="social-icons">
                        <ul>
                            <li><a class="icon-link round facebook" href="www.twitter.com"></a></li>
                            <li><a class="icon-link round p" href="www.pink.com"></a></li>
                            <li><a class="icon-link round twitter" href="www.facebook.com"></a></li>
                            <li><a class="icon-link round dribble" href="www.dribble.com"></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>

    

    <section class="admin">
        <div class="container">
            <h1>Daftar Hasil Penjualan</h1>
        </div>
    </section>
    </form>
     <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Name</th>
                <th>Nomor Telpon</th>
                <th>Pengiriman</th>
                <th>Bank account</th>
            </tr>
        </thead>
    <?php foreach ($hasil as $r): ?>
        <tbody>
            <tr>
                <td><?= $r->produk ?></td>
                <td><?= $r->harga ?></td>
                <td><?= $r->jumlah ?></td>
                <td><?= $r->nama ?></td>
                <td><?= $r->no_tlp ?></td>
                <td><?= $r->pengiriman ?></td>
                <td><?= $r->no_rekening ?></td>
            </tr>
        </tbody>
    <?php endforeach ?>
    </table>
    <div class="footer">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-3 footer-grid wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h3>Ini adalah pemasak kami</h3>
                    <div class="footer-grd-left">
                        <img src="images/6.jpg" class="img-responsive" alt=" " />
                    </div>
                    <div class="footer-grd-left">
                        <p>Nah, Ini dia pemasak kami yang selalu tertawa saat melakukan sesuatu baik itu mamasak atau tidak memasak dia selalu tersenyum sehingga dia bisa mengeluarkan ide untuk memasak menu yang istimewa.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-3 footer-grid wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h3>Zulaika, Amand, Buah-buahan</h3>
                    <ul>
                        <li><a href="zulaika.html">Bolu Istimewa</a></li>
                        <li><a href="zulaika.html">Bolu Yang Indah</a></li>
                        <li><a href="amand.html">Bolu Yang bergizi</a></li>
                        <li><a href="amand.html">Bolu Yang Menawan</a></li>
                        <li><a href="buah.html">Buah-Buahan Yang Segar</a></li>
                        <li><a href="buah.html">Mengandung Banyak Vitamin</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h3>Bunga, Kopi, Sirup</h3>
                    <ul>
                        <li><a href="bunga.html">Bunga Yang Lucu</a></li>
                        <li><a href="bunga.html">Bunga Yang Indah</a></li>
                        <li><a href="kopi.html">Kopi Yang Sehat</a></li>
                        <li><a href="kopi.html">Mengandung Banyak Nutrisi</a></li>
                        <li><a href="sirup.html">Sirup Yang Segar</a></li>
                        <li><a href="#.sirup.html">Memberi Keindaha Setiap Rasa</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h3>Semua Kami Jual</h3>
                    <div class="footer-grd">
                        <a href="#"><img src="images/21.png" class="img-responsive" alt=" " width="100"/></a>
                    </div>
                    <div class="footer-grd">
                        <a href="#"><img src="images/22.png" class="img-responsive" alt=" " width="100" height="120" /></a>
                    </div>
                    <div class="footer-grd">
                        <a href="#"><img src="images/23.png" class="img-responsive" alt=" " width="100"/></a>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="footer-grd">
                        <a href="#"><img src="images/24.png" class="img-responsive" alt=" " width="100"/></a>
                    </div>
                    <div class="footer-grd">
                        <a href="#"><img src="images/25.png" class="img-responsive" alt=" " width="100"/></a>
                    </div>
                    <div class="footer-grd">
                        <a href="#"><img src="images/26.png" class="img-responsive" alt=" " width="100" /></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container">
            <p>&copy 2016 Online Shop. All rights reserved | Design by <a href="http://w3layouts.com/"> Me Alone.</a></p>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>

    </body>
</html>
   