<!doctype html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>ClimeMates</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&display=swap" rel="stylesheet">
    <!-- Google Fonts Roboto -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />


    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <style>.active.link-secondary{
            font-weight: bold;
            color:#fff;
        }

    </style>
    <link href="https://uploads-ssl.webflow.com/62448acf9513136f203e24a4/css/compostnow.webflow.095f485e0.min.css" rel="stylesheet" type="text/css"/>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
        rel="stylesheet"
    />


    <!-- Intro settings -->
    <style>
        #intro {
            /* Margin to fix overlapping fixed navbar */
            margin-top: 58px;
        }

        @media (max-width: 991px) {
            #intro {
                /* Margin to fix overlapping fixed navbar */
                margin-top: 45px;
            }
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>


<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="https://cdn.discordapp.com/attachments/852892372072923147/1099262320846327838/banner.png" alt="..." style="max-height: 50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> <img src="https://cdn-icons-png.flaticon.com/512/3917/3917215.png"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="nav navbar-nav navbar-right ">
                <li class="nav-item">
                    <a class="nav-link  text-capitalize" href="/CompostMates" style="color:#709bc3">Composting Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-capitalize" href="/Biochar" style="color:#709bc3">Biochar Production</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-capitalize" href="/SoilImprovement" style="color:#709bc3">Soil Improvement</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  text-capitalize" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false" style="color:#709bc3">About</a>
                    <ul class="dropdown-menu bg-light border border-dark" aria-labelledby="dropdown09">
                        <li><a class="dropdown-item k text-capitalize" href="/AboutUs" style="color:#709bc3">About Us</a></li>
                        <li><a class="dropdown-item  text-capitalize" href="/Partner" style="color:#709bc3">Partner and Sponsors</a></li>
                        <li><a class="dropdown-item  text-capitalize" href="/CrewMates" style="color:#709bc3">The Gas Busters</a></li>

                    </ul>

                </li>

                <li class="nav-item">
                    <a class="nav-link  text-capitalize" href="/contact" style="color:#709bc3">Contact</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<h1 class="invisible">.</h1>


<br>
<div>
    <h5 class="text-center">Support Hours</h5>
    <p class="text-center "><small>+62 XXXXXXXXX – call and texting available</small></p>
    <p class="text-center "><small>Monday – Friday (9-5 pm)</small></p>
</div>



<section class="text-center">


    <!--Grid row-->
    <div class="row container">
        <!--Grid column-->
        <div class="col-lg-7 col-md-12 mb-4">
            <div class="row container d-flex justify-content-end">
                <!--Grid column-->
                <div class="col-lg-9 col-md-10  ">
                    <div class="container py-4  ">

                        @if(Session::has('cmessage_sent'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('cmessage_sent')}}
                            </div>
                        @endif
                        <form id="contactForm " method="POST" action="{{route('contact.send')}}">
                            @csrf
                            <!-- Name input -->
                            <div class="mb-3 ">
                                <label class="form-label d-flex justify-content-start" for="name">Full Name</label>
                                <input class="form-control" id="name" type="text" placeholder="Name" name="cname" required="" />
                            </div>

                            <!-- Email address input -->
                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-start" for="emailAddress">Email Address</label>
                                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" name="cemail" required=""/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-start" for="phone">Phone</label>
                                <input class="form-control" id="phone" type="text" placeholder="Phone" name="cphone" required=""/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-start" for="preference">Communication Preference</label>
                                <label class="form-label d-flex justify-content-start" for="preference">(Email,Text Message,Phone Call)</label>
                                <input class="form-control" id="preference" type="text" placeholder="preference" name="cpref" required=""/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-start" for="subject">Subject</label>
                                <input class="form-control" id="subject" type="text" placeholder="Subject" name="csubject" required=""/>
                            </div>



                            <!-- Message input -->
                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-start" for="message">Message</label>
                                <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" name="cmessage" required=""></textarea>
                            </div>

                            <!-- Form submit button -->
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                            </div>

                        </form>

                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->

                <!--Grid column-->
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-5 col-md-5 mb-4 justify-content-start container">
            <h6 class="services_taital text-center">ClimeMates Center</h6>

            <div class="container">
                <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 300px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d843.879442078069!2d115.2340833!3d-8.51775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMzEnMDMuOSJTIDExNcKwMTQnMDIuNyJF!5e1!3m2!1sen!2sid!4v1680942501181!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>
    <!--Grid row-->
</section>



