<?php
include "header.php";
?>
<style>
     

        /* Change background color on hover */
        .hover-div:hover {
            color: white;
        }

        .visible-span {
            display: none;
            color: red;
            font-weight: bold;
        }

        /* Make span visible on hover */
        .hover-div:hover .visible-span {
            display: inline;
        }
    </style>
<div class="ms-all-content ms-content-mobile-space pt-125">
        <main>
            <!-- About Area Start Here  -->
            <section class="ms-genres-area">
                <div class="ms-about-bg include__bg p-relative zindex-1 pt-130 pb-130"
                    data-background="assets/img/genres/genres-bg.jpg">
                    <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xxl-10">
                                <div class="ms-about-content text-center">
                                    <h2 class="ms-title2 white-text mb-30">Most popular Songs
                                    </h2>
                                    <p class="capitalize mb-65">
                                        Our collection of award-winning Popular bands for hire perform
                                        floor-filling
                                        songs
                                        in all genres, that <br> everyone loves. But don't leave it too late –
                                        the
                                        best
                                        bands book up early!
                                    </p>
                                    <div class="ms-genres-search">
                                        <div class="ms-banner__form two">
                                            <form action="#">
                                                <div class="ms-banner__from-inner two ms-bg-2">
                                                    <div class="ms-banner__form-select ms-nice-select">
                                                        <select>
                                                            <option value="1" selected disabled>What are you
                                                                looking for?</option>
                                                            <option value="2">Singers</option>
                                                            <option value="3">Bands & Group</option>
                                                            <option value="4">Tributes</option>
                                                            <option value="5">Solo Musicians</option>
                                                        </select>
                                                    </div>
                                                    <div class="ms-banner__form-select ms-nice-select">
                                                        <select>
                                                            <option value="1" selected disabled>When is your
                                                                event?</option>
                                                            <option value="2">This Week</option>
                                                            <option value="3">Next Week</option>
                                                            <option value="4">This Month</option>
                                                            <option value="4">Next Month</option>
                                                        </select>
                                                    </div>
                                                    <div class="ms-banner__form-select ms-nice-select ms-border-none">
                                                        <select>
                                                            <option value="1" selected disabled>Where is your
                                                                event?</option>
                                                            <option value="2">In Apartment</option>
                                                            <option value="3">In a Hall</option>
                                                            <option value="3">In a Resort</option>
                                                            <option value="3">In an Open Field</option>
                                                        </select>
                                                    </div>
                                                    <div class="banner__form-button">
                                                        <button class="ms-white-bg"><i class="flaticon-loupe"></i> Find
                                                            Acts</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Area End Here  -->

            <!-- Genres Listing Area Start  -->
            <div class="ms-genres-listing pt-130 pb-110">
                <div class="container">
                    <div class="ms-border2 pb-30 mb-65">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="ms-genres-filter ms-genres-select">
                                    <span class="ms-genres-text">Short by :</span>
                                    <select class="ms-nice-select float-none">
                                        <option value=" popular">Most popular</option>
                                        <option value="recent">Recent</option>
                                        <option value="most-view">Most View</option>
                                        <option value="trending">trending</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <ul class="nav nav-tabs border-0 ms-genres-tab justify-content-sm-end d-none d-xl-flex"
                                    id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home-tab-pane" type="button" role="tab"
                                            aria-controls="home-tab-pane" aria-selected="true">
                                            <span class="ms-genres-tab-bar">
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </button>
                                    </li>
                                        
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="genres_details.php">
                                                <img src="assets/img/artis/arijit.webp" alt="genres img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://www.youtube.com/watch?v=Rf9flQISwok"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>
                                        </div>
                                        <div class="ms-genres-content p-relative hover-div">
                                            <span class=" visible-span ms-genres-star active"><i class="fa-light fa fa-play"></i></span>
                                            <h4 class="ms-genres-title"><a href="genres-details.html">Arijit Singh</a></h4>
                                            <p class="mb-30">Arijit Singh is an Indian playback singer known for his heartfelt and romantic songs.</p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="genres_details.php">
                                                <img src="assets/img/artis/arrehman.webp" alt="genres img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://www.youtube.com/watch?v=Rf9flQISwok"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>
                                        </div>
                                        <div class="ms-genres-content p-relative hover-div">
                                            <span class=" visible-span ms-genres-star active"><i class="fa-light fa fa-play"></i></span>
                                            <h4 class="ms-genres-title"><a href="genres-details.html">AR Rahman</a>
                                            </h4>
                                            <p class="mb-30">A R Rahman, born as A. S. Dileep Kumar on January 6, 1967, in Chennai, Tamil Nadu, is a name that resonates with musical brilliance across the globe.</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="genres_details.php">
                                                <img src="assets/img/artis/badssha.webp" alt="genres img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://www.youtube.com/watch?v=Rf9flQISwok"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>
                                        </div>
                                        <div class="ms-genres-content p-relative  hover-div">
                                            <span class="visible-span ms-genres-star active"><i class="fa-light fa-star"></i></span>
                                            <h4 class="ms-genres-title"><a href="genres-details.html">Badshah</a></h4>
                                            <p class="mb-30">Badshah’s real name is Aditya Prateek Singh Sisodia, and he is an Indian rapper, singer, songwriter, and producer. </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="genres_details.php">
                                                <img src="assets/img/artis/pritam.webp" alt="genres img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://www.youtube.com/watch?v=Rf9flQISwok"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>
                                        </div>
                                        <div class="ms-genres-content p-relative  hover-div">
                                            <span class="visible-span ms-genres-star active"><i class="fa-light fa-star"></i></span>
                                            <h4 class="ms-genres-title"><a href="genres-details.html">Pritam</a></h4>
                                            <p class="mb-30">Pritam Chakraborty known mononymously as Pritam, is an Indian composer, instrumentalist, guitarist, music producer and singer from Kolkata, India.</p>
                                            
                                    </div>
                                </div>
                                
                              

                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="basic-pagination">
                                        <nav>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fas fa-long-arrow-left"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">01</a>
                                                </li>
                                                <li>
                                                    <span class="current">02</span>
                                                </li>
                                                <li>
                                                    <a href="#">03</a>
                                                </li>
                                                <li>
                                                    <a href="#">...</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fas fa-long-arrow-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6">
                                    <div class="ms-genres-item mb-25">
                                        <div class="ms-genres-img ms-br-15 fix w-img mb-30">
                                            <a href="genres_details.php">
                                                <img src="assets/img/artis/arijit.webp" alt="genres img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://www.youtube.com/watch?v=Rf9flQISwok"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>
                                        </div>
                                        <div class="ms-genres-content p-relative">
                                            <span class="ms-genres-star"><i class="fa-light fa-star"></i></span>
                                            <h4 class="ms-genres-title"><a href="genres_details.php">Arijit Singh</a></h4>
                                            <p class="mb-30">Arijit Singh is an Indian playback singer known for his heartfelt and romantic songs.</p>
                                            <div class="ms-fun-brand-bottom ms-genres-rating">
                                                <div class="ms-fun-brand-location">
                                                    <a href="https://www.google.com/maps" target="_blank"> <i
                                                            class="flaticon-pin"></i>West Bengal</a>
                                                </div>
                                                <div class="ms-fun-brand-rating">
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <span>(85)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6">
                                    <div class="ms-genres-item mb-25">
                                        <div class="ms-genres-img ms-br-15 fix w-img mb-30">
                                            <a href="genres_details.php">
                                                <img src="assets/img/artis/arrehman.webp" alt="genres img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://www.youtube.com/watch?v=Rf9flQISwok"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>
                                        </div>
                                        <div class="ms-genres-content p-relative">
                                            <span class="ms-genres-star active"><i class="fa-light fa-star"></i></span>
                                            <h4 class="ms-genres-title"><a href="genres_details.php">AR Rahman</a>
                                            </h4>
                                            <p class="mb-30">A R Rahman is a name with musical brilliance across the globe.</p>
                                            <div class="ms-fun-brand-bottom ms-genres-rating">
                                                <div class="ms-fun-brand-location">
                                                    <a href="https://www.google.com/maps" target="_blank"> <i
                                                            class="flaticon-pin"></i>Tamil Nadu</a>
                                                </div>
                                                <div class="ms-fun-brand-rating">
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star unrate"></i>
                                                    <span>(120)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6">
                                    <div class="ms-genres-item mb-25">
                                        <div class="ms-genres-img ms-br-15 fix w-img mb-30">
                                            <a href="genres_details.php">
                                                <img src="assets/img/artis/badssha.webp" alt="genres img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://www.youtube.com/watch?v=Rf9flQISwok"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>
                                        </div>
                                        <div class="ms-genres-content p-relative">
                                            <span class="ms-genres-star"><i class="fa-light fa-star"></i></span>
                                            <h4 class="ms-genres-title"><a href="genres_details.php">Badshah</a></h4>
                                            <p class="mb-30">Badshah’s real name is Aditya Prateek Singh Sisodia, and he is an Indian rapper and producer. </p>
                                            <div class="ms-fun-brand-bottom ms-genres-rating">
                                                <div class="ms-fun-brand-location">
                                                    <a href="https://www.google.com/maps" target="_blank"> <i
                                                            class="flaticon-pin"></i>Punjab</a>
                                                </div>
                                                <div class="ms-fun-brand-rating">
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <span>(90)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6">
                                    <div class="ms-genres-item mb-25">
                                        <div class="ms-genres-img ms-br-15 fix w-img mb-30">
                                            <a href="genres_details.php">
                                                <img src="assets/img/artis/pritam.webp" alt="genres img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://www.youtube.com/watch?v=Rf9flQISwok"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>
                                        </div>
                                        <div class="ms-genres-content p-relative">
                                            <span class="ms-genres-star"><i class="fa-light fa-star"></i></span>
                                            <h4 class="ms-genres-title"><a href="genres_details.php">Pritam</a></h4>
                                            <p class="mb-30">Pritam Chakraborty known mononymously as Pritam, is  instrumentalist, guitarist.</p>
                                            <div class="ms-fun-brand-bottom ms-genres-rating">
                                                <div class="ms-fun-brand-location">
                                                    <a href="https://www.google.com/maps" target="_blank"> <i
                                                            class="flaticon-pin"></i>Kolkata</a>
                                                </div>
                                                <div class="ms-fun-brand-rating">
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star unrate"></i>
                                                    <span>(30)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6">
                                    <div class="ms-genres-item mb-25">
                                        <div class="ms-genres-img ms-br-15 fix w-img mb-30">
                                            <a href="genres_details.php">
                                                <img src="assets/img/artis/sonunigam.webp" alt="genres img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://www.youtube.com/watch?v=Rf9flQISwok"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>
                                        </div>
                                        <div class="ms-genres-content p-relative">
                                            <span class="ms-genres-star"><i class="fa-light fa-star"></i></span>
                                            <h4 class="ms-genres-title"><a href="genres_details.php">Sonu Nigam</a></h4>
                                            <p class="mb-30">There have been innumerous Bollywood singers who have smile and cry at the same time.</p>
                                            <div class="ms-fun-brand-bottom ms-genres-rating">
                                                <div class="ms-fun-brand-location">
                                                    <a href="https://www.google.com/maps" target="_blank"> <i
                                                            class="flaticon-pin"></i>Haryana</a>
                                                </div>
                                                <div class="ms-fun-brand-rating">
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <span>(60)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6">
                                    <div class="ms-genres-item mb-25">
                                        <div class="ms-genres-img ms-br-15 fix w-img mb-30">
                                            <a href="genres_details.php">
                                                <img src="assets/img/artis/diljit.webp" alt="genres img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://www.youtube.com/watch?v=Rf9flQISwok"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>
                                        </div>
                                        <div class="ms-genres-content p-relative">
                                            <span class="ms-genres-star"><i class="fa-light fa-star"></i></span>
                                            <h4 class="ms-genres-title"><a href="genres_details.php">Diljit Dosanjh</a>
                                            </h4>
                                            <p class="mb-30"> Diljit has garnered immense popularity and acclaim through his music and acting skills.</p>
                                            <div class="ms-fun-brand-bottom ms-genres-rating">
                                                <div class="ms-fun-brand-location">
                                                    <a href="https://www.google.com/maps" target="_blank"> <i
                                                            class="flaticon-pin"></i>Panjab</a>
                                                </div>
                                                <div class="ms-fun-brand-rating">
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star unrate"></i>
                                                    <span>(90)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="basic-pagination">
                                        <nav>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fas fa-long-arrow-left"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">01</a>
                                                </li>
                                                <li>
                                                    <span class="current">02</span>
                                                </li>
                                                <li>
                                                    <a href="#">03</a>
                                                </li>
                                                <li>
                                                    <a href="#">...</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fas fa-long-arrow-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Genres Listing Area End  -->

            <!-- FAQ area start -->
            <section class="ms-faq-area bd-accordion-fix ms-bg-2 pt-120 pb-110 fix">
                <div class="container">
                    <div class="row align-items-center mb-15">
                        <div class="col-xl-7 col-lg-10">
                            <div class="section__title-wrapper mb-40">
                                <h2 class="section__title mb-40">
                                    Have questions? We have answers!
                                </h2>
                                <p>Our hand-picked acts will guarantee you fantastic wedding <br> entertainment
                                    for
                                    each
                                    part. We'll provide help and support 24
                                    hours a <br> day, 7 days a week, right up until</p>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="ms-faq-tab mb-40">
                                <nav>
                                    <div class="nav nav-tabs mb-tab-button-style justify-content-xl-end" id="nav-tab"
                                        role="tablist">
                                        <button class="nav-link active" id="nav-faq-1-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-faq-1" type="button" role="tab"
                                            aria-controls="nav-faq-1" aria-selected="true">Musical Acts</button>
                                        <button class="nav-link" id="nav-faq-2-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-faq-2" type="button" role="tab"
                                            aria-controls="nav-faq-2" aria-selected="false">Entertainers</button>
                                        <button class="nav-link" id="nav-faq-3-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-faq-3" type="button" role="tab"
                                            aria-controls="nav-faq-3" aria-selected="false">Event
                                            Services</button>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-faq-1" role="tabpanel"
                                    aria-labelledby="nav-faq-1-tab" tabindex="0">
                                    <div class="ms-faq-wrap ms-faq-wrap2 ms-faq-2column">
                                        <div class="accordion p-relative" id="accordionExample">
                                            <div class="ms-faq-group">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">How do
                                                            event
                                                            planners find me on Musicly?</button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Do I have to pay to receive or respond to leads?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Why should I use Musicly over other sites?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ms-faq-group">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFour">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                            aria-expanded="true" aria-controls="collapseFour">How
                                                            many leads
                                                            and bookings can I expect to get?</button>
                                                    </h2>
                                                    <div id="collapseFour" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFour"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFive">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                            aria-expanded="false" aria-controls="collapseFive">
                                                            How do I get paid for my gigs?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFive" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFive"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                            aria-expanded="false" aria-controls="collapseSix">
                                                            What type of events are booked on Musicly?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseSix" class="accordion-collapse collapse"
                                                        aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-faq-2" role="tabpanel"
                                    aria-labelledby="nav-faq-2-tab" tabindex="0">
                                    <div class="ms-faq-wrap ms-faq-wrap2 ms-faq-2column">
                                        <div class="accordion p-relative" id="accordionExample2">
                                            <div class="ms-faq-group">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSeven">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                            aria-expanded="true" aria-controls="collapseSeven">How do
                                                            event
                                                            planners find me on Musicly?</button>
                                                    </h2>
                                                    <div id="collapseSeven" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingSeven"
                                                        data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingEight">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                                            aria-expanded="false" aria-controls="collapseEight">
                                                            Do I have to pay to receive or respond to leads?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseEight" class="accordion-collapse collapse"
                                                        aria-labelledby="headingEight"
                                                        data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingNine">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                            aria-expanded="false" aria-controls="collapseNine">
                                                            Why should I use Musicly over other sites?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseNine" class="accordion-collapse collapse"
                                                        aria-labelledby="headingNine"
                                                        data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ms-faq-group">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                            aria-expanded="true" aria-controls="collapseTen">How
                                                            many leads
                                                            and bookings can I expect to get?</button>
                                                    </h2>
                                                    <div id="collapseTen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTen"
                                                        data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingEleven">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseEleven"
                                                            aria-expanded="false" aria-controls="collapseEleven">
                                                            How do I get paid for my gigs?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseEleven" class="accordion-collapse collapse"
                                                        aria-labelledby="headingEleven"
                                                        data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwelve">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwelve"
                                                            aria-expanded="false" aria-controls="collapseTwelve">
                                                            What type of events are booked on Musicly?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwelve" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwelve"
                                                        data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-faq-3" role="tabpanel"
                                    aria-labelledby="nav-faq-3-tab" tabindex="0">
                                    <div class="ms-faq-wrap ms-faq-wrap2 ms-faq-2column">
                                        <div class="accordion p-relative" id="accordionExample3">
                                            <div class="ms-faq-group">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThirteen">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThirteen"
                                                            aria-expanded="true" aria-controls="collapseThirteen">How do
                                                            event
                                                            planners find me on Musicly?</button>
                                                    </h2>
                                                    <div id="collapseThirteen" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingThirteen"
                                                        data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFourteen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFourteen"
                                                            aria-expanded="false" aria-controls="collapseFourteen">
                                                            Do I have to pay to receive or respond to leads?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFourteen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFourteen"
                                                        data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFifteen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFifteen"
                                                            aria-expanded="false" aria-controls="collapseFifteen">
                                                            Why should I use Musicly over other sites?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFifteen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFifteen"
                                                        data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ms-faq-group">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSixteen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseSixteen"
                                                            aria-expanded="true" aria-controls="collapseSixteen">How
                                                            many
                                                            leads
                                                            and bookings can I expect to get?</button>
                                                    </h2>
                                                    <div id="collapseSixteen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingSixteen"
                                                        data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSeventeen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseSeventeen" aria-expanded="false"
                                                            aria-controls="collapseSeventeen">
                                                            How do I get paid for my gigs?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseSeventeen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingSeventeen"
                                                        data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingEighteen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseEighteen"
                                                            aria-expanded="false" aria-controls="collapseEighteen">
                                                            What type of events are booked on Musicly?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseEighteen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingEighteen"
                                                        data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">We do not charge for leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a small
                                                            service fee.
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
                </div>
            </section>
            <!-- FAQ area end -->

            <!-- Partner Area Start Here  -->
            <div class="ms-partner-area fix pt-130 pb-130">
                <div class="container">
                    <div class="swiper-container ms-partner-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-01.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-02.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-03.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-04.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-05.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-04.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-01.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-02.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-03.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-04.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-05.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-04.png" alt="partner image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner Area End Here  -->

        </main>
        <?php
    include "footer.php"
    ?>