@extends('layouts.layout1')

@php
    $title = 'Contact Us';
    $subtitle = 'Contact';
@endphp


@section('content')

 <!-- tmp contact area -->
 <div class="contact-area tmp-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <span class="title">Contact Us</span>
                            <p class="description">
                            we are dedicated to delivering top-quality request management system with innovation and excellence
                            </p>
                        </div>

                        <ul class="ft-link ft-link-style-three">
                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-light fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <span>Call Us</span>
                                        <a class="contact-here" href="tel:+4733378901">+855 69743024</a>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-solid fa-envelope-open-text"></i>
                                    </div>

                                    <div class="content">
                                        <span>E-mail</span>
                                        <a class="contact-here" href="mailto:webmaster@example.com">Rajehsim@gmail.com</a>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-regular fa-map-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <span>Address</span>
                                        <a class="contact-here" href="#">Cambodia Phnom Penh West Mission Office, 2b Samdach Sangkreach Tieng St222, Phnom Penh</a>
                                    </div>
                                </div>
                            </li>

                        </ul>

                        <div class="tmp-tag-list tag-list-one">
                            <a class="tag-list" href="#">Facebook</a>
                            <a class="tag-list" href="#">Twitter</a>
                            <a class="tag-list" href="#">Linkedin</a>
                            <a class="tag-list" href="#">Skype</a>
                            <a class="tag-list" href="#">Pinterest</a>
                        </div>



                    </div>

                </div>
                <div class="col-lg-7">

                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <span class="title">GET IN TOUCH</span>
                            <p class="description">
                            Are you looking for a template for a contact message, an email, or something else?
                            </p>
                        </div>
                        <div class="contact-form style-two">
                            <div id="form-messages"></div>
                            <form id="contact-form" action="mailer.php" method="post">
                                <div class="contact-form-wrapper row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="name" placeholder="Name" id="contact-name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="contact-phone" placeholder="Phone" type="text">
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="email" placeholder="Email" type="email" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" type="text" id="subject" placeholder="Subject" name="subject">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="input-field" placeholder="How can we help" name="message" id="contact-message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-submit-group">
                                            <button name="submit" class="tmp-btn btn-gradiant-two" type="submit" id="submit">
                                                Submit Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- tmp contact area -->

    <div class="tmp-map-area tmp-sectiongapBottom">
        <div class="map-area-flotimg-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15631.388446081816!2d104.88278738005428!3d11.578006353847415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517aa5b0a29f%3A0x4d8984b01f42e81c!2sToul%20Kork%2C%20Phnom%20Penh%2C%20Cambodia!5e0!3m2!1sen!2sbd!4v1714324837639!5m2!1sen!2sbd" 
        width="600" 
        height="650" 
        tyle="border:0;" 
        llowfullscreen="" 
    l   oading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        </div>
    </div>
    
@endsection