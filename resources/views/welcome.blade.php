<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Sou William Koller, utilizo essas tecnologias => AWS | Docker | Heroku | PHP | Laravel | Linux | Software Developer. Welcome to my portfolio;">

        <title>William Koller {}; </title>

        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- Animate CSS CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" type="text/css"/>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 50%;
                margin: 0;
            }

            .full-height {
                height: 80vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body>
    
    <main class="flex-shrink-0 container mt-5">
        <nav class="navbar navbar-expand-lg navbar-light">

            <a class="navbar-brand" href=""><h5><b >William Koller { } ; </b></h5></a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">

                    <a class="nav-item nav-link " href="{{ route('clients.index') }}">Listen Clients</a>


                    <a class="nav-item nav-link " href=" https://github.com/williamkoller ">Repositories on Github</a>


                </div>
            </div>

        </nav>

    </main>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Project Developed with Laravel 5.8
                </div>

            </div>

        </div>
        <footer class="mt-auto py-3 text-center">

            <small class="text-muted mb-2">
                <i class="fas fa-code"></i> with <i class="fas fa-star"></i>
                by <strong>William Koller</strong>
            </small>

            <div class="container-fluid justify-content-center">


                <a class="social mx-1"  href="https://www.facebook.com/developwilliamkoller"
                   style="color: #6c757d"
                   onMouseOver="this.style.color='#3b5998'"
                   onMouseOut="this.style.color='#6c757d'">
                    <i class="fab fa-facebook fa-1x"></i>
                </a>







                <a class="social mx-1"  href="https://www.github.com/williamkoller"
                   style="color: #6c757d"
                   onMouseOver="this.style.color='#333333'"
                   onMouseOut="this.style.color='#6c757d'">
                    <i class="fab fa-github fa-1x"></i>
                </a>







                <a class="social mx-1"  href="https://www.instagram.com/williamkoller"
                   style="color: #6c757d"
                   onMouseOver="this.style.color='#405de6'"
                   onMouseOut="this.style.color='#6c757d'">
                    <i class="fab fa-instagram fa-1x"></i>
                </a>







                <a class="social mx-1"  href="https://www.linkedin.com/in/william-koller-dev"
                   style="color: #6c757d"
                   onMouseOver="this.style.color='#007bb5'"
                   onMouseOut="this.style.color='#6c757d'">
                    <i class="fab fa-linkedin-in fa-1x"></i>
                </a>








                <a class="social mx-1"  href="https://www.twitter.com/williamkoller"
                   style="color: #6c757d"
                   onMouseOver="this.style.color='#1da1f2'"
                   onMouseOut="this.style.color='#6c757d'">
                    <i class="fab fa-twitter fa-1x"></i>
                </a>



            </div>

        </footer>
        <!-- GitHub Buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!-- jQuery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper.js CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

        <!-- Bootstrap JS CDN -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!-- wow.js CDN & Activation -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        <script> new WOW().init(); </script>

        <!-- Card Animation jQuery -->
        <script src="/anabneri.github.io/assets/js/card-animation.js"></script>

        <!-- Initialize all tooltips -->
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    </body>
</html>
