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

    /* Play button styles */
    .play-button {
        margin-top: 10px;
        background-color: #FF5733;
        /* Button color */
        color: white;
        /* Text color */
        border: none;
        /* Remove default border */
        border-radius: 50px;
        /* Rounded edges */
        padding: 15px 30px;
        /* Padding for size */
        font-size: 20px;
        /* Font size */
        cursor: pointer;
        /* Hand pointer on hover */
        transition: all 0.3s ease;
        /* Smooth hover effect */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        /* Subtle shadow */
    }

    .play-button:hover {
        background-color: #C70039;
        /* Darker color on hover */
        transform: scale(1.1);
        /* Slightly enlarges the button */
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        /* Bigger shadow on hover */
    }

    .play-button:active {
        transform: scale(0.95);
        /* Slight click effect */
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
                                    </div>
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
                                                                                <h4 class="ms-genres-title" style="margin-left: 50px;">
                                                                                    <a href="<?= $song['url']; ?>" target="_blank"><?= $song['name']; ?></a>
                                                                                </h4>

                                                                                <!-- Primary Artist -->
                                                                                <?php if (isset($song['artists']['primary'][0]['name'])): ?>
                                                                                    <p class="mb-10">Artist: <?= $song['artists']['primary'][0]['name']; ?></p>
                                                                                <?php endif; ?>


                                                                                <!-- Play Song Button -->
                                                                                <a href="#" class="btn btn-primary play-button" target="_blank"><span>▶</span></a>
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