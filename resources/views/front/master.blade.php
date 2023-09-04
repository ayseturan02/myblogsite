<!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AYSETURAN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon"  >

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset("front/css/animate.css")}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset("front/css/icomoon.css")}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset("front/css/bootstrap.css")}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset("front/css/flexslider.css")}}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{asset("front/fonts/flaticon/font/flaticon.css")}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset("front/css/owl.carousel.min.css")}}">

    <link rel="stylesheet" href="{{asset("front/css/owl.theme.default.min.css")}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset("front/css/style.css")}}">

    <!-- Modernizr JS -->
    <script src="{{asset("front/js/modernizr-2.6.2.min.js")}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset("front/js/respond.min.js")}}"></script>
    <![endif]-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><b><a href="{{route("anasayfa")}}" class="nav-link" aria-current="page"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B E N </font></font></a></b></li>
            <li class="nav-item"><b><a href="{{route("hakkında")}}" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">H A K K I N D A   </font></font></a></b></li>
            <li class="nav-item"><b><a href="{{route("yetenekler")}}" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y E T E N E K L E R   </font></font></a></b></li>
            <li class="nav-item"><b><a href="{{route("egıtım")}}" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E Ğ İ T İ M   </font></font></a></b></li>
            <li class="nav-item"><b><a href="{{route("sosyalmedya")}}" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S O S Y A L M E D Y A   </font></font></a></b></li>
            <li class="nav-item"><b><a href="{{route("galeri")}}" class="nav-link" aria-current="page"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">G A L E R İ   </font></font></a></b></li>
            <li class="nav-item"><b><a href="{{route("makaleler")}}" class="nav-link" aria-current="page"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Y A Z I L A R  </font></font></a></b></li>
            <li class="nav-item"><b><a href="{{route("iletisim")}}" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">İ L E T İ Ş İ M   </font></font></a></b></li>
        </ul>
    </header>
</div>
<b><hr></b>
<div id="colorlib-page">
    <div class="container-wrap">
        <a href="{{asset("front")}}" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
            <div class="text-center">

            <div class="author-img" style="background-image: url({{asset("front/images/2.jpg")}});"></div>
                <h1 id="colorlib-logo"><a href="{{route("anasayfa")}}">A Y Ş E  T U R A N</a></h1>
                <span class="position"><a >FIRAT UNİVERSİTESİ </a> | FU </span>
            </div>

            <nav id="colorlib-main-menu" role="navigation" class="navbar">
                <div id="navbar" class="collapse">
                    <ul>
                        <li class="active"><a href="#" data-nav-section="home">ben</a></li>
                        <li><a href="#" data-nav-section="about">hakkında</a></li>
                        <li><a href="#" data-nav-section="skills">yetenekler</a></li>
                        <li><a href="#" data-nav-section="education">eğitim</a></li>
                        <li><a href="#" data-nav-section="experience">sosyalmedya</a></li>
                        <li><a href="#" data-nav-section="blog">galeri</a></li>
                        <li><a href="#" data-nav-section="makale">yazılar</a></li>
                        <li><a href="#" data-nav-section="contact">iletişim</a></li>
                    </ul>
                </div>
            </nav>
            <hr>
            <div class="colorlib-footer">

                <ul>
                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-twitter2"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                </ul>
            </div>

        </aside>
        @yield("content")

        <div id="colorlib-main">


        </div><!-- end:colorlib-main -->
    </div><!-- end:container-wrap -->

</div><!-- end:colorlib-page -->



<!-- jQuery -->

<script src="{{asset("front/js/jquery.min.js")}}"></script>

<!-- jQuery Easing -->
<script src="{{asset("front/js/jquery.easing.1.3.js")}}"></script>
<!-- Bootstrap -->
<script src="{{asset("front/js/bootstrap.min.js")}}"></script>
<!-- Waypoints -->
<script src="{{asset("front/js/jquery.waypoints.min.js")}}"></script>
<!-- Flexslider -->
<script src="{{asset("front/js/jquery.flexslider-min.js")}}"></script>
<!-- Owl carousel -->
<script src="{{asset("front/jquery.min.js")}}"></script>

<!-- Counters -->
<script src="{{asset("front/js/jquery.countTo.js")}}"></script>


<!-- MAIN JS -->
<script src="{{asset("front/js/main.js")}}"></script>

</body>
</html>


<form method="post" action="{{route("admin.login.post")}}" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                               id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>

                                </form>
                                <hr>
