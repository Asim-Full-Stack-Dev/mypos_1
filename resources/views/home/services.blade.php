@extends('layouts.home_layout')
@section('title', 'Services')
@section('service', 'active')
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
                            <li>Services</li>
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
                        <label>Services</label>
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="full software_img wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <img src="{{ asset('/home_page/asset/images/about_img.png') }}" alt="#"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <!-- features section -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text_align_left">
                            <div class="our_feature">
                                <div class="full">
                                    <div class="feauter_list">
                                        <ul>
                                            <li>
                                                <div class="icon_feature">
                                                    <img src="{{ asset('/home_page/asset/images/ser1.png') }}" alt="#"/>
                                                </div>
                                                <div class="feature_text">
                                                    <h6 class="semi_bold black_color">Inventory System</h6>
                                                    <p>Keep track of your inventory items, and it's cost through your phone. No more manual tracking and recording.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon_feature">
                                                    <img src="{{ asset('/home_page/asset/images/ser3.png') }}" alt="#"/>
                                                </div>
                                                <div class="feature_text">
                                                    <h6 class="semi_bold black_color">Cash Ledger</h6>
                                                    <p>Manage your cash flow, record customers on credit and send payment.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon_feature">
                                                    <img src="{{ asset('/home_page/asset/images/ser4.png') }}" alt="#"/>
                                                </div>
                                                <div class="feature_text">
                                                    <h6 class="semi_bold black_color">Reporting</h6>
                                                    <p>Easy to read Profit and lost statement. Understand what’s happening on your inventory using
                                                        {{config('app.name')}} inventory insight report.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end features section -->
                        <!-- features section -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text_align_left">
                            <div class="our_feature">
                                <div class="full">
                                    <div class="feauter_list">
                                        <ul>
                                            <li>
                                                <div class="icon_feature">
                                                    <img src="{{ asset('/home_page/asset/images/ser2.png') }}" alt="#"/>
                                                </div>
                                                <div class="feature_text">
                                                    <h6 class="semi_bold black_color">Data Synchronization</h6>
                                                    <p>Access securely your business information with {{config('app.name')}} cloud data on the go.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon_feature">
                                                    <img src="{{ asset('/home_page/asset/images/ser5.png') }}" alt="#"/>
                                                </div>
                                                <div class="feature_text">
                                                    <h6 class="semi_bold black_color">Expense Tracker</h6>
                                                    <p>Log and record all your business-related expenses. Track and monitor expenses on your mobile phone.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon_feature">
                                                    <img src="{{ asset('/home_page/asset/images/ser6.png') }}" alt="#"/>
                                                </div>
                                                <div class="feature_text">
                                                    <h6 class="semi_bold black_color">External Device Compatibility</h6>
                                                    <p>Print receipts using any external printer devices or use handheld barcode scanner devices for faster sales recording.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end features section -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- section -->
@endsection
