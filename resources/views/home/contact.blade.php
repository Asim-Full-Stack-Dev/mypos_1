@extends('layouts.home_layout')
@section('title', 'Contact')
@section('contact', 'active')
@section('content')
    <!-- setion -->
    <section class="section top_main_section mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full innerpage_section">
                        <h4 class="page_title">Services</h4>
                        <ul class="breadcrum">
                            <li><a href="home">Home</a></li>
                            <li>&gt;</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- setion -->
    <section class="layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main_heading">
                        <label>Contact us</label>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 light_silver_2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="contact_form">
                                    <form>
                                        @if( Request::get('name'))
                                            <div class="alert alert-success">Thank you for contacting us!</div>
                                        @endif
                                            <fieldset>
                                            <div class="field">
                                                <input type="text" name="name" placeholder="Full Name" required=""/>
                                            </div>
                                            <div class="field">
                                                <input type="email" name="mail" placeholder="Email Address" required=""/>
                                            </div>
                                            <div class="field">
                                                <input type="text" name="subject" placeholder="Subject" required=""/>
                                            </div>
                                            <div class="field margin_bottom_30">
                                                <textarea placeholder="Message"></textarea>
                                            </div>
                                            <div class="field">
                                                <div class="center">
                                                    <button class="form_bt">Submit</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 dark_bg_color">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="row">
                                    <div class="contact_us_cont">
                                        <!-- map section -->
                                        <div class="map_section">
                                            <div id="map">
                                            </div>
                                        </div>
                                        <!-- end map section -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&amp;callback=initMap"></script>
@endsection
