@extends('layouts/header')
<section class="main-banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="header-text">
                    <h6>Welcome to our school</h6>
                    <h2>Best Place To Learn Vocabulary <em>English!</em></h2>
                    <div class="main-button-gradient">
                        <div class="scroll-to-section"><a href="#contact-section">Join Us Now!</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-image">
                    <img src="{{ asset('images/banner-right-image.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Main Banner Area End ***** -->
<section class="our-courses" id="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h6>OUR COURSES</h6>
                    <h4>What You Can <em>Learn</em></h4>
                    <p>You just think about TemplateMo whenever you need free CSS templates for your business
                        website</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="naccs">
                    <div class="tabs">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="menu">
                                    <div class="active gradient-border"><span> <a
                                                href="{{ route('/level') }}">Vocabulary
                                                list</a></span></div>
                                    <div class="gradient-border"><span> <a href="">Directionary</a> </span>
                                    </div>
                                    <div class="gradient-border"><span><a href="{{ route('list.quiz') }}">Test
                                                Quizizz</a></span></div>
                                    <div class="gradient-border"><span><a href="{{ route('showQuestion') }}">Q and
                                                A</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
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
                                                <p>Did you know that you can visit <a rel="nofollow" href=""
                                                        target="_blank">TooCSS
                                                        website</a> for latest listing of HTML templates and a
                                                    variety of useful templates.
                                                    <br><br>You just need to go and visit that website right now. IF
                                                    you have any suggestion or comment about this template, you can
                                                    feel free to go to contact page for our email address.
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
                                    <li>
                                        <div>
                                            <div class="left-image">
                                                <img src="{{ asset('images/courses-02.jpg') }}" alt="">
                                                <div class="price">
                                                    <h6>$156</h6>
                                                </div>
                                            </div>
                                            <div class="right-content">
                                                <h4>Directionary</h4>
                                                <p>You are not allowed to redistribute this template ZIP file on any
                                                    other website without a permission from us.<br><br>There are
                                                    some unethical people on this world copied and reposted our
                                                    templates without any permission from us. Their Karma will hit
                                                    them really hard. Yeah!</p>
                                                <span>48 Hours</span>
                                                <span>6 Weeks</span>
                                                <span class="last-span">1 Certificate</span>
                                                <div class="text-button">
                                                    <a href="contact-us.html">Subscribe Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="left-image">
                                                <img src="{{ asset('images/courses-03.jpg') }}" alt="">
                                                <div class="price">
                                                    <h6>$184</h6>
                                                </div>
                                            </div>
                                            <div class="right-content">
                                                <h4>Test Quizizz</h4>
                                                <p>Quinoa roof party squid prism sustainable letterpress cray
                                                    hammock tumeric man bun mixtape tofu subway tile cronut. Deep v
                                                    ennui subway tile organic seitan.<br><br>Kogi VHS freegan
                                                    bicycle rights try-hard green juice probably haven't heard of
                                                    them cliche la croix af chillwave.</p>
                                                <span>28 Hours</span>
                                                <span>4 Weeks</span>
                                                <span class="last-span">1 Certificate</span>
                                                <div class="text-button">
                                                    <a href="contact-us.html">Subscribe Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="left-image">
                                                <img src="{{ asset('images/courses-04.jpg') }}" alt="">
                                                <div class="price">
                                                    <h6>$76</h6>
                                                </div>
                                            </div>
                                            <div class="right-content">
                                                <h4>Question and Answer</h4>
                                                <p>Quinoa roof party squid prism sustainable letterpress cray
                                                    hammock tumeric man bun mixtape tofu subway tile cronut. Deep v
                                                    ennui subway tile organic seitan.<br><br>Kogi VHS freegan
                                                    bicycle rights try-hard green juice probably haven't heard of
                                                    them cliche la croix af chillwave.</p>
                                                <span>48 Hours</span>
                                                <span>4 Weeks</span>
                                                <span class="last-span">2 Certificates</span>
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

<section class="services" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h6>Our Services</h6>
                    <h4>Provided <em>Services</em></h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('images/service-icon-01.png') }}" alt="">
                            </div>
                            <h4>Useful Tricks</h4>
                            <p>EduWell is the professional HTML5 template for your school or university websites.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('images/service-icon-02.png') }}" alt="">
                            </div>
                            <h4>Creative Ideas</h4>
                            <p>You can download and use this EduWell Template for your teaching and learning stuffs.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('images/service-icon-03.png') }}" alt="">
                            </div>
                            <h4>Ready Target</h4>
                            <p>Please tell your friends about the best CSS template website that is TemplateMo.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('images/service-icon-04.png') }}" alt="">
                            </div>
                            <h4>Technology</h4>
                            <p>Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="contact-us" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div id="map">

                    <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3835.7434050736374!2d108.25001009995033!3d15.974770846206857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1654008679137!5m2!1svi!2s"
                        width="100%" height="420px" frameborder="0"
                        style="border:0; border-radius: 15px; position: relative; z-index: 2;"
                        allowfullscreen=""></iframe>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-1">
                            <div class="contact-info">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <h4>Phone</h4>
                                <span>010-020-0340</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-info">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <h4>Mobile</h4>
                                <span>090-080-0760</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <h6>Contact us</h6>
                                <h4>Say <em>Hello</em></h4>
                                <p>IF you need a working contact form by PHP script, please visit TemplateMo's
                                    contact page for more info.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="name" name="name" id="name" placeholder="Full Name"
                                    autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="Your Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-gradient-button">Send
                                    Message</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" type="text/css" href="">
<script>
    var botmanWidget = {
        aboutText: 'Write Something',
        introMessage: "✋ Hi! What can Kola Learning do for you?"
    };
</script>

<script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos
                },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function() {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').
                siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
        e.preventDefault();
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
        checkSection();
    });
</script>

{{-- <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> --}}
<script src="{{ asset('js/botman.js') }}"></script>


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
