<div id="slideshow" class="section uk-position-relative" uk-slideshow="animation: fade">

    <ul class="uk-slideshow-items uk-height-viewport" uk-height-viewport>
        <?php
        $data = array(
            'images/guidle0.jpeg',
            'images/guidle1.jpeg',
            'images/guidle2.jpeg',
            'images/guidle3.jpeg',
            'images/guidle4.jpeg',
        );
        foreach ($data as $k=>$v): ?>
            <li>
                <div class="home__section home__section3 uk-height-viewport" style="--url:url(<?= $v ?>)"></div>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="uk-position-cover uk-section uk-flex uk-flex-middle">
        <div class="uk-width">
            <div class="uk-container">
                <div uk-grid>
                    <div class="uk-width-1-3@m">
                        <div class="section3__title">HOW TO PLAY</div>
                        <div id="slide" class="item__36-18" uk-slider="autoplay: true">

                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                                <ul class="uk-slider-items uk-child-width-1-1">
                                    <?php
                                    $data = array(
                                        'images/guidle0.jpeg',
                                        'images/guidle1.jpeg',
                                        'images/guidle2.jpeg',
                                        'images/guidle3.jpeg',
                                        'images/guidle4.jpeg',
                                    );
                                    foreach ($data as $k=>$v): ?>
                                        <li uk-slideshow-item="<?= k ?>>">
                                            <div class="section3__txt"><?= $k+1 ?>. Understand the objective</div>
                                            <div class="section3__desc item__12">Cốt truyện: TRỐN TÌM - Một trò chơi vốn đã quen thuộc với tuổi thơ của rất nhiều người nhưng sẽ ra sao nếu trò chơi ấy còn có cả những vị khách không mời mà tới? Sau một hồi tham gia thử thách gan dạ ở trường học cũ bị đồn </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>

                            </div>

                            <ul class="uk-slider-nav section3__dotnav uk-dotnav item__36-18"></ul>

                        </div>
                        <a href="" class="header__btn uk-button uk-button-primary uk-width item__36-18">
                            Tiếp tục
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.6665 10H15.4998M11.3332 5L15.7439 9.41074C16.0694 9.73618 16.0694 10.2638 15.7439 10.5893L11.3332 15" stroke="#111111" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>