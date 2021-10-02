<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/nav.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    
        <div class="topbar-logo">
            <div class="container">
                <div style="background-color: white;" class="row">
                    <div class="col-md-4 col-xs-6">
                        <a class="navbar-brand" href="/">
                           <img class="images" src="./img/Logo.png" width="20%" alt="">
                        </a>
                    </div>
    
                    <div class="col-md-4 col-xs-6">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#search">
                            <i class="fa fa-search"></i>
                        </button>
                        <form class="navbar-form hidden-xs" role="search" action="/" method="GET">
                          <div class="input-group">
                          <input type="text" style="margin-top:5%;border: none;box-shadow: none;" class="form-control src" placeholder="Search"/>
                          <span class="input-group-btn">
                            <button class="btn btn-primary" style="margin-top:5%;background-color: white;border: none;" type="button"><i style="color: grey;" class="fa fa-search"></i></button>
                          </span>
                            </div>
                          </form>
                    </div>

                    <div class="col-md-4 hidden-xs">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="login.html">
                                <button class="lgn">LOGIN/REGISTER</button>
                            </a>
                            </div>
                            <div class="col-md-6">
                                <a href="hub.html">
                                <button class="wa"><i class="fa fa-whatsapp"></i> &ensp; HUBUNGI KAMI</button>
                                </a>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    
        <div class="collapse navbar-collapse hidden-lg" id="search">
            <form class="mobile_search hidden-sm hidden-md hidden-lg" role="search" action="/" method="GET">
                <div class="input-group">
                <input style="border: none;box-shadow: none;" type="text" class="form-control" placeholder="Search"/>
                <span class="input-group-btn">
                  <button style="color: grey;background-color: white;border: none;" class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                </span>
                </div>
            </form>
      </div>
        <div class="container">
            <div class="navbar-header">
                <button style="float: left;width: 100%;" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <div class="toggle-products"><i class="fa fa-th-large" aria-hidden="true"></i> MENU</div>
                </button>
            </div>
    
            <div class="row">
                <div class="col-xs-12">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!-- <ul class="nav navbar-nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Open Trip</a></li>
                            <li><a href="#">Tour Packages</a></li>
                            <li><a href="#">Other Service</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul> -->
                        <div class="container nav">
                        <div style="margin-bottom: 1%;margin-top: 1%;" class="row">
                            <div class="col-md-2">
                                <a href="index.html">HOME</a>
                            </div>
                            <div class="col-md-2">
                                <a href="https://keihintour.com/opentrip">OPEN TRIP</a>
                            </div>
                            <div class="col-md-2">
                                <a href="https://keihintour.com/tours">TOUR PACKAGES</a>
                            </div>
                            <div class="col-md-2">
                                <a href="https://velotiket.com/keihintix">OTHER SERVICE</a>
                            </div>
                            <div class="col-md-2">
                                <a href="https://keihintour.com/gallery">GALLERY</a>
                            </div>
                            <div class="col-md-2">
                                <a href="https://keihintour.com/tentang">ABOUT US</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 hidden-lg hidden-md">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="login.html">
                                    <button class="lgn">LOGIN/REGISTER</button>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="hub.html">
                                    <button class="wa"><i class="fa fa-whatsapp"></i> &ensp; HUBUNGI KAMI</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
  
    
    </nav>

    <script src="js/nav.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>