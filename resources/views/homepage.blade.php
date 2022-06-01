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
    <section class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="header-text">
                        <h6>Welcome to Kola Learning</h6>
                        <h2>Best Place To Learn English <em>Vocabulary!</em></h2>
                        <div class="main-button-gradient">
                            <div class="scroll-to-section"><a href="#contact-section">GO TO APP!</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-image">
                        <img src="{{asset('images/banner-right-image.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h6>OUR COURSES</h6>
                        <h4>What You Can <em>Learn</em></h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="tabs">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="menu">
                                        <div class="active gradient-border"><span>Vocabulary</span></div>
                                        <div class="gradient-border"><span>Question</span></div>
                                        <div class="gradient-border"><span>Answer</span></div>
                                        <div class="gradient-border"><span>Search</span></div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="left-image">
                                                    <img src="{{asset('images/courses-03.jpg')}}" alt="">
                                                    <div class="price">
                                                        <h6>Free</h6>
                                                    </div>
                                                </div>
                                                <div class="right-content">
                                                    <h4>Kola Learning</h4>
                                                    <p>The application is designed for users to familiarize themselves with English from easy to difficult levels. It teaches you vocabulary related to common everyday topics like study, science, school,...</p>
                                                    <p>Beautiful, user-friendly interface.
                                                        Many familiar topics, revolving around daily life.</p>
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

    <section class="contact-us" id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3835.7434050736374!2d108.25001009995033!3d15.974770846206857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1654008679137!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="420px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
                        <div class="row">
                            <div class="col-lg-4 offset-lg-1">
                                <div class="contact-info">
                                    <div class="icon">
                                        <i class=""></i>
                                    </div>
                                    <h4>Phone</h4>
                                    <span>0766548161</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact-info">
                                    <div class="icon">
                                        <i class=""></i>
                                    </div>
                                    <h4>Mobile</h4>
                                    <span>0917697809</span>
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
                                    <p>IF you need a working contact, please visit KoLa's contact page for more info.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-gradient-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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