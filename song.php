<?php
include "header.php";
?>

<?php
$artists = [
    [
        "name" => "Arijit Singh",
        "image" => "assets/img/artis/arijit.webp",
        "video" => "https://www.youtube.com/watch?v=Rf9flQISwok",
        "description" => "Arijit Singh is an Indian playback singer known for his heartfelt and romantic songs.",
        "detailsLink" => "genres-details.html"
    ],
    [
        "name" => "AR Rahman",
        "image" => "assets/img/artis/arrehman.webp",
        "video" => "https://www.youtube.com/watch?v=Rf9flQISwok",
        "description" => "A R Rahman, born as A. S. Dileep Kumar on January 6, 1967, in Chennai, Tamil Nadu, is a name that resonates with musical brilliance across the globe.",
        "detailsLink" => "genres-details.html"
    ],
    [
        "name" => "Badshah",
        "image" => "assets/img/artis/badssha.webp",
        "video" => "https://www.youtube.com/watch?v=Rf9flQISwok",
        "description" => "Badshah’s real name is Aditya Prateek Singh Sisodia, and he is an Indian rapper, singer, songwriter, and producer.",
        "detailsLink" => "genres-details.html"
    ],
    [
        "name" => "Pritam",
        "image" => "assets/img/artis/pritam.webp",
        "video" => "https://www.youtube.com/watch?v=Rf9flQISwok",
        "description" => "Pritam Chakraborty, known mononymously as Pritam, is an Indian composer, instrumentalist, guitarist, music producer, and singer from Kolkata, India.",
        "detailsLink" => "genres-details.html"
    ]
];
?>


<?php
// Check if a search query is provided through the form submission
$query = isset($_GET['query']) ? $_GET['query'] : 'Believer'; // Default query is 'Believer'
$apiUrl = "https://jio-saavan-beryl.vercel.app/api/search/songs?query=" . urlencode($query);

// Fetch song data from the API
$songDataJson = file_get_contents($apiUrl);

// Decode the JSON response into a PHP array
$songs = json_decode($songDataJson, true);
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
                                    <div class="offcanvas__search mb-30">
                                    <form action="" method="GET">
    <input type="text" name="query" placeholder="Search Here" value="<?= htmlspecialchars($query); ?>">
    <button type="submit"><i class="far fa-search"></i></button>
</form>

<!-- Genres Listing Area -->
<div class="ms-genres-listing pt-130 pb-110">
    <div class="container">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="row">

                    <?php if (isset($songs['data']['results']) && !empty($songs['data']['results'])): ?>
                        <?php foreach ($songs['data']['results'] as $song): ?>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <!-- Song Image (500x500) -->
                                        <?php if (isset($song['image'][0]['url'])): ?>
                                            <a href="<?= $song['url']; ?>" target="_blank">
                                                <img src="<?= $song['image'][2]['url']; ?>" alt="<?= $song['name']; ?> image" class="song-img">
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="ms-genres-content p-relative hover-div">
                                        <!-- Song Title -->
                                        <h4 class="ms-genres-title">
                                            <a href="<?= $song['url']; ?>" target="_blank"><?= $song['name']; ?></a>
                                        </h4>

                                        <!-- Primary Artist -->
                                        <?php if (isset($song['artists']['primary'][0]['name'])): ?>
                                            <p class="mb-10">Artist: <?= $song['artists']['primary'][0]['name']; ?></p>
                                        <?php endif; ?>

                                       
                                        <!-- Play Song Button -->
                                        <a href="<?= $song['url']; ?>" class="btn btn-primary" target="_blank">Play Song</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No songs found for your search query.</p>
                    <?php endif; ?>
                    
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