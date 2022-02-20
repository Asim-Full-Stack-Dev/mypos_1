@extends('layouts.home_layout')
@section('title', 'About')
@section('about', 'active')
@section('content')
    <!-- setion -->
    <section class="section top_main_section mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full innerpage_section">
                        <h4 class="page_title">About us</h4>
                        <ul class="breadcrum">
                            <li><a href="home">Home</a></li>
                            <li>&gt;</li>
                            <li>About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- section -->
    <section class="layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main_heading">
                        <label>Features</label>
                        <h2>About us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="full software_img wow fadeInLeft text-center" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <img src="{{ asset('/home_page/asset/images/about_img.png') }}" class="w-75 float-none" alt="#"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- heading small -->
                            <div class="main_heading_small">
                                <h3>Who we are</h3>
                            </div>
                            <!-- end heading small -->
                        </div>
                        <!-- about section -->
                        <div class="col-md-12 margin_bottom_30">
                            <div class="full">
                                <p>Our mission at {{config('app.name')}} is to build a digital infrastructure for micro and small businesses.
                                    We believe that every business, whether big or small, should have an easy and better way of managing their businesses using technology.</p>
                            </div>
                        </div>
                        <!-- end about section -->
                        <div class="col-md-12">
                            <!-- heading small -->
                            <div class="main_heading_small">
                                <h3>What we do</h3>
                            </div>
                            <!-- end heading small -->
                        </div>
                        <!-- about section -->
                        <div class="col-md-12">
                            <div class="full">
                                <ul class="ml-3" style="list-style: circle;">
                                    <li>Frictionless signup process</li>
                                    <li>Free to download and free to use</li>
                                    <li>No credit card needed to get started</li>
                                    <li>Runs on mobile</li>
                                    <li>Works offline, no internet or data needed</li>
                                </ul>
                            </div>
                        </div>
                        <!-- end about section -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
