@extends('layouts/header')

<section class="our-courses" id="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h4>TOP 1000+ COMMON ENGLISH<em> VOCABULARY BY THEME</em></h4>
                </div>
            </div>


            <div class="tabs">
                <div class="row">
                    <div class="col-lg-3 kind_main">
                        <ul class="list-group list-group-light" style="cursor: pointer;">
                            <li class="list-group-item act"><span href=""><b>List kind</b></span></li>
                            @foreach ($vocabularies as $vocabulary)
                                <li class="list-group-item "><a
                                        href="{{ route('vocabulary', $vocabulary->id) }}">{{ $vocabulary->word }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="col-lg-7">
                        <ul class="nacc">
                            <li class="active">
                                <div>
                                    <div class="left-image">
                                        <img src="{{ asset('images/courses-01.jpg') }}" alt="">
                                        <div class="price">
                                            <h6>$128</h6>
                                        </div>
                                    </div>
                                    <div class="right-content">
                                        <h4>Vocabulary list</h4>
                                        <p>Did you know that you can visit <a rel="nofollow"
                                                href="https://www.toocss.com/" target="_blank">TooCSS website</a> for
                                            latest listing of HTML templates and a variety of useful templates.
                                            <br><br>You just need to go and visit that website right now. IF you have
                                            any suggestion or comment about this template, you can feel free to go to
                                            contact page for our email address.
                                        </p>
                                        <span>36 Hours</span>
                                        <span>4 Weeks</span>
                                        <span class="last-span">3 Certificates</span>
                                        <div class="text-button">
                                            <a href="contact-us.html">Subscribe Course</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
{{-- <body>
    @foreach ($vocabularies as $vocabulary)
        <a href="{{ route('vocabulary', $vocabulary->id) }}">
            <h3>{{ $vocabulary->word }}</h3>
        </a>
    @endforeach

</body> --}}

</html>
