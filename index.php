<?php
include "header.php";
?>



<?php
$songs = [
    [
        "number" => "01",
        "image" => "assets/img/brand-song/01.png",
        "title" => "Arcade Fire",
        "description" => "Canadian rock group"
    ],
    [
        "number" => "02",
        "image" => "assets/img/brand-song/02.png",
        "title" => "Beastie Boys",
        "description" => "American hip-hop"
    ],
    [
        "number" => "03",
        "image" => "assets/img/brand-song/03.png",
        "title" => "Blondie",
        "description" => "American rock group"
    ],
    [
        "number" => "04",
        "image" => "assets/img/brand-song/04.png",
        "title" => "Black Sabbath",
        "description" => "British rock group"
    ],
    [
        "number" => "05",
        "image" => "assets/img/brand-song/05.png",
        "title" => "Boy II Men",
        "description" => "Hong Kong Folk"
    ],
    [
        "number" => "06",
        "image" => "assets/img/brand-song/06.png",
        "title" => "The Coasters",
        "description" => "Canada band group"
    ],
    [
        "number" => "07",
        "image" => "assets/img/brand-song/07.png",
        "title" => "The Flamingos",
        "description" => "Chicago rock group"
    ]
];

?>
<main>


    <!-- Banner Area Start Here  -->
    <section class="ms-banner2-area fix">
        <div class="ms-banner2-wrap ms-banner2-height p-relative ms-bg"
            data-background="assets/img/banner/banner-thumb-02.jpg">
            <div class="ms-banner2-shape p-absolute"></div>
            <div class="ms-banner2-cover-img p-absolute">
                <img src="assets/img/banner/banner-thumb-03.png" alt="banner">
            </div>
            <h2 class="ms-banner2-title">Musicly</h2>
            <div class="ms-banner2-video mb-10">
                <a href="https://www.youtube.com/watch?v=Rf9flQISwok" class="popup-video ms-banner2-video-btn">
                    <img class="ms-rotation-360" src="assets/img/banner/banner-border.png" alt="banner">
                    <span>play</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Banner Area End Here  -->

    <!-- Find Musician Area Start Here  -->
    <section class="ms-find-musician pt-70 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="ms-find-musician-wrap">
                        <h2 class="ms-find-musician-title mb-65 text-center bd-title-anim">
                            Welcome to the Musician:
                            <span class="ms-text-gradient1">Connect </span>
                            <span class="ms-color-1">or</span>
                            <span class="ms-text-gradient2">Collaborate</span>,
                            <br>
                            <span class="ms-text-gradient1">Create!</span>
                        </h2>
                        <div class="ms-banner__form two bdFadeUp">
                            <form action="#">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Find Musician Area End Here  -->

    <!-- Brand Song Area Start Here  -->
    <section class="ms-song-area pb-130">
        <div class="container">
            <div class="ms-song-border pt-65 pb-65 bdFadeUp">
                <div class="swiper-container ms-song2-active fix">
                    <div class="swiper-wrapper">
                        <?php foreach ($songs as $song): ?>
                            <div class="swiper-slide">
                                <div class="ms-song-item">
                                    <div class="ms-song-img p-relative">
                                        <a href="genres_details.php">
                                            <img src="<?php echo $song['image']; ?>" alt="brand-song">
                                        </a>
                                        <span class="ms-song-num"><?php echo $song['number']; ?></span>
                                    </div>
                                    <div class="ms-song-content">
                                        <h3 class="ms-song-title">
                                            <a href="genres_details.php"><?php echo $song['title']; ?></a>
                                        </h3>
                                        <span class="ms-song-text"><?php echo $song['description']; ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Brand Song Area End Here  -->

    <!-- work area start -->

    <!-- work area end -->

    <!-- Trending area start -->
    <section class="trending__area p-relative fix pt-130 include__bg pb-130"
        data-background="assets/img/trending/tranding-bg.png">
        <div class="ms-overlay ms-overlay4 p-absolute"></div>
        <div class="container">
            <div class="row align-items-end mb-25 bdFadeUp ">
                <div class="col-lg-8">
                    <div class="section__title-wrapper mb-40 bd-title-anim">
                        <span class="section__subtitle">Trending Genres</span>
                        <h2 class="section__title"><span class="animated-underline active">Most
                                Trending</span>
                            Albums</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trending-btn mb-40 d-flex justify-content-lg-end">
                        <a class="border__btn zindex-5" href="explore.php">View All Albums</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ms-trending-active-wrap bdFadeUp">
            <div class="swiper-container ms-trending-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">GLORY</span>
                            <div class="trending__price">
                            </div>
                            <div class="ms-trending2-img w-img">
                                <a href="genres_details.php"><img src="assets/img/playlist/lofi1.jpg"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="assets/img/trending/trending-shape.png" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="genres_details.php">Party bands for
                                        hire</a>
                                    <a class="ms-round-btn popup-image" href="assets/img/trending/07.jpg"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Musicly</span>
                            <div class="trending__price">
                            </div>
                            <div class="ms-trending2-img w-img">
                                <a href="genres_details.php"><img src="assets/img/trending/08.jpg"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="assets/img/trending/trending-shape.png" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="genres_details.php">Party bands for
                                        hire</a>
                                    <a class="ms-round-btn popup-image" href="assets/img/trending/08.jpg"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Musicly</span>
                            <div class="trending__price">
                            </div>
                            <div class="ms-trending2-img w-img">
                                <a href="genres_details.php"><img src="assets/img/trending/02.jpg"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="assets/img/trending/trending-shape.png" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="genres_details.php">Party bands for
                                        hire</a>
                                    <a class="ms-round-btn popup-image" href="assets/img/trending/02.jpg"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Musicly</span>
                            <div class="trending__price">
                            </div>
                            <div class="ms-trending2-img w-img">
                                <a href="genres_details.php"><img src="assets/img/trending/10.jpg"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="assets/img/trending/trending-shape.png" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="genres_details.php">Party bands for
                                        hire</a>
                                    <a class="ms-round-btn popup-image" href="assets/img/trending/10.jpg"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Musicly</span>
                            <div class="trending__price">
                            </div>
                            <div class="ms-trending2-img w-img">
                                <a href="genres_details.php"><img src="assets/img/trending/11.jpg"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="assets/img/trending/trending-shape.png" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="genres_details.php">Party bands for
                                        hire</a>
                                    <a class="ms-round-btn popup-image" href="assets/img/trending/11.jpg"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Trending area start -->

    <!-- Function Brand Area Start Here  -->
    <section class="ms-fun-brand pb-130 pt-130">
        <div class="container">
            <div class="row justify-content-center bdFadeUp">
                <div class="col-xl-7">
                    <div class="section__title-wrapper mb-65 text-center bd-title-anim">
                        <span class="section__subtitle">Function Bands</span>
                        <h2 class="section__title">
                            our <span class="animated-underline active">most popular </span> artists
                        </h2>
                    </div>
                </div>
            </div>
            <div class="ms-fun-brand-wrap ms-fun-brand-bb pb-70 bdFadeUp">
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres_details.php"><img src="assets/img/artis/arijit.webp"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres_details.php">Arijit Singh</a>
                            </h3>
                            <span class="ms-fun-brand-subtitle">Singer</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="#" target="_blank"> <i
                                    class="flaticon-pin"></i>West Bengal</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                        </div>
                    </div>
                </div>

                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres_details.php"><img src="assets/img/artis/arrehman.webp"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres_details.php">AR Rahman</a>
                            </h3>
                            <span class="ms-fun-brand-subtitle">indian hip-hop</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="#" target="_blank"> <i
                                    class="flaticon-pin"></i>Tamil Nadu</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                        </div>
                    </div>
                </div>
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres_details.php"><img src="assets/img/artis/badssha.webp"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres_details.php">Badshah</a>
                            </h3>
                            <span class="ms-fun-brand-subtitle">American hip-hop</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="#" target="_blank"> <i
                                    class="flaticon-pin"></i>Delhi </a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star unrate"></i>
                        </div>
                    </div>
                </div>
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres_details.php"><img src="assets/img/artis/pritam.webp"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres_details.php">Pritam</a></h3>
                            <span class="ms-fun-brand-subtitle">indian romentic music</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="#" target="_blank"> <i class="flaticon-pin"></i>Pune</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Function Brand Area End Here  -->



    <!-- Event Area Start Here  -->
    <section class="ms-event2-area include__bg zindex-1 p-relative pt-140 pb-105"
        data-background="assets/img/event/event-bg-3.png">
        <div class="ms-overlay ms-overlay1 zindex--1"></div>
        <div class="container">
            <div class="row justify-content-center mb-25 bdFadeUp">
                <div class="col-xl-6">
                    <div class="ms-event2-top text-center">
                        <div class="ms-event2 mb-40">
                            <a href="https://www.youtube.com/watch?v=Rf9flQISwok"
                                class="ms-round2-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                        <div class="section__title-wrapper mb-40 bd-title-anim">
                            <span class="section__subtitle">Special Events</span>
                            <h2 class="section__title">Special <span class="animated-underline active">
                                    event
                                    coming</span>
                                up
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bdFadeUp">
                <div class="col-lg-6">
                    <div class="ms-event2-item mb-25">
                        <h3 class="ms-event-title"><a href="event-details.html">Wedding entertainment
                                ideas</a></h3>
                        <p class="ms-event-text">Our hand-picked acts will guarantee you fantastic wedding
                            entertainment for each part.
                            We'll provide help and support 24 hours a day, 7 days a week, right up until</p>
                        <div class="ms-event-inner">
                            <div class="ms-event-location">
                                <a href="#" target="_blank" tabindex="0"><i
                                        class="flaticon-pin"></i>Chicago</a>
                            </div>
                            <div class="ms-event-date">
                                <span>7:00 PM, Saturday, February 18, 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ms-event2-item mb-25">
                        <h3 class="ms-event-title"><a href="event-details.html">Corporate entertainment
                                ideas</a>
                        </h3>
                        <p class="ms-event-text">Our hand-picked acts will guarantee you fantastic wedding
                            entertainment for each part.
                            We'll provide help and support 24 hours a day, 7 days a week, right up until</p>
                        <div class="ms-event-inner">
                            <div class="ms-event-location">
                                <a href="#" target="_blank" tabindex="0"><i
                                        class="flaticon-pin"></i>Ohio</a>
                            </div>
                            <div class="ms-event-date">
                                <span>9:00 PM, Saturday, February 25, 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ms-event2-item mb-25">
                        <h3 class="ms-event-title"><a href="event-details.html">Corporate entertainment
                                ideas</a>
                        </h3>
                        <p class="ms-event-text">Our hand-picked acts will guarantee you fantastic wedding
                            entertainment for each part.
                            We'll provide help and support 24 hours a day, 7 days a week, right up until</p>
                        <div class="ms-event-inner">
                            <div class="ms-event-location">
                                <a href="#" target="_blank" tabindex="0"><i
                                        class="flaticon-pin"></i>Ohio</a>
                            </div>
                            <div class="ms-event-date">
                                <span>9:00 PM, Saturday, February 25, 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ms-event2-item mb-25">
                        <h3 class="ms-event-title"><a href="event-details.html">New Year’s Eve party
                                bands</a></h3>
                        <p class="ms-event-text">Our hand-picked acts will guarantee you fantastic wedding
                            entertainment for each part.
                            We'll provide help and support 24 hours a day, 7 days a week, right up until</p>
                        <div class="ms-event-inner">
                            <div class="ms-event-location">
                                <a href="#" target="_blank" tabindex="0"><i
                                        class="flaticon-pin"></i>City Club</a>
                            </div>
                            <div class="ms-event-date">
                                <span>9:00 PM, Saturday, January 1, 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Area End Here  -->

    <!-- Testimonial area end here  -->
    <section class="ms-tm2-area p-relative fix pt-130 pb-130">
        <div class="ms-tm2-line p-absolute">
            <img src="assets/img/testimonial/testimonial-line.png" alt="testimonial line">
        </div>
        <div class="container">
            <div class="row justify-content-center bdFadeUp">
                <div class="col-xl-6">
                    <div class="section__title-wrapper text-center mb-65 bd-title-anim">
                        <span class="section__subtitle">Awesome Feedbacks</span>
                        <h2 class="section__title">Peoples <span class="animated-underline active">Think
                                About</span>
                            us
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="ms-tm2-imgs-wrap p-relative">
                <div class="ms-tm2-img1 ms-tm2-shadow p-absolute w-img d-none d-md-block">
                    <img src="assets/img/testimonial/testimonial-07.png" alt="testimonial image">
                </div>
                <div class="ms-tm2-img2 ms-tm2-shadow p-absolute w-img d-none d-lg-block">
                    <img src="assets/img/testimonial/testimonial-08.png" alt="testimonial image">
                </div>
                <div class="ms-tm2-img3 ms-tm2-shadow p-absolute w-img d-none d-xl-block">
                    <img src="assets/img/testimonial/testimonial-09.png" alt="testimonial image">
                </div>
                <div class="ms-tm2-img4 ms-tm2-shadow p-absolute w-img d-none d-md-block">
                    <img src="assets/img/testimonial/testimonial-10.png" alt="testimonial image">
                </div>
                <div class="ms-tm2-img5 ms-tm2-shadow p-absolute w-img d-none d-lg-block">
                    <img src="assets/img/testimonial/testimonial-11.png" alt="testimonial image">
                </div>
                <div class="ms-tm2-img6 ms-tm2-shadow p-absolute w-img d-none d-xl-block">
                    <img src="assets/img/testimonial/testimonial-12.png" alt="testimonial image">
                </div>
                <div class="row justify-content-center bdFadeUp">
                    <div class="col-xl-8">
                        <div class="ms-tm2-wrap">
                            <div class="ms-tm2-active mb-60">
                                <div class="ms-tm2-item text-center">
                                    <div class="ms-tm2-img-main">
                                        <div class="ms-tm2-img-wrap p-relative d-inline-block mx-auto">
                                            <div class="ms-tm2-signature w-img">
                                                <img src="assets/img/testimonial/testimonial-signature.png"
                                                    alt="testimonial signature">
                                            </div>
                                            <div class="ms-tm2-author-img m-img">
                                                <img src="assets/img/testimonial/testimonial-06.png"
                                                    alt="testimonial image">
                                            </div>
                                        </div>
                                        <div class="ms-tm2-content pt-35">
                                            <div class="ms-tm2-quotation mb-25">
                                                <i class="flaticon-quotation"></i>
                                            </div>
                                            <p class="ms-tm2-text mb-30">It is a sequence of Latin words
                                                that, as they are
                                                positioned, do
                                                not form sentences
                                                with a complete sense, but give life
                                                to a test text useful to fill spaces that will subsequently
                                                be occupied
                                                from ad
                                                hoc
                                                texts composed by communication
                                                professionals.</p>
                                            <div class="ms-tm2-author">
                                                <span class="ms-tm2-name">Dio Caprio</span>
                                                <span class="ms-tm2-designation">CEO - XYZ Innovation</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-tm2-item text-center">
                                    <div class="ms-tm2-img-main">
                                        <div class="ms-tm2-img-wrap p-relative d-inline-block mx-auto">
                                            <div class="ms-tm2-signature w-img">
                                                <img src="assets/img/testimonial/testimonial-signature.png"
                                                    alt="testimonial signature">
                                            </div>
                                            <div class="ms-tm2-author-img m-img">
                                                <img src="assets/img/playlist/userfq.jpg"
                                                    alt="testimonial image">
                                            </div>
                                        </div>
                                        <div class="ms-tm2-content pt-35">
                                            <div class="ms-tm2-quotation mb-25">
                                                <i class="flaticon-quotation"></i>
                                            </div>
                                            <p class="ms-tm2-text mb-30">It is a sequence of Latin words
                                                that, as they are
                                                positioned, do
                                                not form sentences
                                                with a complete sense, but give life
                                                to a test text useful to fill spaces that will subsequently
                                                be occupied
                                                from ad
                                                hoc
                                                texts composed by communication
                                                professionals.</p>
                                            <div class="ms-tm2-author">
                                                <span class="ms-tm2-name">Dio Caprio</span>
                                                <span class="ms-tm2-designation">CEO - XYZ Innovation</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-tm2-item text-center">
                                    <div class="ms-tm2-img-main">
                                        <div class="ms-tm2-img-wrap p-relative d-inline-block mx-auto">
                                            <div class="ms-tm2-signature w-img">
                                                <img src="assets/img/testimonial/testimonial-signature.png"
                                                    alt="testimonial signature">
                                            </div>
                                            <div class="ms-tm2-author-img m-img">
                                                <img src="assets/img/testimonial/testimonial-06.png"
                                                    alt="testimonial image">
                                            </div>
                                        </div>
                                        <div class="ms-tm2-content pt-35">
                                            <div class="ms-tm2-quotation mb-25">
                                                <i class="flaticon-quotation"></i>
                                            </div>
                                            <p class="ms-tm2-text mb-30">It is a sequence of Latin words
                                                that, as they are
                                                positioned, do
                                                not form sentences
                                                with a complete sense, but give life
                                                to a test text useful to fill spaces that will subsequently
                                                be occupied
                                                from ad
                                                hoc
                                                texts composed by communication
                                                professionals.</p>
                                            <div class="ms-tm2-author">
                                                <span class="ms-tm2-name">Dio Caprio</span>
                                                <span class="ms-tm2-designation">CEO - XYZ Innovation</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="ms-tm2-dots ms-tm-dots-horizontal ms-round-dots d-flex justify-content-center mt-20">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial area end here  -->

    <!-- Special Events Area Start -->
    <section class="ms-news-area ms-bg-2 pt-130 pb-90">
        <div class="container">
            <div class="row justify-content-center bdFadeUp">
                <div class="col-xl-6">
                    <div class="section__title-wrapper text-center mb-65 bd-title-anim">
                        <span class="section__subtitle">Latest News</span>
                        <h2 class="section__title">Musicly <span class="animated-underline active">Morning
                                Insight</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row bdFadeUp">
                <div class="col-xl-4 col-md-6">
                    <div class="ms-news-item p-relative zindex-1 mb-40">
                        <div class="ms-news-overlay p-absolute"></div>
                        <div class="ms-news-thumb w-img">
                            <a href="news-details.html"><img src="assets/img/news/news-01.png" alt="news image"></a>
                        </div>
                        <div class="ms-news-content ms-news-position p-absolute">
                            <a class="ms-news2-cat mb-30" href="news-details.html">Event</a>
                            <h3 class="ms-news-title mb-15"><a href="news-details.html">What's more, our
                                    live music To
                                    The
                                    guaran
                                    tee means that</a></h3>
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 15, 2023</span>
                                <span><a href="news-details.html">0 Comments</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="ms-news-item p-relative zindex-1 mb-40">
                        <div class="ms-news-overlay p-absolute"></div>
                        <div class="ms-news-thumb w-img">
                            <a href="news-details.html"><img src="assets/img/news/news-02.png" alt="news image"></a>
                        </div>
                        <div class="ms-news-content ms-news-position p-absolute">
                            <a class="ms-news2-cat mb-30" href="news-details.html">Wedding Party</a>
                            <h3 class="ms-news-title mb-15"><a href="news-details.html">The first dance as a
                                    married
                                    couple has become</a></h3>
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 20, 2023</span>
                                <span><a href="news-details.html">10 Comments</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="ms-news-item p-relative zindex-1 mb-40">
                        <div class="ms-news-overlay p-absolute"></div>
                        <div class="ms-news-thumb w-img">
                            <a href="news-details.html"><img src="assets/img/news/news-03.png" alt="news image"></a>
                        </div>
                        <div class="ms-news-content ms-news-position p-absolute">
                            <a class="ms-news2-cat mb-30" href="news-details.html">DJ Party Event</a>
                            <h3 class="ms-news-title mb-15"><a href="news-details.html">Our exclusive range
                                    of live
                                    bands
                                    for hire have experience</a></h3>
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 25, 2023</span>
                                <span><a href="news-details.html">14 Comments</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Special Events Area End -->

    <!-- Popular  area start -->
    <section class="ms-popular__area pt-130 pb-100 fix">
        <div class="container">
            <div class="row align-items-end mb-25 bdFadeUp">
                <div class="col-xl-6 col-lg-6">
                    <div class="section__title-wrapper mb-40 bd-title-anim">
                        <span class="section__subtitle">Popular Categories</span>
                        <h2 class="section__title msg_title">
                            <span class="animated-underline active">Handpicked party</span> <br>
                            bands for 2023
                        </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="ms-popular__tab ms-popular-flex mb-40">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-popular-1-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-popular-1" type="button" role="tab"
                                    aria-controls="nav-popular-1" aria-selected="true">Musical Acts</button>
                                <button class="nav-link" id="nav-popular-2-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-popular-2" type="button" role="tab"
                                    aria-controls="nav-popular-2" aria-selected="false">Entertainers</button>
                                <button class="nav-link" id="nav-popular-3-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-popular-3" type="button" role="tab"
                                    aria-controls="nav-popular-3" aria-selected="false">Event
                                    Services</button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row bdFadeUp">
                <div class="col-xxl-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-popular-1" role="tabpanel"
                            aria-labelledby="nav-popular-1-tab" tabindex="0">
                            <div class="swiper-container ms-popular-active fix">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-01.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Singers</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-02.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Bands &
                                                    Group</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-03.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Tributes</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-04.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Solo
                                                    Musicians
                                                </a></h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-01.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Singers</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-02.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Bands &
                                                    Group</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-03.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Tributes</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-04.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Solo
                                                    Musicians
                                                </a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-popular-2" role="tabpanel"
                            aria-labelledby="nav-popular-2-tab" tabindex="0">
                            <div class="swiper-container ms-popular-active fix">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-01.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Singers</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-02.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Bands &
                                                    Group</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-03.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Tributes</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-04.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Solo
                                                    Musicians
                                                </a></h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-01.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Singers</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-02.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Bands &
                                                    Group</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-03.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Tributes</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-04.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Solo
                                                    Musicians
                                                </a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-popular-3" role="tabpanel"
                            aria-labelledby="nav-popular-3-tab" tabindex="0">
                            <div class="swiper-container ms-popular-active fix">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-01.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Singers</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-02.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Bands &
                                                    Group</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-03.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Tributes</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-04.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Solo
                                                    Musicians
                                                </a></h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-01.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Singers</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-02.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Bands &
                                                    Group</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-03.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Tributes</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres_details.php"><img
                                                        src="assets/img/popular/popular-04.png"
                                                        alt="popular band"></a>
                                                <a href="genres_details.php" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres_details.php">Solo
                                                    Musicians
                                                </a></h4>
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
    <!-- Popular  area end -->

</main>

<!-- Footer Area Start Here  -->
<?php
include "footer.php"
?>