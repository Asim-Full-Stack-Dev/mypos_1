<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Peddlr"/>
    <meta property="og:width" content="1200"/>
    <meta property="og:height" content="360"/>
    <meta property="og:description"
          content="Tired of using pen and paper for sales, expense and inventory tracking? Worry no more! The #1 Retail FREE POS Mobile App is now here!"/>
    <meta property="og:image" content=""/>

    <meta name="csrf-token" content="MMKpGxLDbskcrGWgSc6ok5v1NiASdKvaiFqKTtlK">

    {{--favicon--}}
    <link href="{{ asset('/home_page/asset/img/pos-logo-icon.png') }}" rel="icon" type="image/png" sizes="16x16">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Fontawesom icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          referrerpolicy="no-referrer"/>

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
          integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
          integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" type="text/css" href="{{ asset('home_page/main.css') }}"/>

    <script src="{{ asset('https://www.peddlr.io/js/app.js') }}" defer></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@10') }}"></script>

    <title>POS</title>

    <script>
        window.Laravel = {
            "csrfToken": "MMKpGxLDbskcrGWgSc6ok5v1NiASdKvaiFqKTtlK",
            "userData": {
                "mobile_number": null,
                "activeUserId": 0,
                "business": null
            }
        };
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-184907363-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-184907363-1');
    </script>


</head>

<body data-bs-spy="scroll" data-bs-target="#navbarScrollspy" data-bs-offset="10" tabindex="0">

<nav id="navbarScrollspy" class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm" data-spy="affix"
     data-offset-top="1">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img class="d-inline-block align-text-top w-25" style="width:55px;"
                 src="{{ asset('/home_page/asset/img/pos-logo-hr.png') }}" alt="Peddlr Logo"/>
        </a>

        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="text-primary"><i class="fas fa-bars fa-2x"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto nav-pills">


                <li class="nav-item px-4">
                    <a class="nav-link btn btn-primary shadow-none px-4 text-white" href="{{route('login')}}">Login</a>
                </li>


            </ul>
        </div>
    </div>
