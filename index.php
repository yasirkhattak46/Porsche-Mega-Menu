<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body>
<section class="home">
    <div class="video-container">
        <video autoplay loop muted>
            <source src="assets/videos/Taycan.mp4" type="video/mp4">
        </video>
        <div class="blur-active"></div>

    </div>
    <i class="fas fa-bars menu_btn " onclick="toggleleft()"> <span class="menuText">Menu</span> </i>
    <div class="sidebar">
        <div id="sidebar1">
            <div class="row">
                <div class="col-lg-6 col-sm-12  sidebar_tabs ">
                    <ul class="nav nav-tabs d-block border-0 pt-5" id="myTab" role="tablist">
                        <li onclick="mobile_sec_nav()" class="nav-item pb-xl-4 pb-md-4 pb-3 px-5 position-relative"
                            role="presentation">
                            <button class=" nav-link active m-auto nav_btn" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">
                                Models
                                <i class="fa-solid fa-chevron-right mt-2"></i></button>

                        </li>
                        <li onclick="mobile_sec_nav()" class="nav-item  pb-xl-4 pb-md-4 pb-3 px-5 position-relative"
                            role="presentation">
                            <button class="nav-link m-auto nav_btn" id="Primary-tab" data-bs-toggle="tab"
                                    data-bs-target="#Primary" type="button" role="tab" aria-controls="Primary"
                                    aria-selected="false"
                                    tabindex="-1">
                                Shopping Tools
                                <i class="fa-solid fa-chevron-right mt-2"></i></button>

                        </li>
                        <li onclick="mobile_sec_nav()" class="nav-item  pb-xl-4 pb-md-4 pb-3 px-5 position-relative"
                            role="presentation">
                            <button class="nav-link m-auto nav_btn" id="shop-tab" data-bs-toggle="tab"
                                    data-bs-target="#shop"
                                    type="button" role="tab" aria-controls="shop" aria-selected="false"
                                    tabindex="-1">
                                Porsche Shop
                                <i class="fa-solid fa-arrow-up-right-from-square mt-2"></i></button>

                        </li>
                        <li onclick="mobile_sec_nav()" class="nav-item  pb-xl-4 pb-md-4 pb-3 px-5 position-relative"
                            role="presentation">
                            <button class="nav-link m-auto nav_btn" id="services-tab" data-bs-toggle="tab"
                                    data-bs-target="#services" type="button" role="tab" aria-controls="services"
                                    aria-selected="false" tabindex="-1">
                                Services
                                <i class="fa-solid fa-chevron-right mt-2"></i></button>

                        </li>
                        <li onclick="mobile_sec_nav()" class="nav-item  pb-xl-4 pb-md-4 pb-3 px-5 position-relative"
                            role="presentation">
                            <button class="nav-link m-auto nav_btn" id="Experience-tab" data-bs-toggle="tab"
                                    data-bs-target="#Experience" type="button" role="tab" aria-controls="Experience"
                                    aria-selected="false"
                                    tabindex="-1">
                                Experience
                                <i class="fa-solid fa-chevron-right mt-2"></i></button>

                        </li>
                        <li onclick="mobile_sec_nav()" class="nav-item  pb-xl-4 pb-md-4 pb-3 px-5 position-relative"
                            role="presentation">
                            <button class="nav-link m-auto nav_btn" id="Dealer-tab" data-bs-toggle="tab"
                                    data-bs-target="#Dealer"
                                    type="button" role="tab" aria-controls="Dealer" aria-selected="false"
                                    tabindex="-1">
                                Find a Dealer
                                <i class="fa-solid fa-chevron-right mt-2"></i></button>

                        </li>
                        <li onclick="mobile_sec_nav()" class="nav-item  pb-xl-4 pb-md-4 pb-3 px-5 position-relative"
                            role="presentation">
                            <button class="nav-link m-auto nav_btn" id="Porsche-tab" data-bs-toggle="tab"
                                    data-bs-target="#Porsche" type="button" role="tab" aria-controls="Porsche"
                                    aria-selected="false" tabindex="-1">
                                My Porsche
                                <i class="fa-solid fa-chevron-right mt-2"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-12 mobile_sec_nav p-0">
                    <div class="tab-content pt-5" id="myTabContent">
                        <div class=" tab-pane fade active show" id="home" role="tabpanel"
                             aria-labelledby="home-tab">
                            <div class="cars_tab d-grid justify-content-center">
                                <a href="#" onclick="toggleSecondNav()"><img src="assets/images/718.webp"></a>
                                <a href="#" onclick="toggleSecondNav()"><img src="assets/images/911.webp"></a>
                                <a href="#" onclick="toggleSecondNav()"><img src="assets/images/taycan.webp"></a>
                                <a href="#" onclick="toggleSecondNav()"><img src="assets/images/panamera.webp"></a>
                                <a href="#" onclick="toggleSecondNav()"><img src="assets/images/macan.webp"></a>
                                <a href="#" onclick="toggleSecondNav()"><img src="assets/images/cayenne.webp"></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Primary" role="tabpanel" aria-labelledby="Primary-tab">
                            <div class="d-grid justify-content-center tab_data">
                                <a href="#">Build Your Own</a>
                                <a href="#">Compare Models</a>
                                <a href="#">New & Used Inventory</a>
                                <a href="#">Current Vehicle Offers</a>
                                <a href="#">Certified Pre-Owned & Warranty</a>
                                <a href="#">Find Connect Services</a>
                                <a href="#">Porsche Financial Services</a>
                                <a href="#">E-Mobility & E-Performance</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="shop" role="tabpanel" aria-labelledby="shop-tab">
                            <div class="pt-md-4">

                            </div>
                        </div>
                        <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab">
                            <div class="d-grid justify-content-center tab_data">
                                <a href="#">Tequipment – Genuine Accessories</a>
                                <a href="#">Exclusive Manufaktur – Individual Vehicles</a>
                                <a href="#">Online Bill Payment</a>
                                <a href="#">Delivery Programs</a>
                                <a href="#">Porsche Protection Plan</a>
                                <a href="#">Porsche Auto Insurance</a>
                                <a href="#">Service & Maintenance</a>
                                <a href="#">Classic – Service & Parts</a>
                                <a href="#">Drive – Subscriptions & Rentals</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Experience" role="tabpanel" aria-labelledby="Experience-tab">
                            <div class="d-grid justify-content-center tab_data">
                                <a href="#">Motorsport</a>
                                <a href="#">Experience Center Atlanta</a>
                                <a href="#">Experience Center Los Angeles</a>
                                <a href="#">Track Experience Birmingham</a>
                                <a href="#">Travel Experience</a>
                                <a href="#">E-Zentrum</a>
                                <a href="#">Apps & Entertainment</a>
                                <a href="#">Christophorus – The Porsche Magazine</a>
                                <a href="#">Newsletter</a>
                                <a href="#">Porsche Clubs</a>
                                <a href="#">Golf</a>
                                <a href="#">Museum</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Dealer" role="tabpanel" aria-labelledby="Dealer-tab">
                            <div class="dealer_tab">
                                <input type="text" class="form-control m-auto w-75" placeholder="Zip code or town"
                                       id="validationTooltip05" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="dealer_tab">
                                <label class="form-label w-100 text-center mt-3">or</label>
                                <button type="button" class="btn_location w-75"><i
                                            class="fa-solid fa-location-crosshairs location_icon"></i>Use current
                                    location
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane fade px-5" id="Porsche" role="tabpanel" aria-labelledby="Porsche-tab">
                            <div class="btn_login">
                                <button type="button" class="btn btn-dark">Login</button>
                                <button type="button" class="btn btn-light">Discover more</button>
                                <p class="mt-3"><a href="#">Register Now</a> to discover the digital world of
                                    Porsche.
                                </p>
                            </div>
                            <div class="d-grid tab_data">
                                <a href="#">Overview</a>
                                <a href="#">Messages</a>
                                <a href="#">Saved Searches</a>
                                <a href="#">Saved Cars</a>
                                <a href="#">Profile settings</a>
                                <a href="#">Privacy</a>
                                <a href="#">Contact & Support</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sidebar2">
            <div class="row">
                <div class="col-lg-6 p-0 sidebar_tabs pt-5">
                    <ul class="nav nav-tabs d-block border-0 pt-5" id="myTab" role="tablist">
                        <li onclick="mobile_four_nav()"
                            class="nav-item  pb-xl-4 pb-md-4 pb-3 px-5 position-relative" role="presentation">
                            <button class=" nav-link active m-auto nav_btn" id="model_718-tab" data-bs-toggle="tab"
                                    data-bs-target="#model_718" type="button" role="tab" aria-controls="model_718"
                                    aria-selected="true">
                                <img src="assets/images/718.min.d92dc0fe91e67bd51120d91c5cd1eb2f.svg"
                                     class="models">
                                <i class="fa-solid fa-chevron-right mt-2"></i></button>
                        </li>
                        <li onclick="mobile_four_nav()" class="nav-item  pb-xl-4 pb-md-4 pb-3 px-5 position-relative"
                            role="presentation">
                            <button class="nav-link m-auto nav_btn" id="model_911-tab" data-bs-toggle="tab"
                                    data-bs-target="#model_911" type="button" role="tab" aria-controls="model_911"
                                    aria-selected="false"
                                    tabindex="-1">
                                <img src="assets/images/911.min.5c462658f9d472e90a139173414e8fdd.svg"
                                     class="models">
                                <i class="fa-solid fa-chevron-right mt-2"></i></button>
                        </li>
                        <li onclick="mobile_four_nav()" class="nav-item  pb-xl-4 pb-md-4 pb-3 px-5 position-relative"
                            role="presentation">
                            <button class="nav-link m-auto nav_btn" id="taycan-tab" data-bs-toggle="tab"
                                    data-bs-target="#taycan"
                                    type="button" role="tab" aria-controls="taycan" aria-selected="false"
                                    tabindex="-1">
                                <img src="assets/images/taycan.min.ba4e7c3cb86a78d626d4463b81be0f23.svg"
                                     class="models">
                                <i class="fa-solid fa-chevron-right mt-2"></i></button>
                        </li>
                        <li onclick="mobile_four_nav()" class="nav-item  pb-xl-4 pb-md-4 pb-3 px-5 position-relative"
                            role="presentation">
                            <button class="nav-link m-auto nav_btn" id="Panamera-tab" data-bs-toggle="tab"
                                    data-bs-target="#Panamera" type="button" role="tab" aria-controls="Panamera"
                                    aria-selected="false" tabindex="-1">
                                <img src="assets/images/panamera.min.d35913b252657f7c5cfcae74cfd61b26.svg"
                                     class="models">
                                <i class="fa-solid fa-chevron-right mt-2"></i></button>
                        </li>
                        <li onclick="mobile_four_nav()" class="nav-item  pb-xl-4 pb-md-4 pb-3 px-5 position-relative"
                            role="presentation">
                            <button class="nav-link m-auto nav_btn" id="Macan-tab" data-bs-toggle="tab"
                                    data-bs-target="#Macan" type="button" role="tab" aria-controls="Macan"
                                    aria-selected="false"
                                    tabindex="-1">
                                <img src="assets/images/macan.min.e38fbf34ed4f00066620901babd99af0.svg"
                                     class="models">
                                <i class="fa-solid fa-chevron-right mt-2"></i></button>
                        </li>
                        <li onclick="mobile_four_nav()" class="nav-item  pb-xl-4 pb-md-4 pb-3 px-5 position-relative"
                            role="presentation">
                            <button class="nav-link m-auto nav_btn" id="cayenne-tab" data-bs-toggle="tab"
                                    data-bs-target="#cayenne"
                                    type="button" role="tab" aria-controls="cayenne" aria-selected="false"
                                    tabindex="-1">
                                <img src="assets/images/cayenne.min.4026ba6b335cc98e10592f900cf731e1.svg"
                                     class="models">
                                <i class="fa-solid fa-chevron-right mt-2"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 p-0 mobile_four_nav">
                    <div class="tab-content pt-5" id="myTabContent">
                        <div class="tab-pane fade active show" id="model_718" role="tabpanel"
                             aria-labelledby="model_718-tab">
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-5"><i
                                            class="fa-solid fa-gear location_icon"></i>
                                    Build Your Porsche
                                </button>
                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-3"><i
                                            class="fa-solid fa-arrow-right-arrow-left location_icon"></i>Compare
                                </button>

                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-3">
                                    <i class="fa-sharp fa-solid fa-magnifying-glass location_icon"></i>
                                    New & Used Inventory
                                </button>

                            </div>
                            <div class="cars_tab d-grid justify-content-center">
                                <a href="#"><img src="assets/images/718-cayman.webp">
                                    <p>718 Cayman Models</p></a>
                                <a href="#"><img src="assets/images/718-boxster.webp">
                                    <p>718 Boxster Models</p></a>
                                <a href="#"><img src="assets/images/718-cayman-gt4-rs.webp">
                                    <p>718 Cayman GT4 RS</p></a>
                                <a href="#"><img src="assets/images/718-spyder-rs.webp">
                                    <p>718 Spyder RS</p></a>
                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 my-5">718 Models</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="model_911" role="tabpanel" aria-labelledby="model_911-tab">
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-5"><i
                                            class="fa-solid fa-gear location_icon"></i>
                                    Build Your Porsche
                                </button>
                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-3"><i
                                            class="fa-solid fa-arrow-right-arrow-left location_icon"></i>Compare
                                </button>

                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-3">
                                    <i class="fa-sharp fa-solid fa-magnifying-glass location_icon"></i>
                                    New & Used Inventory
                                </button>

                            </div>
                            <div class="cars_tab d-grid justify-content-center">
                                <a href="#"><img src="assets/images/911-carrera.webp">
                                    <p>911 Carrera Models</p></a>
                                <a href="#"><img src="assets/images/911-carrera-cabriolet.webp">
                                    <p>911 Carrera Cabriolet Models</p></a>
                                <a href="#"><img src="assets/images/911-targa.webp">
                                    <p>911 Targa Models</p></a>
                                <a href="#"><img src="assets/images/911-turbo.webp">
                                    <p>911 Turbo Models</p></a>
                                <a href="#"><img src="assets/images/911-turbo-cabriolet.webp">
                                    <p>9911-turbo-cabriolet Models</p></a>
                                <a href="#"><img src="assets/images/911-dakar.webp">
                                    <p>911-dakar Models</p></a>
                                <a href="#"><img src="assets/images/911-gt3.webp">
                                    <p>911-gt3 Models</p></a>
                                <a href="#"><img src="assets/images/911-gt3-rs.webp">
                                    <p>911-GT3-RS</p></a>
                                <a href="#"><img src="assets/images/911-sportclassic.webp">
                                    <p>911 Sport Classic</p></a>
                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 my-5">911 Models</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="taycan" role="tabpanel" aria-labelledby="taycan-tab">
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-5"><i
                                            class="fa-solid fa-gear location_icon"></i>
                                    Build Your Porsche
                                </button>
                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-3"><i
                                            class="fa-solid fa-arrow-right-arrow-left location_icon"></i>Compare
                                </button>

                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-3">
                                    <i class="fa-sharp fa-solid fa-magnifying-glass location_icon"></i>
                                    New & Used Inventory
                                </button>

                            </div>
                            <div class="cars_tab d-grid justify-content-center">
                                <a href="#"><img src="assets/images/taycan (1).webp">
                                    <p>Taycan Models</p></a>
                                <a href="#"><img src="assets/images/taycan-cross-turismo.webp">
                                    <p>Cross Turismo Models</p></a>
                                <a href="#"><img src="assets/images/taycan-sport-turismo.webp">
                                    <p>Sport Turismo Models</p></a>
                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 my-5">Taycan Models</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Panamera" role="tabpanel" aria-labelledby="Panamera-tab">
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-5"><i
                                            class="fa-solid fa-gear location_icon"></i>
                                    Build Your Porsche
                                </button>
                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-3"><i
                                            class="fa-solid fa-arrow-right-arrow-left location_icon"></i>Compare
                                </button>

                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-3">
                                    <i class="fa-sharp fa-solid fa-magnifying-glass location_icon"></i>
                                    New & Used Inventory
                                </button>

                            </div>
                            <div class="cars_tab d-grid justify-content-center">
                                <a href="#"><img src="assets/images/panamera (1).webp">
                                    <p>Panamera Models</p></a>
                                <a href="#"><img src="assets/images/panamera-sport-turismo.webp">
                                    <p>Panamera Sport Turismo Models</p></a>
                                <a href="#"><img src="assets/images/panamera-executive.webp">
                                    <p>Panamera Executive Models</p></a>
                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 my-5">Panamera Models</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Macan" role="tabpanel" aria-labelledby="Macan-tab">
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-5"><i
                                            class="fa-solid fa-gear location_icon"></i>
                                    Build Your Porsche
                                </button>
                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-3"><i
                                            class="fa-solid fa-arrow-right-arrow-left location_icon"></i>Compare
                                </button>

                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-3">
                                    <i class="fa-sharp fa-solid fa-magnifying-glass location_icon"></i>
                                    New & Used Inventory
                                </button>

                            </div>
                            <div class="cars_tab d-grid justify-content-center">
                                <a href="#"><img src="assets/images/macan (1).webp">
                                    <p>Macan Models</p></a>
                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 my-5">The Macan</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cayenne" role="tabpanel" aria-labelledby="cayenne-tab">
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-5"><i
                                            class="fa-solid fa-gear location_icon"></i>
                                    Build Your Porsche
                                </button>
                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-3"><i
                                            class="fa-solid fa-arrow-right-arrow-left location_icon"></i>Compare
                                </button>

                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 mt-3">
                                    <i class="fa-sharp fa-solid fa-magnifying-glass location_icon"></i>
                                    New & Used Inventory
                                </button>

                            </div>
                            <div class="cars_tab d-grid justify-content-center">
                                <a href="#"><img src="assets/images/cayenne (1).webp">
                                    <p>New Cayenne Models</p></a>
                                <a href="#"><img src="assets/images/cayenne-coupe.webp">
                                    <p>New Cayenne Coupé Models</p></a>
                                <a href="#"><img src="assets/images/cayenne-old.webp">
                                    <p>Cayenne models</p></a>
                                <a href="#"><img src="assets/images/cayenne-coupe-old.webp">
                                    <p>Cayenne Coupé Models</p></a>
                            </div>
                            <div class="dealer_tab">
                                <button type="button" class="btn_location w-75 my-5">Cayenne Models</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <i class="fas fa-close close_btn" onclick="closeNav()"></i>
    </div>

</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</body>
<script>
    function toggleleft() {
        $(".sidebar").animate({
            width: "toggle"
        });
        $(".blur-active").fadeIn("slow");
    }

    function toggleSecondNav() {
        $("#sidebar2").fadeIn("slow");
    }

    function closeNav() {
        $(".sidebar").animate({
            width: "toggle"
        });
        $("#sidebar2").fadeOut("slow");
        $(".blur-active").fadeOut("slow");
    }

    if ($(window).width() < 767) {
        function mobile_sec_nav() {
            $(".mobile_sec_nav").animate({
                width: "toggle"
            });
        }

        function mobile_four_nav() {
            $('.mobile_four_nav').animate({
                width: "toggle"
            });
        }
    }


</script>
</html>
