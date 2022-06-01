<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Kola Learning</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-eduwell-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">

</head>

<body>

    @include('header')
    <section class="our-team">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
            <h4>Learn English with<em> Videos</em></h4>
          </div>
        </div>
        @foreach($videos as $video)
        <div class="col-lg-10 offset-lg-1">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                  </div>
                </div>
                <div class="col-lg-15">
                  <ul class="nacc">
                    <li class="active">
                        <div class="">
                        <iframe width="800" height="345" src="{{$video->links}}"></iframe>
                          <br><h5>{{$video->title}}</h5>
                    </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </section>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/isotope.min.js')}}"></script>
    <script src="{{asset('js/owl-carousel.js')}}"></script>
    <script src="{{asset('js/lightbox.js')}}"></script>
    <script src="{{asset('js/tabs.js')}}"></script>
    <script src="{{asset('js/video.js')}}"></script>
    <script src="{{asset('js/slick-slider.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>