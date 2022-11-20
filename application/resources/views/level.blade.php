<html>
@extends('layouts.header')

<body>
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
                <div class="col">
                    <div class="main-button-gradient">
                        <div class="scroll-to-section level_child"><a href="level/1"> Level 1: Basic</a></div>
                    </div>
                </div>
                <div class="col">
                    <div class="main-button-gradient">
                        <div class="scroll-to-section level_child"><a href="level/2">Level 2: middle</a></div>
                    </div>
                </div>
                <div class="col">
                    <div class="main-button-gradient">
                        <div class="scroll-to-section level_child"><a href="level/3">Level 3: Advanced</a></div>
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
</body>


{{-- <body>
  
       <a href="level/1"> <h1>{{ $levels->level = 1 }}</h1> </a>
       <a href="level/2"> <h1>{{ $levels->level = 2 }}</h1> </a>
       <a href="level/3"> <h1>{{ $levels->level = 3 }}</h1> </a>
    
</body> --}}

</html>
