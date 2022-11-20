<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <title>KoLa Learning</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-eduwell-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
</head>

<body>


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="home" class="logo">
                            <img src="{{ asset('images/logo1.png') }}" alt="EduWell Template" class="img-logo">
                        </a>
                        <a href="/" class="logo">
                            <em>KOLA LEARNING</em>
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{ route('inbox.index') }}">chat with us</a></li>
                            <li class="scroll-to-section"><a href="{{ route('showVideo') }}">Courses</a></li>

                            <li class="scroll-to-section"><a href="{{ route('login') }}">Login</a></li>
                            <li class="scroll-to-section"><a href="register">Register </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
    <script src="{{ asset('js/video.js') }}"></script>
    <script src="{{ asset('js/slick-slider.js') }}"></script>

    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
