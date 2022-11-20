@extends('layouts/header')

<body>
    <!-- ***** Main Banner Area End ***** -->
    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h4>CHOOSE THE LEVEL THAT'S RIGHT <em> FOR YOU</em></h4>
                    </div>
                </div>



            </div>

            <div class="row level_main">
                <div class="col-lg-4 " style="margin-left: 100px;">
                    <img src="{{ asset('images/about-left-image.png') }}" alt="">
                </div>
                <div class="col-lg-4  " style="margin-left: 100px; margin-top: 40px;">
                    <ul class="list-group list-group-light" style="cursor: pointer;">
                        <li class="list-group-item act"><span> VOCABULARY </span></li>
                        @foreach ($kinds as $kind)
                            <li class="list-group-item "><a
                                    href="{{ route('kind', $kind->id) }}">{{ $kind->kind_name }}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>


    </section>

</body>
{{-- <body>
    @foreach ($kinds as $kind)
        <a href="{{ route('kind', $kind->id) }}">
            <h2>{{ $kind->kind_name }}</h2>
        </a>
    @endforeach

</body> --}}

</html>
