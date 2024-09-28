<!doctype html>
<html class="no-js" lang="zxx">

<?php
session_start();
?>
<!-- Mirrored from html.topylo.com/musicly-prev/musicly/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Sep 2024 05:46:07 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Musical Community</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.svg in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/app/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/app/css/nice-select.css">
    <link rel="stylesheet" href="assets/app/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/app/css/slick.css">
    <link rel="stylesheet" href="assets/app/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/app/css/backtotop.css">
    <link rel="stylesheet" href="assets/app/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/app/css/flaticon_musicly.css">
    <link rel="stylesheet" href="assets/app/css/fontawesome-pro.css">
    <link rel="stylesheet" href="assets/app/css/spacing.css">
    <link rel="stylesheet" href="assets/app/css/main.css">
</head>

<body>

    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

    <!-- Preloader start -->
    <div id="preloader">
        <div class="line-loader">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.php">
                                <img src="assets/img/logo/logo.svg" alt="logo">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="offcanvas__user mb-30 d-xxl-none">
                        
                            <div class="user__acount">
                                <span>
                                    <a href="javascript:void(0)"><i class="flaticon-user"></i></a>
                                </span>
                                <div class="user__name-mail">
                                    <h4 class="user__name"><a href="javascript:void(0)"><?php
                                                                                        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                                                                                            echo "No Login";
                                                                                        } else {

                                                                                            echo $_SESSION['username'];
                                                                                        }

                                                                                        ?></a></h4>
                                </div>
                            </div>
                       
                    </div>
                    <div class="offcanvas__search mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search Here">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="hr-1 mt-30 mb-30 d-xl-block"></div>
                    <div class="mobile-menu2 fix mb-30  d-xl-block"></div>
                    <div class="hr-1 mt-30 mb-30 d-xl-block"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area start -->

    <!-- Header area start -->
    <header>
        <div id="header-sticky2"
            class="ms-header2 ms-header-transparent zindex-500 transition-03 ms-header-fixed mt-40">
            <div class="ms-header2-wrap d-flex align-items-center justify-content-between">
                <div class="ms-header2-item">
                    <div class="ms-header2-logo pt-5 pb-5">
                        <a href="index.php"><img src="assets/img/logo/logo.svg" alt="logo"></a>
                    </div>
                </div>
                <div class="ms-header2-item d-none d-xl-block">
                    <div class="ms-header2-singer-wrap d-flex align-items-center">

                        <div class="ms-header2-song">
                            <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                            <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                                <div class="jp-type-playlist">
                                    <div class="ms-header2-singer">
                                        <div class="ms-header2-singer-img">
                                            <a href="#"><img src="assets/img/header/diljit.webp" alt="singer"></a>
                                        </div>
                                        <div class="ms-header2-singer-text">
                                            <div class="jp-title"></div>
                                        </div>
                                    </div>
                                    <div class="jp-gui">

                                        <div class="jp-toggles d-none">
                                            <button class="jp-repeat jp-btn" tabindex="0"><i
                                                    class="fa fa-repeat"></i></button>
                                            <button class="jp-shuffle jp-btn" tabindex="0"><i
                                                    class="fa fa-random"></i></button>
                                        </div>
                                        <div class="jp-controls-holder">
                                            <div class="jp-controls">
                                                <button class="jp-previous jp-btn" tabindex="0"><i
                                                        class="fa fa-backward"></i></button>
                                                <button class="jp-play jp-btn" tabindex="0"><i
                                                        class="fa fa-play"></i></button>
                                                <button class="jp-stop jp-btn d-none" tabindex="0"><i
                                                        class="fa fa-stop"></i></button>
                                                <button class="jp-next jp-btn" tabindex="0"><i
                                                        class="fa fa-forward"></i></button>
                                            </div>
                                            <div class="jp-times">
                                                <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                                            </div>
                                            <div class="jp-progress">
                                                <div class="jp-seek-bar">
                                                    <div class="jp-play-bar"></div>
                                                </div>
                                            </div>
                                            <div class="jp-times">
                                                <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                                            </div>

                                        </div>
                                        <div class="jp-volume-controls">
                                            <button class="jp-mute jp-btn" tabindex="0"><i
                                                    class="fa fa-volume"></i></button>
                                            <button class="jp-volume-max d-none" tabindex="0">max
                                                volume</button>
                                            <div class="jp-volume-bar">
                                                <div class="jp-volume-bar-value"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp-playlist d-none">
                                        <ul>
                                            <li>&nbsp;</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-header2-item">
                    <div class="ms-header2-right d-flex align-items-center">
                        <div class="ms-dot-menu ms-cp d-flex align-items-center">
                            <div class="sidebar__toggle lh-1">
                                <div class="ms-dot-list">
                                    <span></span>
                                    <span></span>
                                </div>
                                <span class="ms-dot-menu-text">Menu</span>
                            </div>
                        </div>
                        <?php
                        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                        ?>
                            <div class="ms-header2-profile ml-20">
                                <a class="ms-profile-btn " href="login.php"><i class="flaticon-user"></i></a>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="ms-header2-profile ml-20">
                                <a class="ms-profile-btn ms-model2-show" href="#"><i class="flaticon-user"></i></a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="ms-header2-item d-none">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu main-menu-ff-space">
                            <nav id="mobile-menu2">
                                <ul>
                                    <li class="has-dropdown">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="about.php">About us</a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="#">Explore</a>
                                        <ul class="submenu">
                                            <li><a href="explore.php">Albums</a></li>
                                            <li><a href="song.php">Song</a></li>
                                            <li><a href="playlist.php">Playlist</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="event.php">Event</a>
                                    </li>
                                    <li>
                                        <a href="Collaboration.php">Collaboration</a>
                                    </li>


                                    <li>
                                        <a href="contact.php"> Help Center</a>
                                    </li>

                                    <li>
                                        <a href="chat.php"> Chat With Musicly</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- for wp -->
                            <div class="header__hamburger ml-50 d-none">
                                <button type="button" class="hamburger-btn offcanvas-open-btn">
                                    <span>01</span>
                                    <span>01</span>
                                    <span>01</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="modal fade ms-model1 zindex-99999" id="ms-model2">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="ms-product-modal-wrapper p-relative">
                        <button type="button" class="ms-model-close ms-pclose-btn "><i
                                class="fa-sharp fa-solid fa-xmark"></i></button>

                        <div class="container" style="margin-top:100px ;">
                            <section class="ms-team-details-area fix pb-80">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-8">
                                            <div class="ms-team-img-details " style="height: 200px; width:auto;">
                                                <img src="temp/assets/img/popular/popular-04.png" alt="team image">

                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-12">
                                            <div class="ms-team-item-details mb-50">
                                                <h4 class="ms-team-role mb-30">Paras Sapariya</h4>
                                                <p>Given the legendarily debauched life of the Rolling Stones guitarist, it’s a
                                                    wonder that he can remember enough of it to fill a book.</p>
                                                <form action="logout.php" method="POST">
                                                    <span><input type="submit" class="btn btn-primary play-button" value="Logout"></span>
                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade ms-model1 zindex-99999" id="ms-model">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="ms-product-modal-wrapper p-relative">
                        <button type="button" class="ms-model-close ms-pclose-btn "><i
                                class="fa-sharp fa-solid fa-xmark"></i></button>

                        <div class="container" style="margin-top:100px ;">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="ms-product-table-wrap mb-60">
                                        <div class="ms-product-table mb-50">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Album</th>
                                                        <th>Date added</th>
                                                        <th>Duration</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="ms-product-name-flex"><a href="shop-details.html">
                                                                <img src="assets/img/playlist/barish.jpg" alt="product">
                                                                <h6 class="ms-product-title">Barrishein</h6>
                                                            </a>
                                                        </td>
                                                        <td>Barrishein</td>
                                                        <td>March 22, 2023</td>
                                                        <td>3 : 27</td>
                                                        <td>
                                                            <a class="ms-table-action" href="#"><i class="flaticon-bin"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ms-product-name-flex"><a href="shop-details.html">
                                                                <img src="assets/img/playlist/kinnasona.jpg" alt="product">
                                                                <h6 class="ms-product-title">Kinna Sona</h6>
                                                            </a>
                                                        </td>
                                                        <td>Kinna Sona</td>
                                                        <td>March 23, 2023</td>
                                                        <td>2 : 53</td>
                                                        <td>


                                                            <a class="ms-table-action" href="#"><i class="flaticon-bin"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ms-product-name-flex"><a href="shop-details.html">
                                                                <img src="assets/img/playlist/khoobshurat.jpg" alt="product">
                                                                <h6 class="ms-product-title">Khoobsurat</h6>
                                                            </a>
                                                        </td>
                                                        <td>Khoobsurat</td>
                                                        <td>March 24, 2023</td>
                                                        <td>3 : 40</td>
                                                        <td>


                                                            <a class="ms-table-action" href="#"><i class="flaticon-bin"></i></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header area end -->