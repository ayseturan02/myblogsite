
    <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>blog sitesi | admin girişi</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset("back/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset("back/css/sb-admin-2.min.css")}}" rel="stylesheet">


</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <br><br><br> <br><br>
                                @if($errors ->any())
                                    <div class="alert alert-danger">
                                        {{$errors->first()}}
                                    </div>
                                @endif
                                <!DOCTYPE html>
                                <html lang="en">
                                <head>
                                    <meta charset="UTF-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <style>
                                        .login-box {
                                            position: absolute;
                                            top: 50%;
                                            left: 50%;
                                            width: 400px;
                                            padding: 40px;
                                            transform: translate(-50%, -50%);
                                            background: rgba(24, 20, 20, 0.987);
                                            box-sizing: border-box;
                                            box-shadow: 0 15px 25px rgba(0,0,0,.6);
                                            border-radius: 10px;
                                        }

                                        .login-box .user-box {
                                            position: relative;
                                        }

                                        .login-box .user-box input {
                                            width: 100%;
                                            padding: 10px 0;
                                            font-size: 16px;
                                            color: #fff;
                                            margin-bottom: 30px;
                                            border: none;
                                            border-bottom: 1px solid #fff;
                                            outline: none;
                                            background: transparent;
                                        }

                                        .login-box .user-box label {
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            padding: 10px 0;
                                            font-size: 16px;
                                            color: #fff;
                                            pointer-events: none;
                                            transition: .5s;
                                        }

                                        .login-box .user-box input:focus ~ label,
                                        .login-box .user-box input:valid ~ label {
                                            top: -20px;
                                            left: 0;
                                            color: #bdb8b8;
                                            font-size: 12px;
                                        }

                                        .login-box form a {
                                            position: relative;
                                            display: inline-block;
                                            padding: 10px 20px;
                                            color: #ffffff;
                                            font-size: 16px;
                                            text-decoration: none;
                                            text-transform: uppercase;
                                            overflow: hidden;
                                            transition: .5s;
                                            margin-top: 40px;
                                            letter-spacing: 4px
                                        }

                                        .login-box a:hover {
                                            background: #03f40f;
                                            color: #fff;
                                            border-radius: 5px;
                                            box-shadow: 0 0 5px #03f40f,
                                            0 0 25px #03f40f,
                                            0 0 50px #03f40f,
                                            0 0 100px #03f40f;
                                        }

                                        .login-box a span {
                                            position: absolute;
                                            display: block;
                                        }

                                        @keyframes btn-anim1 {
                                            0% {
                                                left: -100%;
                                            }

                                            50%,100% {
                                                left: 100%;
                                            }
                                        }

                                        .login-box a span:nth-child(1) {
                                            bottom: 2px;
                                            left: -100%;
                                            width: 100%;
                                            height: 2px;
                                            background: linear-gradient(90deg, transparent, #03f40f);
                                            animation: btn-anim1 2s linear infinite;
                                        }
                                    </style>
                                </head>
                                <body>
                                <div class="login-box">

                                    <form method="post" action="{{route("admin.login.post")}}" class="user">
                                        @csrf
                                        <div class="user-box">
                                            <input type="text" name="email" required="">
                                            <label>Username</label>
                                        </div>
                                        <div class="user-box">
                                            <input type="password" name="password" required="">
                                            <label>Password</label>
                                        </div><center>
                                            <a href="#">
                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    gönder
                                                </button>
                                                <span></span>
                                            </a></center>
                                    </form>



                                </div>
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
                                        gönder
                                    </button>
                                    <hr>

                                </form>
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset("back/vendor/jquery/jquery.min.js")}}"></script>
<script src="{{asset("back/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset("back/vendor/jquery-easing/jquery.easing.min.js")}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset("back/js/sb-admin-2.min.js")}}"></script>

</body>

</html>
