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
<section id="app" class="uk-height-viewport uk-offcanvas-content">
    <div id="cs-news" class="uk-section-small uk-text-center" data-src="imgs/bg_news.png" uk-img>
        <div class="uk-container">
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

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin" hidden></ul>

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