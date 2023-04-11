<?php $projectName = "Genesis Escape"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/fullPage.js-master/src/css/fullpage.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>
    <!-- This following line is optional. Only necessary if you use the option css3:false and you want to use other easing effects rather than "easeInOutCubic". -->
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<nav class="header uk-navbar-container uk-navbar-transparent uk-position-top uk-position-fixed uk-position-z-index">
    <div class="uk-container uk-container-expand">
        <div uk-navbar>

            <div class="uk-navbar-left">
                <a href="" class="uk-navbar-item uk-logo"><img src="images/Logo.png" alt=""></a>
                <ul id="menu" class="uk-navbar-nav uk-visible@m">
                    <li data-menuanchor="home"><a href="#home">Home</a></li>
                    <li data-menuanchor="selectroom"><a href="#selectroom">Select Room</a></li>
                    <li data-menuanchor="guidleplay"><a href="#guidleplay">Guidle play</a></li>
                    <li data-menuanchor="testimonials"><a href="#testimonials">Testimonials</a></li>
                    <li data-menuanchor="contact"><a href="#contact">Contact</a></li>
                </ul>

            </div>

            <div class="uk-navbar-right">
                <div class="uk-navbar-item">
                    <a href="" class="header__txtLogin uk-link-toggle">Login / Sign Up</a>
                </div>
                <div class="uk-navbar-item">
                    <a href="" class="header__btn uk-button uk-button-primary">Booking Now</a>
                </div>
            </div>

        </div>
    </div>
</nav>