<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Landingpage Chinsu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.1.5/css/uikit.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="assets/uikit-3.1.5/js/uikit.min.js"></script>
    <script src="assets/uikit-3.1.5/js/uikit-icons.min.js"></script>
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v3.2'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="2428809380682169"
     theme_color="#24892d">
</div>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
    <div id="cs-block4" class="uk-background-cover" data-src="imgs/bg3.png" uk-img>
        <div class="uk-container">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-expand@s">
                    <h2 class="cs-title1">vạn món ngon bùng vị</h2>
                </div>
                <div class="uk-width-auto@s">
                    <img class="cs-img3" src="imgs/img5.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="cs-block3" class="uk-section-xsmall uk-position-relative" data-src="imgs/bg1.png" uk-img>
        <div class="uk-container">
            <div class="" uk-grid>
                <div class="uk-width-auto@s">
                    <img class="cs-img1" src="imgs/img2.png" alt="">
                </div>
                <div class="uk-width-expand@s">
                    <h2 class="cs-title1 uk-text-center">tương ớt chinsu</h2>
                    <div class="uk-padding-small">
                        <p class="cs-desc1">Tương ớt Chinsu được sản xuất từ những trái ớt tươi ngon nhất, xay nhuyễn cũng với tỏi tươi và công thức lên men đặc biệt cho hương vị tuyệt hảo</p>
                    </div>
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand@s">
                            <ul class="uk-list cs-list2" uk-scrollspy="cls: uk-animation-slide-bottom; target: li; delay: 500; repeat: true">
                                <li>Thơm nồng vị ớt và tỏi tươi ngon;</li>
                                <li>Hít hà vị cay tuyệt hảo;</li>
                                <li>Hoà quyện và bùng cay.</li>
                            </ul>
                        </div>
                        <div class="uk-width-auto@s">
                            <img uk-scrollspy="cls: uk-animation-slide-right; repeat: true" class="cs-img2" src="imgs/img4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="cs-block2" class="uk-section-small uk-text-center" data-src="imgs/bg2.png" uk-img>
        <div class="uk-container uk-container-small">
            <h2 class="cs-title1">các món ngon tương ớt chinsu</h2>
            <div uk-slider>

                <div class="uk-position-relative">

                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-small" uk-grid>
                            <?php
                            $data = array
                            (
                                array(
                                    'src' => 'https://media.cooky.vn/recipe/g1/9830/s800x500/recipe9830-635842438662324270.jpg',
                                    'title' => 'Cánh gà chiên nước mắm',
                                ),
                                array(
                                    'src' => 'data:image/jpeg;base64,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',
                                    'title' => 'chả giò hải sản chiên giòn',
                                ),
                                array(
                                    'src' => 'data:image/jpeg;base64,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',
                                    'title' => 'chả cá thu chiên cốm',
                                ),
                                array(
                                    'src' => 'https://i.ytimg.com/vi/jn1yCff6t6o/maxresdefault.jpg',
                                    'title' => 'trứng lòng đào bọc chả cá',
                                ),
                                array(
                                    'src' => 'https://cdn01.diadiemanuong.com/ddau/640x/hen-di-an-ngay-6-mon-co-trung-long-dao-ngon-dien-dao-xieu-long-dan-sanh-an-2af1b3ef636681311232687264.jpg',
                                    'title' => '1.001 sắc thái ‘bùng vị cay ngon’ của giới trẻ',
                                ),
                            );
                            foreach ($data as $k1 => $v1) { ?>
                                <li>
                                    <div class="cs-box2 uk-card uk-card-default uk-height-1-1">
                                        <div class="uk-cover-container">
                                            <img src="<?= $v1['src'] ?>" alt="" uk-cover>
                                            <canvas width="841" height="742"></canvas>
                                        </div>
                                        <div class="uk-padding-small">
                                            <h3 class="title uk-text-uppercase"><a href="#"><?= $v1['title'] ?></a></h3>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="uk-hidden@s cs-nav1 uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"><img src="imgs/btn-prev.png" alt=""></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"><img src="imgs/btn-next.png" alt=""></a>
                    </div>

                    <div class="uk-visible@s cs-nav1">
                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"><img src="imgs/btn-prev.png" alt=""></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"><img src="imgs/btn-next.png" alt=""></a>
                    </div>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>

            </div>
        </div>
    </div>
    <div id="cs-block1" class="uk-section-xsmall uk-position-relative" data-src="imgs/bg1.png" uk-img>
        <div class="uk-container">
            <div class="uk-flex-bottom" uk-grid>
                <div class="uk-width-expand@s">
                    <h2 class="cs-title1">tương ớt chinsu siêu cay</h2>
                    <div class="uk-padding-small">
                        <p class="cs-desc1">Tương ớt Chinsu siêu cay mới được xay nhuyễn từ những trái ớt đỏ chín cây và ủ lên men tự nhiên cùng với tỏi thơm</p>
                    </div>
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img uk-scrollspy="cls: uk-animation-slide-left; repeat: true" class="cs-img2" src="imgs/img1.png" alt="">
                        </div>
                        <div class="uk-width-expand">
                            <ul class="uk-list cs-list1" uk-scrollspy="cls: uk-animation-slide-right; target: li; delay: 500; repeat: true">
                                <li>Dậy vị thanh chua của ớt tỏi <br> lên men;</li>
                                <li>Bùng vị cay hít hà kích thích <br> <span>vị giác;</span></li>
                                <li>Lan toả, hoà quyện.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-auto@s">
                    <img class="cs-img1" src="imgs/img3.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="cs-news" class="uk-section-small uk-text-center" data-src="imgs/bg_news.png" uk-img>
        <div class="uk-container uk-container-small">
            <h2 class="uk-text-uppercase cs-title">tin tức về tương ớt chinsu</h2>
            <div uk-slider>

                <div class="uk-position-relative">

                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m uk-grid-small" uk-grid>
                            <?php
                            $data = array
                            (
                                array(
                                    'src' => 'imgs/news1.png',
                                    'title' => '1.001 sắc thái ‘bùng vị cay ngon’ của giới trẻ',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w960/Uploaded/Aohuouk/2019_05_30/vinsmart9.jpg',
                                    'title' => 'Sau 6 tháng ra mắt, Vsmart đang ở đâu trên bản đồ smartphone Việt?',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w660/Uploaded/ayhunwx/2019_05_30/tat_axit_zing_8.jpg',
                                    'title' => 'Nạn nhân bị tạt axit: Khi nỗi đau tột cùng tìm thấy niềm hy vọng',
                                ),
                                array(
                                    'src' => 'imgs/news1.png',
                                    'title' => '1.001 sắc thái ‘bùng vị cay ngon’ của giới trẻ',
                                ),
                            );
                            foreach ($data as $k1 => $v1) { ?>
                                <li>
                                    <div class="uk-cover-container uk-box-shadow-medium cs-box1">
                                        <img src="<?= $v1['src'] ?>" alt="" uk-cover>
                                        <canvas width="536" height="344"></canvas>
                                        <div class="uk-padding-small uk-position-bottom">
                                            <h3 class="title uk-text-uppercase"><a href="#"><?= $v1['title'] ?></a></h3>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="uk-hidden@s cs-nav1 uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"><img src="imgs/btn-prev.png" alt=""></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"><img src="imgs/btn-next.png" alt=""></a>
                    </div>

                    <div class="uk-visible@s cs-nav1">
                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"><img src="imgs/btn-prev.png" alt=""></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"><img src="imgs/btn-next.png" alt=""></a>
                    </div>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>

            </div>
        </div>
    </div>
    <footer id="cs-footer" class="uk-section-xsmall uk-text-center uk-position-relative">
        <div class="uk-container">
            <figure>
                <a href="#"><img src="imgs/logo_f.png" alt=""></a>
                <figcaption>Copyright 2019 © Tương ớt Chinsu</figcaption>
            </figure>
        </div>
    </footer>
</section>
</body>
</html>