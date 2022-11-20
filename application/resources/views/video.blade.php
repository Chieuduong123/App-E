@extends('layouts/header')
</head>

<body>

    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h4>Learn English with<em> Videos</em></h4>
                    </div>
                </div>
                @foreach ($videos as $video)
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
                                                    <iframe width="800" height="345"
                                                        src="{{ $video->links }}"></iframe>
                                                    <br>
                                                    <h5>{{ $video->title }}</h5>
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
</body>

</html>