<<div class="">
    <div class="container ">

        <footer class="row row-cols-1 row-cols-sm-3 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">

            </div>

            <div class="col mb-3">
                <a class="navbar-brand" href="/">
                    <img src="https://cdn.discordapp.com/attachments/852892372072923147/1099262320846327838/banner.png" alt="..." style="max-height: 50px">
                </a>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/contact" class="nav-link p-0 text-black">Contact Us	</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Monday–Sunday 8am–4pm</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Whatsapp: +62 xx xxxxxxxx	</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Email: example	</a></li>

                </ul>
            </div>
            <div class="col mb-3">

            </div>



            <div class="col mb-3">
                <a href="/CompostMates" class="nav-link p-0 text-capitalize text-black" style="font-size: 18px">Composting Service</a>
                <a href="/Biochar" class="nav-link p-0 text-capitalize text-black" style="font-size: 18px">Biochar Production</a>
                <a href="/SoilImprovement" class="nav-link p-0 text-capitalize text-black" style="font-size: 18px">Soil Improvement</a>
                <a href="" class="nav-link p-0 text-capitalize text-black" style="font-size: 18px">About</a>
                <a href="/AboutUs" class="nav-link p-0 text-capitalize text-black"> <small>About Us</small></a>
                <a href="/Partner" class="nav-link p-0 text-capitalize text-black"><small>Partner and Sponsors</small></a>
                <a href="/CrewMates" class="nav-link p-0 text-capitalize text-black"><small>The Gas Busters</small></a>

            </div>

            <div class="col mb-3">

            </div>
        </footer>
    </div>
</div>




<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<!-- javascript -->
<script src="js/owl.carousel.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=62448acf9513136f203e24a4" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://uploads-ssl.webflow.com/62448acf9513136f203e24a4/js/webflow.1536ede82.js" type="text/javascript"></script>
<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
<!-- Bugfix for pagination in tabs: https://discourse.webflow.com/t/pagination-within-tabs/75297/12 -->

<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function() {

        function activate(tab) {
            // switch all tabs off
            $(".w--current").removeClass(" w--current");

            // switch this tab on
            tab.addClass("w--current");
        }
        if (localStorage) {
            // let's not crash if some user has IE7
            var index = parseInt(localStorage['tab'] || '0');
            activate($('.w-tab-link').eq(index));
        }

        // When a link is clicked
        $(".w-tab-link").click(function() {
            if (localStorage)
                localStorage['tab'] = $(this).index();
            activate($(this));
        });

    });
</script>
<script>
    (function() {
        'use strict';

        document.addEventListener('DOMContentLoaded', function() {
            const searchParams = new URLSearchParams(window.location.search);

            function getCookie(key) {
                return document.cookie.split('; ').find((row)=>row.startsWith(key + '='))?.split('=')[1];
            }

            let date = new Date();
            let expires = date.setTime(date.getTime() + 365 * 24 * 60 * 60 * 1000);
            // One year

            // Handle offers
            let offer = searchParams.get('offer');

            if (!offer && typeof pageOffer !== 'undefined') {
                //let pageOffer = window.location.pathname.split('/').pop();
                offer = pageOffer;
            }

            if (offer) {
                document.cookie = 'offer=' + offer + '; expires=' + expires + '; path=/; domain=compostnow.org';
            } else {
                offer = getCookie('offer');
            }

            if (offer) {
                document.querySelectorAll('a[href*="compostnow.org/sign-up/"]').forEach((link)=>{
                        let href = link.getAttribute('href').replace("/sign-up/", "/sign-up/home/" + offer + "/");
                        link.setAttribute('href', href);
                    }
                );
            }

            // Handle referrals
            let refCode = searchParams.get('cn_ref_code');
            if (refCode.indexOf('?') !== -1) {
                // Strip breaking appended search params
                refCode = refCode.substring(0, refCode.indexOf('?'));
            }

            if (refCode) {
                document.cookie = 'cn_ref_code=' + refCode + '; expires=' + expires + '; path=/; domain=compostnow.org';
            } else {
                refCode = getCookie('cn_ref_code');
            }

            const keys = ['utm_campaign', 'utm_content', 'utm_medium', 'utm_source', 'cn_ref_code', 'fbuy_ref_code'];
            document.querySelectorAll('a[href*="compostnow.org/sign-up/"]').forEach((link)=>{
                    let href = link.getAttribute('href');

                    keys.forEach((key,index)=>{
                            if (href.indexOf(key) !== -1) {
                                return;
                            }

                            let val = searchParams.get(key);
                            if (val) {
                                href += href.indexOf('?') === -1 ? '?' : '&';
                                if (val.indexOf('?') !== -1) {
                                    // Strip breaking appended search params
                                    val = val.substring(0, val.indexOf('?'));
                                }
                                href += `${key}=${val}`;
                            }
                        }
                    );

                    if (refCode && href.indexOf('cn_ref_code') === -1) {
                        href += (href.indexOf('?') === -1 ? '?' : '&');
                        href += `cn_ref_code=${refCode}`;
                    }

                    link.setAttribute('href', href);
                }
            );
        }, false);

    }());
</script>


</body>

</body>
</html>
