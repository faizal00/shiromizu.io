<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="img/mini.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <title>Shiromizu.com</title>
</head>
<body>
    
    <!-- nav -->
    <?php include 'nav.php';?>

    <!-- contain -->
      <div class="carousel">
          <div class="carousel-prev"></div>
          <div class="carousel-next"></div>
          <ul style="display: none;" class="carousel-pagination">
              <li class="carousel-bullet"></li>
              <li class="carousel-bullet"></li>
              <li class="carousel-bullet"></li>
              <li class="carousel-bullet"></li>
              <li class="carousel-bullet"></li>
          </ul>
          <ul class="carousel-container">
              <li class="carousel-item">
                  <div class="item-1"></div>
              </li>
              <li class="carousel-item">
                  <div class="item-2"></div>
              </li>
              <li class="carousel-item">
                  <div class="item-3"></div>
              </li>
              <li class="carousel-item">
                  <div class="item-4"></div>
              </li>
              <li class="carousel-item">
                  <div class="item-5"></div>
              </li>
          </ul>
      </div>

      <div style="  padding:3%" class="container ats">
        <div class="row">
          <div style="border-right: solid 1px rgb(224, 219, 219);" class="col-md-3">
            <p class="slm">Selamat datang di</p>
            <h2 class="khn">Shiromizu Tour</h2>
            <p class="ctn">Kami hadir untuk menemani dan mengantarkan anda mewujudkan impian untuk menjelajahi keindahan dunia.</p>
          </div>
          <div style="border-right: solid 1px rgb(224, 219, 219);"  class="col-md-3">
           <center>
             <img style="margin-top: 5%;" src="./img/1.png" alt="">
             <div class="box">
               <p class="c2">Join Open Trip
                di Seluruh Indonesia</p>
                <a class="hidden-text1" href="#ot">LIHAT TRIP</a>
                <div class="col-md-12 hidden-lg">
                  <a class="lht" href="#ot">LIHAT TRIP</a>
                </div>
            </div>
            </center>   
          </div>
          <div style="border-right: solid 1px rgb(224, 219, 219);"  class="col-md-3">
          <center>
            <img style="margin-top: 5%;" src="./img/2.png" alt="">
            <div class="box">
              <p class="c2">Beragam Destinasi
                Domestic Tours</p>
              <a class="hidden-text1" href="#dm">LIHAT DESTINASI</a>
              <div class="col-md-12 hidden-lg">
                <a class="lht" href="#dm">LIHAT DESTINASI</a>
              </div>
          </div>
          </center>  
          </div>
          <div class="col-md-3">
            <center>
              <img style="margin-top: 5%;" src="./img/3.png" alt="">
             <div class="box">
               <p class="c2">Paket Wisata
                International Tours</p>
                <a class="hidden-text1" href="#it">LIHAT PAKET</a>
                <div class="col-md-12 hidden-lg">
                  <a class="lht" href="#it">LIHAT PAKET</a>
                </div>
            </div>
            </center>
          </div>
        </div>
          <div class="row">
            <div class="col-md-6 col-xs-6">
              <h2 class="we"><p><i>We Provide Your Travel Needs</i></p></h2>
            </div>
            <div class="col-md-6 col-xs-6">
              <button class="req"> <i class="fa fa-whatsapp"></i> Request Penawaran Paket</button>
            </div>
          </div>
      </div>

      <div id="dm" class="container">
        <h1 class="dms">DOMESTIC TOUR</h1>
        <p class="dlp">DESTINASI LOKAL POPULER</p">
          <div style="margin-bottom: 3%;" class="row">
            <a href="https://keihintour.com/project-cat/paket-wisata-semarang/">
            <div  class="col-lg-4 col-md-4 col-sm-12 col-xs-12  hover01">
              <figure>
                <div class="satu">
                  <img src="./img/k1.jpg" />
                  <div class="centered">
                    <h2 class="isi">SEMARANG</h2>
                    <p class="pkt">PAKET WISATA SEMARANG</p>
                  </div>
                </div>
              </figure>
            </div>
          </a>
          <a href="https://keihintour.com/project-cat/paket-wisata-solo/">
            <div  class="col-lg-4 col-md-4 col-sm-12 col-xs-12  hover01">
              <figure>
                <div class="satu">
                  <img src="./img/k2.jpg" />
                  <div class="centered">
                    <h2 class="isi">SOLO</h2>
                    <p class="pkt">PAKET WISATA SOLO</p>
                  </div>
                </div>
              </figure>
            </div>
          </a>
          <a href="https://keihintour.com/project-cat/paket-wisata-jogjakarta/">
            <div  class="col-lg-4 col-md-4 col-sm-12 col-xs-12  hover01">
              <figure>
                <div class="satu">
                  <img src="./img/k3.jpg" />
                  <div class="centered">
                    <h2 class="isi">JOGJA</h2>
                    <p class="pkt">PAKET WISATA JOGJA</p>
                  </div>
                </div>
              </figure>
            </div>
          </a>          

      </div>
      <div class="row">
        <a href="https://keihintour.com/project-cat/paket-wisata-dieng/">
          <div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hover02">
            <figure>
              <div class="dua">
                <img src="./img/k4.jpg" />
                <div class="centered">
                  <h2 class="isi">DIENG</h2>
                  <p class="pkt">PAKET WISATA DIENG</p>
                </div>
              </div>
            </figure>
          </div>
        </a>
        <a href="https://keihintour.com/project-cat/paket-wisata-malang/">
          <div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hover02">
            <figure>
              <div class="dua">
                <img src="./img/k5.jpg" />
                <div class="centered">
                  <h2 class="isi">MALANG</h2>
                  <p class="pkt">PAKET WISATA MALANG</p>
                </div>
              </div>
            </figure>
          </div>
        </a>

      </div>
      <center>
       <a href="https://keihintour.com/domestic"><button class="dom">LIHAT DESTINASI DOMESTIK LAINYA</button></a> 
      </center>
      </div>

      <div id="it" class="container">
        <h1 class="dms">INTERNATIONAL TOUR</h1>
        <p class="dlp">DESTINASI MANCANEGARA POPULER</p">
          <div style="margin-bottom: 3%;" class="row">
            <a href="https://keihintour.com/project-cat/malaysia/">
              <div  class="col-lg-4 col-md-4 col-sm-12 col-xs-12  hover01">
                <figure>
                  <div class="satu">
                    <img src="./img/i1.jpg" />
                    <div class="centered">
                      <h2 class="isi">MALAYSIA</h2>
                      <p class="pkt">EKSPLOR MALAYSIA</p>
                    </div>
                  </div>
                </figure>
              </div>
            </a>
            <a href="https://keihintour.com/project-cat/singapore">
              <div  class="col-lg-4 col-md-4 col-sm-12 col-xs-12  hover01">
                <figure>
                  <div class="satu">
                    <img src="./img/i2.jpg" />
                    <div class="centered">
                      <h2 class="isi">SINGAPORE</h2>
                      <p class="pkt">EKSPLOR SINGAPORE</p>
                    </div>
                  </div>
                </figure>
              </div>
            </a>
            <a href="https://keihintour.com/project-cat/thailand">
              <div  class="col-lg-4 col-md-4 col-sm-12 col-xs-12  hover01">
                <figure>
                  <div class="satu">
                    <img src="./img/i3.jpg" />
                    <div class="centered">
                      <h2 class="isi">THAILAND</h2>
                      <p class="pkt">EKSPLOR THAILAND</p>
                    </div>
                  </div>
                </figure>
              </div>
            </a>
      </div>
      <div class="row">
        <a href="https://keihintour.com/project-cat/jepang">
          <div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hover02">
            <figure>
              <div class="dua">
                <img src="./img/i4.jpg" />
                <div class="centered">
                  <h2 class="isi">JEPANG</h2>
                  <p class="pkt">EKSPLOR JEPANG</p>
                </div>
              </div>
            </figure>
          </div>
        </a>
        <a href="https://keihintour.com/project-cat/korea">
          <div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hover02">
            <figure>
              <div class="dua">
                <img src="./img/i5.jpg" />
                <div class="centered">
                  <h2 class="isi">KOREA</h2>
                  <p class="pkt">EKSPLOR KOREA</p>
                </div>
              </div>
            </figure>
          </div>
        </a>

      </div>
      <center>
      <a href="https://keihintour.com/international"><button class="dom">LIHAT DESTINASI DOMESTIK LAINYA</button></a>  
      </center>
      </div>

      <div id="ot" class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="join">JOIN OPEN TRIP</h2>
            <p class="lbrn">LIBURAN ASYIK, HEMAT & SIMPLE</p>
          </div>
          <div class="col-md-8">
            <h1 class="op">#OPENTRIP</h1>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="panel">
            <div class="panel-body">
              <div role="tabpanel">
              
                <!-- Nav tabs -->
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#semua" aria-controls="home" role="tab" data-toggle="tab">SEMUA TRIP</a></li>
                  <li role="presentation"><a href="#dom" aria-controls="profile" role="tab" data-toggle="tab">TRIP DOMESTIK</a></li>
                  <li role="presentation"><a href="#dekat" aria-controls="messages" role="tab" data-toggle="tab">TRIP TERDEKAT</a></li>
                </ul>
              
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="semua">
                    <div class="hover06 column">
                      <div class="row">
                        <a href="isiotrip.html">
                          <div class="col-md-4 von">
                            <figure>
                              <center>
                              <div class="tiga">
                              <img src="./img/t1.jpg" />
                              </div>
                             </center>
                             <p class="tp">Test Product</p>
                             <p class="rp">Rp.10.000 / pax</p>
                            </figure>
                            <span>
                              Pantai
                              <br>
                              Gunung
                              <br>
                              Bukit
                              <br>
                            </span>
                          </div>
                          </a>
                          <a href="">
                            <div class="col-md-4 von">
                              <figure>
                                <center>
                                <div class="tiga">
                                <img src="./img/t1.jpg" />
                                </div>
                               </center>
                               <p class="tp">Test Product</p>
                               <p class="rp">Rp.10.000 / pax</p>
                              </figure>
                              <span>
                                Pantai
                                <br>
                                Gunung
                                <br>
                                Bukit
                                <br>
                              </span>
                            </div>
                            </a>
                            <a href="">
                              <div class="col-md-4 von">
                                <figure>
                                  <center>
                                  <div class="tiga">
                                  <img src="./img/t1.jpg" />
                                  </div>
                                 </center>
                                 <p class="tp">Test Product</p>
                                 <p class="rp">Rp.10.000 / pax</p>
                                </figure>
                                <span>
                                  Pantai
                                  <br>
                                  Gunung
                                  <br>
                                  Bukit
                                  <br>
                                </span>
                              </div>
                              </a>
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="dom">
                    <div class="hover06 column">
                      <div class="row">
                        <a href="">
                          <div class="col-md-4 von">
                            <figure>
                              <center>
                              <div class="tiga">
                              <img src="./img/t2.jpg" />
                              </div>
                             </center>
                             <p class="tp">Test Product</p>
                             <p class="rp">Rp.10.000 / pax</p>
                            </figure>
                            <span>
                              Pantai
                              <br>
                              Gunung
                              <br>
                              Bukit
                              <br>
                            </span>
                          </div>
                          </a>
                          <a href="">
                            <div class="col-md-4 von">
                              <figure>
                                <center>
                                <div class="tiga">
                                <img src="./img/t2.jpg" />
                                </div>
                               </center>
                               <p class="tp">Test Product</p>
                               <p class="rp">Rp.10.000 / pax</p>
                              </figure>
                              <span>
                                Pantai
                                <br>
                                Gunung
                                <br>
                                Bukit
                                <br>
                              </span>
                            </div>
                            </a>
                            <a href="">
                              <div class="col-md-4 von">
                                <figure>
                                  <center>
                                  <div class="tiga">
                                  <img src="./img/t2.jpg" />
                                  </div>
                                 </center>
                                 <p class="tp">Test Product</p>
                                 <p class="rp">Rp.10.000 / pax</p>
                                </figure>
                                <span>
                                  Pantai
                                  <br>
                                  Gunung
                                  <br>
                                  Bukit
                                  <br>
                                </span>
                              </div>
                              </a>
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="dekat">
                    <div class="hover06 column">
                      <div class="row">
                        <a href="">
                          <div class="col-md-4 von">
                            <figure>
                              <center>
                              <div class="tiga">
                              <img src="./img/t1.jpg" />
                              </div>
                             </center>
                             <p class="tp">Test Product</p>
                             <p class="rp">Rp.10.000 / pax</p>
                            </figure>
                            <span>
                              Pantai
                              <br>
                              Gunung
                              <br>
                              Bukit
                              <br>
                            </span>
                          </div>
                          </a>
                          <a href="">
                            <div class="col-md-4 von">
                              <figure>
                                <center>
                                <div class="tiga">
                                <img src="./img/t2.jpg" />
                                </div>
                               </center>
                               <p class="tp">Test Product</p>
                               <p class="rp">Rp.10.000 / pax</p>
                              </figure>
                              <span>
                                Pantai
                                <br>
                                Gunung
                                <br>
                                Bukit
                                <br>
                              </span>
                            </div>
                            </a>
                            <a href="">
                              <div class="col-md-4 von">
                                <figure>
                                  <center>
                                  <div class="tiga">
                                  <img src="./img/t1.jpg" />
                                  </div>
                                 </center>
                                 <p class="tp">Test Product</p>
                                 <p class="rp">Rp.10.000 / pax</p>
                                </figure>
                                <span>
                                  Pantai
                                  <br>
                                  Gunung
                                  <br>
                                  Bukit
                                  <br>
                                </span>
                              </div>
                              </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>      
        </div> 
      </div>
      
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="lb">LIBURAN?</h1>
            <h1 class="ka">SHIROMIZU AJA…</h1>
            <p class="tn">Berpengalaman di lebih dari 50+ tempat wisata, 258+ klien korporat, dan 6000+ turis dalam dan luar negeri. Inilah alasan mengapa mereka memilih Keihin Tour sebagai partner perjalanan:</p>
            <br>
            <div class="row">
              <div class="col-md-6">
                <img src="./img/i1.png" alt="">
                <h4 class="jb">FAST RESPONSE</h5>
                <p class="tn">Didukung oleh tim yang cepat tanggap dalam berkomunikasi baik before & after event.</p>
              </div>
              <div class="col-md-6">
                <img src="./img/i2.png" alt="">
                <h4 class="jb">HARGA KOMPETITIF </h5>
                <p class="tn">Harga paket wisata yang ditawarkan kompetitif dan terjangkau dibanding tour & travel lainnya.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <img src="./img/i3.png" alt="">
                <h4 class="jb">PROFESSIONAL TEAM</h5>
                <p class="tn">Tim profesional siap merencanakan paket wisata anda dengan matang & optimal.</p>
              </div>
              <div class="col-md-6">
                <img src="./img/i4.png" alt="">
                <h4 class="jb">TERPERCAYA & BERPENGALAMAN</h5>
                <p class="tn">Berpengalaman menangani klien korporat nasional. Memiliki legalitas lengkap sebagai Perusahaan Tour Travel</p>
              </div>
              <button class="download"> <i class="fa fa-download"></i> Download Company Profile</button>

            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
            <div class="col-md-12">
              <img class="atas" src="./img/b1.jpg" alt="">
            </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <img class="kanan" src="./img/b2.jpg" alt="">
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <img class="kiri" src="./img/b3.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="dtl">
        <div class="row">
          <div class="col-md-6">
            <img class="pb" src="./img/b5.jpg" alt="">
          </div>
          <div class="col-md-6">
            <h2 class="kt"> <b>SHIROMIZU</b> SIAP MELAYANI ANDA</h2>
            <p class="klik">Klik beragam pilihan paket tur domestik, internasional, dan open trip yang tersedia di website ini atau langsung hubungi kami dengan klik pada kontak yang tertera di bawah ini:</p>
            <div class="row">
              <div class="col-md-6">
                <h4 class="bw">PT MF INDONESIA</h4>
                <p class="ktoa">Shiromizu Office :</p>
                <p class="ktob">Jl. H Baping, Rt. 003, Rw. 009, No.68, Kelurahan Ciracas, Kec. Ciracas, JakartaTimur
                </p><p class="ktob"> Lihat Maps</p>
              </div>
              <div class="col-md-6">
                <br><br>
                <p class="ktoa">Shiromizu Office :</p>
                <p class="ktob">Saiwai Ward, Kawasaki City, Kawasaki-shi, Kanagawa, Japan
                </p><p class="ktob">  Lihat Maps</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <button class="wab"> <i class="fa fa-whatsapp"></i> &ensp; Chat aja dulu </button class="wab">
              </div>
              <div class="col-md-6">
                <button class="tel"> <i class="fa fa-phone"></i> &ensp; Telp. 082122518785 </button class="wab">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="container">
        <p class="dah">Kami hadir untuk menemani dan mengantarkan anda mewujudkan impian untuk menjelajahi keindahan dunia. Sebagai perusahaan penyelenggaran perjalanan wisata, MICE, Outbound Training dan Event Management, kami  menyelenggarakan perjalanan wisata ke destinasi yang menarik dan sangat diminati di Indonesia maupun Mancanagara. Disetiap perjalanan wisata, kami mencoba untuk memberikan pelayanan terbaik serta pengalaman liburan seru yang tak terlupakan.</p>
        <hr>
        <br>
      </div> -->

      <!-- Foot -->

      <?php include 'foot.php';?>

      <!-- script -->
    
    <script>
        includeHTML();
    </script>
    <script>
    $('#myTab').tabCollapse();
    </script>
      <script src="js/nav.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="/js/carousel.js"></script>
</body>
</html>