</nav>
<main>
    <div id="app">


        <!-- Header home -->
        <section id="home" class="text-center bg-header" style="padding-top: 85px;">
            <div class="container">
                <div class="d-flex flex-column text-white">
                    <div class="mt-5">
                        <h2 class="fw-bold">JUMPSTARTING</h2>
                        <h2 class="fw-bold">Micro and Small Businesses<span class="text-sm-break h2 fw-bold"> to digital world</span>
                        </h2>
                        <p class="title fw-bold">Manage Better. Earn More.</p>

                        <p class="title-small fw-bold text-uppercase mt-4 mt-lg-5">Download Now</p>

                        <a href="{{ asset('') }}" class="text-decoration-none" target="_blank">
                            <button type="button" class="btn btn-light shadow-none" style="border: 1px solid #063970;">
                                <i class="fab fa-google-play" style="color:#063970;"></i>
                                <span class="ms-1">Google Play</span>
                            </button>
                        </a>

                        <a href="{{ asset('') }}" class="text-decoration-none" target="_blank">
                            <button type="button" class="btn btn-light shadow-none" style="border: 1px solid #063970;">
                                <i class="fab fa-apple" style="color:#063970;"></i>
                                <span class="ms-1">App Store</span>
                            </button>
                        </a>

                        <a href="{{ asset('') }}" class="text-decoration-none" target="_blank">
                            <button type="button" class="btn btn-light shadow-none" style="border: 1px solid #063970;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.119" height="12.142"
                                     viewBox="0 0 16.119 12.142">
                                    <path fill="#063970" data-name="Icon simple-huawei"
                                          d="M2.465,6.576A4.467,4.467,0,0,0,1.155,9.02v.235a2.358,2.358,0,0,0,.819,1.612,24.526,24.526,0,0,0,4.9,3.056.062.062,0,0,0,.067-.007l.013-.027v-.027A36.974,36.974,0,0,0,2.465,6.576Zm4.016,8.368a.071.071,0,0,0-.067-.054l-4.956.175a2.376,2.376,0,0,0,2.391,1.477A12.885,12.885,0,0,0,6.454,15c.04-.034.027-.06.027-.06Zm.054-.524C4.359,12.949.141,10.7.141,10.7A3.027,3.027,0,0,0,0,11.572v.047a2.827,2.827,0,0,0,.269,1.222A2.94,2.94,0,0,0,1.84,14.319a2.777,2.777,0,0,0,.94.208c.081.013,2.955,0,3.721,0a.071.071,0,0,0,.054-.034v-.04a.046.046,0,0,0-.02-.034Zm-.45-9.825A2.3,2.3,0,0,0,4.359,6.71v.275a3.429,3.429,0,0,0,.107.705c.443,1.948,2.592,5.138,3.056,5.809a.064.064,0,0,0,.067.02.067.067,0,0,0,.04-.067c.712-7.119-.745-9.013-.745-9.013a7.7,7.7,0,0,0-.8.154Zm5.574,1.524A2.317,2.317,0,0,0,10.02,4.588s-.383-.094-.786-.148c0,0-1.464,1.887-.752,9.019a.058.058,0,0,0,.04.054.05.05,0,0,0,.067-.02c.484-.692,2.619-3.868,3.056-5.8a3.257,3.257,0,0,0,.013-1.571ZM9.7,14.9s-.047,0-.06.034c0,0-.007.047.02.067a13.085,13.085,0,0,0,2.606,1.545,1.213,1.213,0,0,0,.289.04h.094c.463-.013,1.276-.248,2.015-1.518L9.691,14.9Zm5.258-5.648a4.049,4.049,0,0,0-1.3-2.673,36.911,36.911,0,0,0-4.479,7.253.089.089,0,0,0,.013.087l.027.007h.04a25.107,25.107,0,0,0,4.889-3.049A2.4,2.4,0,0,0,14.956,9.248Zm1.021,1.437s-4.217,2.263-6.393,3.727a.071.071,0,0,0-.02.074s.02.04.047.04c.779,0,3.734,0,3.808-.013a2.91,2.91,0,0,0,2.445-1.719A2.982,2.982,0,0,0,15.977,10.686Z"
                                          transform="translate(0 -4.44)"/>
                                </svg>
                                <span class="ms-1">App Gallery</span>
                            </button>
                        </a>

                        <p class="mt-3">Use POS for FREE.<br/>No credit card required. No commitment.</p>
                    </div>

                    <div class="mt-3">
                        <img class="img-fluid" src="{{ asset('/home_page/asset/img/front.png') }}" alt="front"/>
                    </div>
                </div>
            </div>
        </section>

        <!-- Peddlr MSMEs -->
        <section class="p-lg-2 mb-2">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col-md-12">
                        <hr style="background-color:#d6747e; width: 2px; height: 40px; display: inline-block;"/>
                    </div>

                    <div class="col-md-12 mb-3">
                        <h6 class="fw-bold small-title">POS supports micro and small businesses.</h6>
                        <p>Whether you are a starting online seller on social media or doing offline business through
                            your physical store, we got your back.</p>
                    </div>

                    <div class="col-md-12">
                        <h6 class="fw-bold small-title">Smart tool for the next generation of micro and small
                            businesses.</h6>
                        <p>POS makes it easier for you to manage your business better. Our app helps you manage your
                            sales, inventory, accounting and reports through your mobile devices. It works offline and
                            no internet needed. Manage your business anywhere.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- List of business  -->
        <section>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-6 mb-1">
                        <img class="img-fluid" width="120"
                             src="{{ asset('/home_page/asset/img/business/2x/public-vendor.png') }}" alt="Business 1"/>
                        <p>Sari-Sari Storer</p>
                    </div>

                    <div class="col-md-3 col-6 mb-1">
                        <img class="img-fluid" width="120"
                             src="{{ asset('/home_page/asset/img/business/2x/coffee-shop.png') }}" alt="Business 2"/>
                        <p>Online Store (Food & Non-Food)</p>
                    </div>

                    <div class="col-md-3 col-6 mb-1">
                        <img class="img-fluid" width="120"
                             src="{{ asset('/home_page/asset/img/business/2x/milk-tea-shop.png') }}" alt="Business 3"/>
                        <p>Home-Based Online Food Seller</p>
                    </div>
                    <div class="col-md-3 col-6 mb-1">
                        <img class="img-fluid" width="120"
                             src="{{ asset('/home_page/asset/img/business/2x/food-stall.png') }}"
                             alt="Business 4') }}"/>
                        <p>Home-Based Online Non-Food Seller</p>
                    </div>

                    <div class="col-md-3 col-6 mb-1">
                        <img class="img-fluid" width="120"
                             src="{{ asset('/home_page/asset/img/business/2x/carinderia.png') }}" alt="Business 5"/>
                        <p>Restaurant</p>
                    </div>

                    <div class="col-md-3 col-6 mb-1">
                        <img class="img-fluid" width="120"
                             src="{{ asset('/home_page/asset/img/business/2x/canteen.png') }}" alt="Business 6"/>
                        <p>Milk Tea Shop</p>
                    </div>

                    <div class="col-md-3 col-6 mb-1">
                        <img class="img-fluid" width="120"
                             src="{{ asset('/home_page/asset/img/business/2x/bake-shop.png') }}"/>

                        <p>Food Stall</p>
                    </div>

                    <div class="col-md-3 col-6 mb-1">
                        <img class="img-fluid" width="120"
                             src="{{ asset('/home_page/asset/img/business/2x/sari-sari-store.png') }}"
                             alt="Business 6"/>
                        <p>Drink/Juice Shop</p>
                    </div>

                    <div class="col-md-3 col-6 mb-1">
                        <img class="img-fluid" width="120"
                             src="{{ asset('/home_page/asset/img/business/2x/mini-grocery.png') }}"/>
                        <p>Mini Grocery</p>
                    </div>

                    <div class="col-md-3 col-6 mb-1">
                        <img class="img-fluid" width="120"
                             src="{{ asset('/home_page/asset/img/business/2x/homebased-seller.png') }}"/>
                        <p>Others</p>
                    </div>

                    <div class="col-md-3 col-6 mb-1">
                        <img class="img-fluid" width="120"
                             src="{{ asset('/home_page/asset/img/business/2x/online-store.png') }}"/>
                        <p>Online Store</p>
                    </div>

                    <div class="col-md-3 col-6 mb-1">
                        <img class="img-fluid" width="120"
                             src="{{ asset('/home_page/asset/img/business/2x/small-retail.png') }}"/>
                        <p>Other Small Retail Outlets</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- App features  style="padding: 70px 0px;  background: linear-gradient(180deg, #d6747e, #063970);"  -->
        <section id="features" style="padding-top: 70px">
            <div class="custom-section">
                <div class="container text-center py-5 content ">
                    <h2 class="fw-bold text-uppercase">How we can help you</h2>
                    <p>Manage your operations better and be on the go.</p>

                    <img class="img-fluid angles" src=""/>

                    <div class="row mt-5">
                        <div class="col-md-4 mb-3">
                            <div class="card h-100 p-3" style="border-top: 4px solid #d6747e; border-radius: 12px;">
                                <div class="card-body">
                                    <img class="img-fluid" width="200px"
                                         src="{{ asset('/home_page/asset/img/features/1x/free-mobile-pos.png') }}"
                                         alt="Features image"/>
                                    <h6 class="card-title title fw-bold mt-2">FREE Mobile POS</h6>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur
                                        rhoncus urna ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec
                                        pretium ac mi vitae accumsan. Morbi in tincidunt sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card h-100 p-3" style="border-top: 4px solid #d6747e; border-radius: 12px;">
                                <div class="card-body">
                                    <img class="img-fluid" width="200px"
                                         src="{{ asset('/home_page/asset/img/features/1x/free-inventory.png') }}"
                                         alt="Features image"/>
                                    <h6 class="card-title title fw-bold mt-2">FREE Inventory Management</h6>
                                    <p class="card-text ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur
                                        rhoncus urna ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec
                                        pretium ac mi vitae accumsan. Morbi in tincidunt sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card h-100 p-3" style="border-top: 4px solid #d6747e; border-radius: 12px;">
                                <div class="card-body">
                                    <img class="img-fluid" width="200px"
                                         src="{{ asset('/home_page/asset/img/features/1x/free-store-link.png') }}"
                                         alt="Features image"/>
                                    <h6 class="card-title title fw-bold mt-2">FREE Store Link</h6>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur
                                        rhoncus urna ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec
                                        pretium ac mi vitae accumsan. Morbi in tincidunt sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card h-100 p-3" style="border-top: 4px solid #d6747e; border-radius: 12px;">
                                <div class="card-body">
                                    <img class="img-fluid" width="200px"
                                         src="{{ asset('/home_page/asset/img/features/1x/free-expense-tracker.png') }}"
                                         alt="Features image"/>
                                    <h6 class="card-title title fw-bold mt-2">FREE Expense Tracker</h6>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur
                                        rhoncus urna ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec
                                        pretium ac mi vitae accumsan. Morbi in tincidunt sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card h-100 p-3" style="border-top: 4px solid #d6747e; border-radius: 12px;">
                                <div class="card-body">
                                    <img class="img-fluid" width="200px"
                                         src="{{ asset('/home_page/asset/img/features/1x/free-accounting-reports.png') }}"
                                         alt="Features image"/>
                                    <h6 class="card-title title fw-bold mt-2">FREE Accounting Reports</h6>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur
                                        rhoncus urna ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec
                                        pretium ac mi vitae accumsan. Morbi in tincidunt sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card h-100 p-3" style="border-top: 4px solid #d6747e ; border-radius: 12px;">
                                <div class="card-body">
                                    <img class="img-fluid" width="200px"
                                         src="{{ asset('/home_page/asset/img/features/1x/offline-features.png') }}"
                                         alt="Features image"/>
                                    <h6 class="card-title title fw-bold mt-2">Works Offline</h6>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur
                                        rhoncus urna ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec
                                        pretium ac mi vitae accumsan. Morbi in tincidunt sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card h-100 p-2" style="border-top: 4px solid #d6747e ; border-radius: 12px;">
                                <div class="card-body">
                                    <img class="img-fluid" width="200px"
                                         src="{{ asset('/home_page/asset/img/features/1x/records-on-go.png') }}"
                                         alt="Features image"/>
                                    <h6 class="card-title title fw-bold mt-2">Records On The Go</h6>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur
                                        rhoncus urna ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec
                                        pretium ac mi vitae accumsan. Morbi in tincidunt sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card h-100 p-3" style="border-top: 4px solid #d6747e ; border-radius: 12px;">
                                <div class="card-body">
                                    <img class="img-fluid" width="200px"
                                         src="{{ asset('/home_page/asset/img/features/1x/external-device.png') }}"
                                         alt="Features image"/>
                                    <h6 class="card-title title fw-bold mt-2">External Device Compatibility</h6>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur
                                        rhoncus urna ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec
                                        pretium ac mi vitae accumsan. Morbi in tincidunt sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card h-100 p-3" style="border-top: 4px solid #d6747e ; border-radius: 12px;">
                                <div class="card-body">
                                    <img class="img-fluid" width="200px"
                                         src="{{ asset('/home_page/asset/img/features/1x/digital-ledger.png') }}"
                                         alt="Features image"/>
                                    <h6 class="card-title title fw-bold mt-2">Digital Ledger</h6>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur
                                        rhoncus urna ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec
                                        pretium ac mi vitae accumsan. Morbi in tincidunt sem.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class="btn btn-primary px-5 py-2 mt-4 shadow-sm" href="">Get Started For Free</a>

                    <!-- <button class="btn btn-primary px-5 py-2 mt-4 shadow-sm" data-bs-toggle="modal" data-bs-target="#RegisterModal">Get Started For Free</button>
 --></div>
            </div>
        </section>

        <!-- Press  -->
    <!--<section id="press" style="padding: 70px 0px;">
            <div class="container text-center">
                <h2 class="fw-bold text-uppercase">As Featured On</h2>

                <div class="text-center">
                    <div class="grid-block-center">
                        <a href="https://opinyon.net/region-8/ev-homegrown-startup-develops-app-to-help-micro-businesses?fbclid=IwAR24YUu7IimN_u7OEzEzxYQVlzkcrEIikXW9PvOzDOOXOF7LGWzKOR_giO8" target="_blank"><img class="img-fluid"  width="180" height="180" src="{{ asset('/home_page/asset/img/press-logo/opinyon.png') }}"  alt="Press Logo" /></a>
                    </div>

                    <div class="grid-block-center">
                        <a href="https://www.sunstar.com.ph/article/1890890/Tacloban/Business/Peddlr-app-to-help-Philippine-micro-small-businesses" target="_blank"><img class="img-fluid" width="180" height="180" src="{{ asset('/home_page/asset/img/press-logo/sunstar.png') }}"  alt="Press Logo" /></a>
                    </div>

                    <div class="grid-block-center">
                        <a href="https://www.facebook.com/lsdenewstacloban/photos/a.635223136544146/4067078406691918/?type=3" target="_blank"><img class="img-fluid" width="180" height="180" src="{{ asset('/home_page/asset/img/press-logo/daily-express-leyte.png') }}"  alt="Press Logo" /></a>
                    </div>

                    <div class="grid-block-center">
                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6765597554097975296/" target="_blank"><img class="img-fluid" width="180" height="180" src="{{ asset('/home_page/asset/img/press-logo/daily-finance.png') }}"  alt="Press Logo" /></a>
                    </div>

                    <div class="grid-block-center">
                        <a href="https://www.facebook.com/samarexpress/posts/3909628945770770" target="_blank"><img class="img-fluid" width="180" height="180" src="{{ asset('/home_page/asset/img/press-logo/samar-weekly-express.png') }}"  alt="Press Logo" /></a>
                    </div>

                    <div class="grid-block-center">
                        <a href="https://andreaguanco.com/best-pos-system-for-your-small-business/?fbclid=IwAR1MW74DHW89gz3E62BFBVQQpeuiOiPLiXr1RaS8R9vEoPQutiMRMQCVaT0" target="_blank"><img class="img-fluid" width="180" height="180" src="{{ asset('/home_page/asset/img/press-logo/feature-iloilo.png') }}"  alt="Press Logo" /></a>
                    </div>

                    <div class="grid-block-center">
                        <a href="https://www.facebook.com/rmntacloban/posts/1092416471166873" target="_blank"><img class="img-fluid" width="130" height="130" src="{{ asset('/home_page/asset/img/press-logo/rmn.png"  alt="Press Logo') }}" /></a>
                    </div>

                    <div class="grid-block-center">
                        <a href="https://mb.com.ph/2021/05/28/this-free-app-will-help-you-kickstart-your-small-business/?fbclid=IwAR08zvGb9rvrWHaReXe4rCIW7tbyGUuE2acaR81ditXEpKUSKJBqIfcrTuo" target="_blank"><img class="img-fluid w-100" src="{{ asset('/home_page/asset/img/press-logo/manila-bulletin.png') }}"  alt="Press Logo" /></a>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Reviews -->

        <section style="padding: 70px 0px;  background: #063970;">
            <div class="container text-center">
                <h2 class="fw-bold text-uppercase text-white">Reviews</h2>
                <p class="text-white">See what POS users are saying.</p>

                <div class="slick-carousel">

                    <div class="mx-2 slide">
                        <div class="card-body">
                            <div class="mb-3">
                                <img class="rounded-circle mx-auto img-review-size"
                                     src="{{ asset('/home_page/asset/img/reviews/raquel-de-dios.webp') }}">
                            </div>

                            <h6 class="card-title fw-bold">Raquel De Dios</h6>
                            <div class="mb-2 text-gold">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text small">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur rhoncus urna
                                ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec pretium ac mi vitae
                                accumsan. Morbi in tincidunt sem."</p>
                        </div>
                    </div>

                    <div class="mx-2 slide">
                        <div class="card-body">
                            <div class="mb-3">
                                <img class="rounded-circle mx-auto img-review-size"
                                     src="{{ asset('/home_page/asset/img/reviews/theas-travel.webp') }}">
                            </div>
                            <h6 class="card-title fw-bold">Thea's Travel</h6>
                            <div class="mb-2 text-gold">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text small">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur rhoncus urna
                                ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec pretium ac mi vitae
                                accumsan. Morbi in tincidunt sem."</p>
                        </div>
                    </div>

                    <div class="mx-2 slide">
                        <div class="card-body">
                            <div class="mb-3">
                                <img class="rounded-circle mx-auto img-review-size"
                                     src="{{ asset('/home_page/asset/img/reviews/denisse-relleta.webp') }}">
                            </div>

                            <h6 class="card-title fw-bold">Denisse Relleta</h6>
                            <div class="mb-2 text-gold">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text small">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur rhoncus urna
                                ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec pretium ac mi vitae
                                accumsan. Morbi in tincidunt sem."</p>
                        </div>
                    </div>

                    <div class="mx-2 slide">
                        <div class="card-body">
                            <div class="mb-3">
                                <img class="rounded-circle mx-auto img-review-size"
                                     src="{{ asset('/home_page/asset/img/reviews/annabel-blas.webp') }}">
                            </div>

                            <h6 class="card-title fw-bold">Annabel Blas</h6>
                            <div class="mb-2 text-gold">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text small">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur rhoncus urna
                                ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec pretium ac mi vitae
                                accumsan. Morbi in tincidunt sem."</p>
                        </div>
                    </div>

                    <div class="mx-2 slide">
                        <div class="card-body">
                            <div class="mb-3">
                                <img class="rounded-circle mx-auto img-review-size"
                                     src="{{ asset('/home_page/asset/img/reviews/spyderLuvz-TV.webp') }}">
                            </div>

                            <h6 class="card-title fw-bold">SpyderLuvz TV</h6>
                            <div class="mb-2 text-gold">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text small">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur rhoncus urna
                                ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec pretium ac mi vitae
                                accumsan. Morbi in tincidunt sem."</p>
                        </div>
                    </div>

                    <div class="mx-2 slide">
                        <div class="card-body">
                            <div class="mb-3">
                                <img class="rounded-circle mx-auto img-review-size"
                                     src="{{ asset('/home_page/asset/img/reviews/ashley.webp') }}">
                            </div>

                            <h6 class="card-title fw-bold">ashleyシ</h6>
                            <div class="mb-2 text-gold">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text small">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                ultricies ligula ut felis ultrices, sed aliquam libero sagittis. Curabitur rhoncus urna
                                ac mattis vestibulum. Integer hendrerit eget erat a blandit. Donec pretium ac mi vitae
                                accumsan. Morbi in tincidunt sem."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script>
            // console.log(window.location.hash)
            // let url = window.location.href

            // var hash = window.location.hash.substr(1);

            // var result = hash.split('&').reduce(function (res, item) {
            //     var parts = item.split('=');
            //     res[parts[0]] = parts[1];
            //     return res;
            // }, {});

            // console.log(result.id_token);

            // if (typeof result.id_token !== 'undefined') {
            //     console.log('exists')
            // } else {
            //     console.log('not')
            // }

            // let [hash, params] = url.split('#')[1].split('?')
            // let paramsObj = Object.fromEntries(new URLSearchParams(params).entries())

            // console.log(hash)
            // console.log(paramsObj)
        </script>
    </div>
    <footer>
        <div style="background: #FDFDFD;">
            <div class="container px-3" style="padding: 70px 0px;">
                <div class="row">

                    <!-- Footer logo -->
                    <div class="col-md-3 text-center">
                        <a href="#">
                            <img class="img-fluid w-50" style="width:200px;"
                                 src="{{ asset('/home_page/asset/img/pos-logo-vt.png') }}" alt="POS Logo"/>
                        </a>
                    </div>

                    <div class="col-md-2 mt-5 mt-lg-0">
                        <h6 class="fw-bold small-title">Quick Links</h6>
                        <div class="mt-3">
                            <div class="mt-3">
                                <a class="text-decoration-none link-dark" href="">Home</a>
                            </div>

                            <div class="mt-3">
                                <a class="text-decoration-none link-dark" href="">Features</a>
                            </div>

                            <div class="mt-3">
                                <a class="text-decoration-none link-dark" href="">FAQs</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mt-5 mt-lg-0">
                        <h6 class="fw-bold small-title">Company Information</h6>
                        <div class="mt-3">
                            <div class="mt-3">
                                <a class="text-decoration-none link-dark" href="">About Us</a>
                            </div>

                            <div class="mt-3">
                                <a class="text-decoration-none link-dark" href="">Blogs</a>
                            </div>

                            <div class="mt-3">
                                <a class="text-decoration-none link-dark" href="">Press</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mt-5 mt-lg-0">
                        <h6 class="fw-bold small-title">Support</h6>
                        <div class="mt-3">
                            <div class="mt-3">
                                <a class="text-decoration-none link-dark" href="#">
                                    <i class="fas fa-envelope text-primary"></i>
                                    <span class="ms-1">Helpme@POS</span>
                                </a>
                            </div>

                            <div class="mt-3">
                                <a class="text-decoration-none link-dark" href="" target="_blank">
                                    <i class="fab fa-facebook-messenger text-primary"></i>
                                    <span class="ms-1">Message us on messenger</span>
                                </a>
                            </div>

                            <div class="mt-3">
                                <a class="text-decoration-none link-dark" href="" target="_blank">
                                    <i class="fab fa-facebook text-primary"></i>
                                    <!-- <i class="fab fa-facebook-square text-primary"></i> -->
                                    <span class="ms-1">POS App User Community</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Comapany social media link  -->
        <div style="background: #FDFDFD;">
            <div class="container mb-2">
                <div class="d-flex justify-content-center">
                    <a href="" target="_blank" class="me-3 link-secondary">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>

                    <a href="" target="_blank" class="me-3 link-secondary">
                        <i class="fab fa-instagram-square fa-2x"></i>
                    </a>

                    <a href="" target="_blank" class="me-3 link-secondary">
                        <i class="fab fa-youtube-square fa-2x"></i>
                    </a>

                    <a href="" target="_blank" class="me-3 link-secondary">
                        <svg class="cb-icon" fill="#6c757d" xmlns="http://www.w3.org/2000/svg" width="28" height="26"
                             viewBox="0 0 32 32">
                            <path
                                d="M28.802 0h-25.604c-1.76 0.005-3.193 1.438-3.198 3.198v25.604c0.005 1.76 1.438 3.193 3.198 3.198h25.604c1.76-0.005 3.193-1.438 3.198-3.198v-25.604c-0.005-1.76-1.438-3.193-3.198-3.198zM9.396 19.286c1.411 0.646 3.078 0.021 3.724-1.391h2.214c-1.38 5.651-9.698 4.651-9.698-1.167 0-5.823 8.318-6.823 9.698-1.167h-2.214c-0.813-1.786-3.161-2.214-4.547-0.823-1.391 1.385-0.964 3.734 0.823 4.547zM24.521 20.411c-0.422 0.365-0.896 0.646-1.417 0.844-1.495 0.578-3.182 0.391-4.516-0.51v0.51h-2.016v-14.094h2v5.479c0.714-0.484 1.542-0.771 2.401-0.839h0.359c4.552-0.010 6.646 5.656 3.188 8.609zM24.224 16.724c0.031 1.573-1.234 2.87-2.807 2.87s-2.839-1.297-2.802-2.87c0.078-3.656 5.526-3.656 5.609 0z"/>
                        </svg>
                    </a>

                    <a href="" target="_blank" class="me-3 link-secondary">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Terms Privacy -->
        <div class="bg-dark py-3">
            <div class="container px-3 text-white">
                <div class="d-flex flex-wrap justify-content-center">
                    <p>Copyright © 2021 POS. All Right Reserve</p>
                    <!-- <h6>© 2020 Gantherly. All Rights Reserved</h6> -->
                    <div class="ms-lg-auto">
                        <a class="text-decoration-none text-white link-secondary" href="#">Terms & Condition </a>
                        <span class="mx-2"></span>
                        <a class="text-decoration-none text-white link-secondary" href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <input type="hidden" name="crypted_id" id="crypted_id" value="">
