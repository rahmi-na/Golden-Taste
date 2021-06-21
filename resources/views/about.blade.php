@extends('layouts.master-about')
@section('title', 'About Us')
@section('content-about')

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>About Us</h2>
                        <div class="breadcrumb__option">
                            <a href="/about">About</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Our Team -->
    <div class="rw jcc mb-team-6 circle-blend circle-warning">
        <div class="col-lg-6 text-center mx-auto mb-7">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Our Team</h5>
            <p class="mb-0">ini adalah nama anggota yang mengerjakan website sebagai tugas dari uts pemrograman web<span
                    class="fw-bold"></span></p>
        </div>
        <div class="col-xxl-9">
            <div class="row flex-center g-0">
                <div class="col-sm-team-6 col-lg-team-3 text-center">
                    <div class="wrapperr shadow-square-right"><img class="team-card-1" src="img/team/team1.jpg"
                            width="200" alt="..." /></div>
                    <h5 class="fw-bold mt-team-3 mb-team-1">Rahmi Nurazizah</h5>
                    <p class="jabatan">Ceo</p>
                </div>
                <div class="col-sm-team-6 col-lg-team-3 text-center">
                    <div class="wrapperr shadow-square-right"><img class="team-card-1" src="img/team/team2.jpg"
                            width="200" alt="..." /></div>
                    <h5 class="fw-bold mt-team-3 mb-team-1">Brilliant Alifia NF</h5>
                    <p class="jabatan">Ceo</p>
                </div>
                <div class="col-sm-team-6 col-lg-team-3 text-center">
                    <div class="wrapperr shadow-square-right"><img class="team-card-1" src="img/team/team3.jpg"
                            width="200" alt="..." /></div>
                    <h5 class="fw-bold mt-team-3 mb-team-1">Sukma</h5>
                    <p class="jabatan">Ceo</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>+01-3-8888-6868</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>60-49 Road 11378 New York</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>10:00 am to 23:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>goldentaste@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49116.39176087041!2d-86.41867791216099!3d39.69977417971648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886ca48c841038a1%3A0x70cfba96bf847f0!2sPlainfield%2C%20IN%2C%20USA!5e0!3m2!1sen!2sbd!4v1586106673811!5m2!1sen!2sbd"
            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>New York</h4>
                <ul>
                    <li>Phone: +12-345-6789</li>
                    <li>Add: 16 Creek Ave. Farmingdale, NY</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Your name">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Your Email">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Your message"></textarea>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
    @endsection

    