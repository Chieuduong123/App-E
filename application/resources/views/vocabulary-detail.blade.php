@extends('layouts/header')

<body>
    <section class="our-courses" id="courses">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">

                    <div class="form form_search">
                        <i class=""></i>
                        <input type="text" class="form-control form-input" placeholder="Search anything...">
                        <span class="left-pan"><i class=""></i></span>
                    </div>


                    <div class="section-heading">

                        <h4>WELCOME TO KOLA VOCABULARY OF CONTEMPORARY <em>ENGLISH ONLINE </em></h4>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-4 ">
                    <div class="container ">
                        <img src="{{ asset('images\courses-04.jpg') }}" alt="" style="border-radius: 5px">
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <div class="container voca_detail">
                        @foreach ($vocabularies as $vocabulary)
                            <h5>{{ $vocabulary->word }}</h5>
                            <div>
                                <p>From KOLA Dictionary of Contemporary English</p>
                            </div>
                            <div class="container" style="margin-left: -20px;">
                                <div class="row">
                                    <div class="col" style="color: red;">
                                        {{ $vocabulary->type_word }}
                                    </div>
                                    <div class="col" style="font-weight: bold;">
                                        {{ $vocabulary->phonetic }}
                                    </div>
                                    <div class="col">
                                        <audio controls>
                                            <source src="{{ $vocabulary->audio }}" type="audio/ogg">
                                        </audio>
                                    </div>
                                </div>
                            </div>
                            <h6 style="margin-top: 10px;">{{ $vocabulary->definition }}</h6>
                        @endforeach
                    </div>


                </div>
            </div>

        </div>
        </div>
        </div>
        </div>
    </section>
    {{-- @foreach ($vocabularies as $vocabulary)
        <h3>{{ $vocabulary->word }}</h3>
        <h3>{{ $vocabulary->type_word }}</h3>
        <audio controls>
            <source src="{{ $vocabulary->audio }}" type="audio/ogg">
        </audio>
        <h3>{{ $vocabulary->phonetic }}</h3>
        <h3>{{ $vocabulary->definition }}</h3>
    @endforeach --}}

</body>

</html>