</main>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

<!-- Jquery -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

<!-- Slick Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- <script type="text/javascript" src="asset/myscript.js"></script> -->

<!-- Slick design -->
<script>
    $('.slick-carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        // rows: 0,
        // adaptiveHeight: true,

        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },

            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },

            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    });
</script>

<script>
    var email;

    function verifyOtp() {
        otp = $('#otp').val()
        if (otp != '') {
            // window.location.href = `/business-info/${sessionStorage.getItem('id')}`;

            $.ajax({
                url: "/verify-otp",
                type: "POST",
                data: {
                    _token: 'MMKpGxLDbskcrGWgSc6ok5v1NiASdKvaiFqKTtlK',
                    otp: otp,
                    userId: sessionStorage.getItem('id')
                },
                success: function (data) {
                    if (data.success) {
                        window.location.href = $('#crypted_id').val() != null && $('#crypted_id').val() != '' ? `/home?ref=${crypted_id}` : `/home`;
                        // sessionStorage.setItem('id', data.userId);
                        // openOTP()
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Invalid OTP. Please check the message and try again!',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        })
                    }
                },
            });
        } else {
            Swal.fire({
                title: 'Error!',
                text: 'Invalid OTP!',
                icon: 'error',
                confirmButtonText: 'OK'
            })
            // alert('Invalid OTP!');
        }
    }

    function openLoginForm() {
        $('#LoginModal').modal('show')
    }

    function openOTPModal() {
        $('#OTPModal').modal('show')
    }

    function openRegistrationForm() {
        $('#LoginModal').modal('hide')
        $('#RegisterModal').modal('show')
        // $('#OTPModal').modal('show')
    }

    function register() {

        email = document.getElementById("email").value;
        password = document.getElementById("password").value;
        password2 = document.getElementById("password2").value;
        console.log(email.length)
        if (email.length != 11) {
            Swal.fire({
                title: 'Error!',
                text: 'Please input valid mobile number!',
                icon: 'error',
                confirmButtonText: 'OK'
            })
            // alert('Please input valid mobile number!');
        } else {
            if (email == '' || password == '' || password2 == '') {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please fill up all fields!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                })
            } else {
                if (password2 != password) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Password does not match confirm password field!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    })
                    // alert('Password does not match confirm password field!')
                } else {
                    $('#becomeBtn').text('Sending request plese wait...');
                    $('#becomeBtn').attr('disabled', true);
                    $.ajax({
                        url: "/register-user",
                        type: "POST",
                        data: {
                            _token: 'MMKpGxLDbskcrGWgSc6ok5v1NiASdKvaiFqKTtlK',
                            phone: email,
                            crypted_id: $('#crypted_id').val(),
                            email: sessionStorage.getItem('email'),
                            password: password
                        },
                        success: function (data) {
                            if (data.success) {
                                $('#becomeBtn').text('Become a Peddlr');
                                $('#becomeBtn').prop('disabled', false);
                                sessionStorage.setItem('id', data.userId);
                                sessionStorage.removeItem('email');
                                openOTPModal()
                            } else {
                                $('#becomeBtn').text('Become a Peddlr');
                                $('#becomeBtn').prop('disabled', false);
                                Swal.fire({
                                    title: 'Error!',
                                    text: data.message,
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                })
                            }
                        },
                    });
                }
            }
        }


    }
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->

</body>

</html>
