    <?php
    require 'koneksi.php';
    if ($_POST) {
        $produk = $_POST ['produk'];
        $harga = $_POST ['harga'];
        $jumlah = $_POST ['jumlah'];
        $nama = $_POST ['nama'];
        $no_tlp = $_POST ['no_tlp'];
        $pengiriman = $_POST ['pengiriman'];
        $no_rekening = $_POST ['no_rekening'];
        $total = $jumlah*$harga;
    $query= $db->prepare("INSERT INTO hasil(produk,harga,jumlah,nama,no_tlp,pengiriman,no_rekening) VALUES (?,?,?,?,?,?,?)");
    $query-> execute([$produk,$harga,$jumlah,$nama,$no_tlp,$pengiriman,$no_rekening]);
    if ($query) {
        echo "<script>
        alert ('Total yg harus di bayar Rp. {$total},00                                                        Dapat di bayar ke no rekening 97567849938792');
        </script>";
    }
    }

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
                                <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
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
                            <li><a href="hasil.php">The Sell of Result</a></li>
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

    <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="animated fadeInLeftBig">LEZAT & MENAKJUBKAN</h4>
                        <h1 class="animated fadeInLeftBig">KALIAN HARUS MENCOBA</h1>
                        <h1 class="animated fadeInLeftBig">BOLU INI KARENA INI </h1> 
                        <h1 class="animated fadeInLeftBig">BERHASIAT.</h1>
                        <p class="animated fadeInLeftBig">Seperti yang orang banyak katakan bolu zulaika ini mengandung vitamin dan banyak mineral yang mampu membuat tubuh kita segar bugar. Dan jangan lupa bolu ini sangat spesial kali bagi orang spesial</p>
                        <a href="index.html" class="btn btn-infos animated fadeInLeftBig" role="button">LEARN MORE</a>
                    </div>

                    <div class="col-lg-6 img">
                        <a href=""><img src="images/27.png" alt="header" class="top_left_cont flipInY wow animated"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container zulaika top_left_cont flipInY wow animated">
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/bika1.jpg" alt="bika">
                        <h2>Rp. 45.000,00</h2>
                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal1">Buy!</button>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/bika2.jpg" alt="bika">
                        <h2>Rp. 42.000,00</h2>
                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal2">Buy!</button>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/bika3.jpg" alt="bika">
                        <h2>Rp. 58.000,00</h2>
                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal3">Buy!</button>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/bika4.jpg" alt="bika">
                        <h2>Rp. 55.000,00</h2>
                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal4">Buy!</button>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/bika5.jpg" alt="bika">
                        <h2>Rp. 50.000,00</h2>
                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal5">Buy!</button>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/bika6.jpg" alt="bika">
                        <h2>Rp. 43.000,00</h2>
                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal6">Buy!</button>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/bika7.jpg" alt="bika">
                        <h2>Rp. 57.000,00</h2>
                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal7">Buy!</button>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/bika8.jpg" alt="bika">
                        <h2>Rp. 45.000,00</h2>
                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal8">Buy!</button>
                    </div>
                </div>
            </div>
        </div>
        <form action="" method="post">
        <div class="modal fade" id="modal8">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color: #31b0d5">pemesanan bolu Zulaika</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="produk" value="Zulaika small">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="harga" value="45000">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="nama" placeholder="nama">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="jumlah" placeholder="jumlah">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_tlp" placeholder="No.Telepon">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-18">
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="JNE" name="pengiriman"><span class="bri">JNE</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Tiki" name="pengiriman">
                                    <span class="bni">Tiki</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="pos" name="pengiriman">
                                    <span class="mandiri">Pos</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_rekening" placeholder="No.Rekening">
                    </div>
                </div> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-info" input type="submit" value="submit">Save changes</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        </form>
        <form action="" method="post">
        <div class="modal fade" id="modal1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color: #31b0d5">pemesanan bolu zulaika</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="produk" value="Zulaika original">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="harga" value="42000">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="jumlah" placeholder="jumlah">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="nama" placeholder="nama">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_tlp" placeholder="No.Telepon">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-18">
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="BRI" name="bank"><span class="bri">JNE</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Tiki" name="pengiriman">
                                    <span class="bni">Tiki</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Pos" name="pengiriman">
                                    <span class="mandiri">Pos</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_rekening" placeholder="No.Rekening">
                    </div>
                </div> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-info" input type="submit" value="submit">Save changes</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        </form>
        <form action="" method="post">
        <div class="modal fade" id="modal2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color: #31b0d5">pemesanan bolu zulaika</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="produk" value="Zulaika pandan">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="harga" value="58000">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="jumlah" placeholder="jumlah">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="nama" placeholder="nama">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_tlp" placeholder="No.Telepon">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-18">
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="JNE" name="pengiriman"><span class="bri">JNE</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Tiki" name="pengiriman">
                                    <span class="bni">Tiki</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Pos" name="pengiriman">
                                    <span class="mandiri">Pos</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_rekening" placeholder="No.Rekening">
                    </div>
                </div> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-info" input type="submit" value="submit">Save changes</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        </form>
        <form action="" method="post">
        <div class="modal fade" id="modal3">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color: #31b0d5">pemesanan bolu amanda</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="produk" value="zulaika green tea">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="harga" value="55000">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="jumlah" placeholder="jumlah">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="nama" placeholder="nama">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_tlp" placeholder="No.Telepon">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-18">
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="JNE" name="pengiriman"><span class="bri">JNE</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Tiki" name="pengiriman">
                                    <span class="bni">Tiki</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Pos" name="pengiriman">
                                    <span class="mandiri">Pos</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_rekening" placeholder="No.Rekening">
                    </div>
                </div> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-info" input type="submit" value="submit">Save changes</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        </form>
        <form action="" method="post">
        <div class="modal fade" id="modal4">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color: #31b0d5">pemesanan bolu zulaika</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="produk" value="zulaika medium">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="harga" value="50000">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="jumlah" placeholder="jumlah">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="nama" placeholder="nama">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_tlp" placeholder="No.Telepon">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-18">
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="JNE" name="pengiriman"><span class="bri">JNE</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Tiki" name="pengiriman">
                                    <span class="bni">Tiki</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Pos" name="pengiriman">
                                    <span class="mandiri">Pos</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_rekening" placeholder="No.Rekening">
                    </div>
                </div> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-info" input type="submit" value="submit">Save changes</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        </form>
        <form action="" method="post">
        <div class="modal fade" id="modal5">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color: #31b0d5">pemesanan bolu zulaika</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="produk" value="zulaika cheese">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="harga" value="52000">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="jumlah" placeholder="jumlah">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="nama" placeholder="nama">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_tlp" placeholder="No.Telepon">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-18">
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="JNE" name="pengiriman"><span class="bri">JNE</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Tiki" name="pengiriman">
                                    <span class="bni">Tiki</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Pos" name="pengiriman">
                                    <span class="mandiri">Pos</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_rekening" placeholder="No.Rekening">
                    </div>
                </div> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-info" input type="submit" value="submit">Save changes</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        </form>
        <form action="" method="post">
        <div class="modal fade" id="modal6">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color: #31b0d5">pemesanan bolu zulaika</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="produk" value="zulaika">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="harga" value="50000">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="jumlah" placeholder="jumlah">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="nama" placeholder="nama">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_tlp" placeholder="No.Telepon">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-18">
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="JNE" name="pengiriman"><span class="bri">JNE</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Tiki" name="pengiriman">
                                    <span class="bni">Tiki</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Pos" name="pengiriman">
                                    <span class="mandiri">Pos</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_rekening" placeholder="No.Rekening">
                    </div>
                </div> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-info" input type="submit" value="submit">Save changes</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        </form>
        <form action="" method="post">
        <div class="modal fade" id="modal7">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color: #31b0d5">pemesanan bolu zulaika</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="produk" value="zulaika durian">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="harga" value="55000">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="jumlah" placeholder="jumlah">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="nama" placeholder="nama">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_tlp" placeholder="No.Telepon">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-18">
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="JNE" name="pengiriman"><span class="bri">JNE</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Tiki" name="pengiriman">
                                    <span class="bni">Tiki</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="checkbox">
                                <label for="">
                                    <input type="radio" value="Pos" name="pengiriman">
                                    <span class="mandiri">Pos</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="no_rekening" placeholder="No.Rekening">
                    </div>
                </div> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-info" input type="submit" value="submit">Save changes</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        </form>
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