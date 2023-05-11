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
    <link href="https://fonts.cdnfonts.com/css/alexandra-personal-use" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/fullPage.js-master/src/css/fullpage.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>
    <!-- This following line is optional. Only necessary if you use the option css3:false and you want to use other easing effects rather than "easeInOutCubic". -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<nav class="header uk-navbar-container uk-navbar-transparent uk-position-top uk-position-fixed uk-position-z-index">
    <div class="uk-container uk-container-expand">
        <div uk-navbar>

            <div class="uk-navbar-left">
                <a href="" class="uk-navbar-item uk-logo"><img src="images/logo-genesis-trang.png" alt=""></a>
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
                    <a href="#modal-acc" uk-toggle class="header__txtLogin uk-link-toggle">Login / Sign Up</a>
                </div>
                <div class="uk-navbar-item">
                    <a href="" class="header__btn header__btn--c1 uk-button uk-button-primary">Thành viên</a>
                </div>
                <div class="uk-navbar-item">
                    <a href="" class="header__btn uk-button uk-button-primary">Booking Now</a>
                </div>
            </div>

        </div>
    </div>
</nav>

<div id="modal-acc" class="uk-flex-top modal__acc" uk-modal>
    <div class="uk-modal-dialog modal__dialog1 uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-body modal__body">
            <ul class="uk-child-width-expand modal__acc__tab" uk-tab>
                <li class="uk-active"><a href="#">Đăng ký</a></li>
                <li><a href="#">Đăng nhập</a></li>
            </ul>
            <ul class="uk-switcher item__24-12">
                <li>
                    <div class="uk-form-stacked">
                        <fieldset class="uk-fieldset uk-grid-small uk-grid-32-m" uk-grid>

                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label section1__label" for="form-stacked-email">Email</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input section1__input" id="form-stacked-email" type="email" placeholder="Nhập email của bạn">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label section1__label" for="form-stacked-phone">Số điện thoại</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input section1__input" id="form-stacked-phone" type="tel" placeholder="Nhập số điện thoại của bạn">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label section1__label" for="form-stacked-pass">Mật khẩu</label>
                                <div class="uk-form-controls">
                                    <div class="uk-inline uk-width">
                                        <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: eye"></a>
                                        <input class="uk-input section1__input" id="form-stacked-pass" type="password" placeholder="Nhập mật khẩu của bạn">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label section1__label" for="form-stacked-passconfirm">Xác nhận lại mật khẩu</label>
                                <div class="uk-form-controls">
                                    <div class="uk-inline uk-width">
                                        <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: eye"></a>
                                        <input class="uk-input section1__input" id="form-stacked-passconfirm" type="password" placeholder="Xác nhận lại mật khẩu">
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </div>
                </li>
                <li>
                    <div class="uk-form-stacked">
                        <fieldset class="uk-fieldset uk-grid-small uk-grid-32-m" uk-grid>

                            <div class="uk-width-1-1">
                                <label class="uk-form-label section1__label" for="form-stacked-phone">Số điện thoại</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input section1__input" id="form-stacked-phone" type="tel" placeholder="Nhập số điện thoại của bạn">
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label section1__label" for="form-stacked-pass">Mật khẩu</label>
                                <div class="uk-form-controls">
                                    <div class="uk-inline uk-width">
                                        <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: eye"></a>
                                        <input class="uk-input section1__input" id="form-stacked-pass" type="password" placeholder="Nhập mật khẩu của bạn">
                                    </div>
                                </div>
                                <div class="uk-text-right item__20"><a href="" class="modal__acc__forgotTxt">Quên mật khẩu</a></div>
                            </div>

                        </fieldset>
                    </div>
                </li>
            </ul>
        </div>
        <div class="uk-modal-footer modal__footer">
            <div class="uk-child-width-1-2 uk-grid-small" uk-grid>
                <div>
                    <button href="" class="header__btn uk-width uk-button uk-button-primary">Đăng nhập</button>
                </div>
                <div>
                    <button class="uk-button modal__acc__btnCancel uk-width uk-button-default uk-modal-close" type="button">Huỷ</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // UIkit.modal('#modal-acc').show();
</script>