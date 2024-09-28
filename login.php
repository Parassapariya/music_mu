<?php
include "header.php";

?>
<div class="ms-all-content ms-all-content-space">
        <main>
            <!-- page title area start  -->
            <section class="page-title-area page-title-spacing p-relative zindex-1 "
                data-background="assets/img/bg/work-bg.jpg">
                <div class="ms-overlay ms-overlay9 p-absolute zindex--1"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-11">
                            <h3 class="ms-page-title text-center">Login</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title area end  -->

            <!-- login Area Start Here  -->
            <section class="ms-login-area pb-50 pt-130">
                <div class="container">
                    <div class="mx-auto" style="max-width: 810px;">
                        <div class="ms-login-wrap text-center ms-login-space ms-bg-2">
                            <h3 class="ms-title4 mb-50">Welcome Again</h3>
                            <form action="logindatacheck.php" method="post">
                                <div class="ms-input2-box mb-25">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="ms-input2-box mb-50">
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="ms-submit-btn mb-40">
                                    <input class="unfill__btn d-block w-100" type="submit" placeholder="Log in">
                                </div>
                                <div class="ms-divided-btn mb-45">
                                    <span>or</span>
                                </div>
                                <div class="ms-fb mb-40">
                                    <button class="ms-fb-btn" type="submit"><i class="fa-brands fa-facebook"></i>
                                        Log in with facebook</button>
                                </div>
                                <div class="ms-not-account mb-35">
                                    <p>Don’t have an account? <a href="signup.php">Register Now</a></p>
                                </div>

                                <div class="ms-forget-pass">
                                    <a href="#">Forgot Your Password?</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- login Area End Here  -->

            <!-- Partner Area Start Here  -->
            <div class="ms-partner-area fix pt-80 pb-130">
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