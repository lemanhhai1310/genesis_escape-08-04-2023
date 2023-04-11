<div class="section uk-section uk-flex uk-flex-middle home__section home__section2" style="--url:url(images/7c92e406c720ce220d26e98af450a1cf.png)">
    <div class="uk-width">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-1-3@m">
                    <div class="section3__txt">RooHIDE N SEEKm 1</div>
                    <div class="uk-grid-12 item__12 uk-flex-middle" uk-grid>
                        <div>
                            <div class="section2__txt">Độ khó:</div>
                        </div>
                        <div>
                            <div class="uk-position-relative uk-text-nowrap">
                                <i class="section2__star section2__star--off"></i>
                                <i class="section2__star section2__star--off"></i>
                                <i class="section2__star section2__star--off"></i>
                                <i class="section2__star section2__star--off"></i>
                                <i class="section2__star section2__star--off"></i>
                                <div class="uk-position-center-left uk-overflow-hidden" style="width: 89%">
                                    <i class="section2__star section2__star--on"></i>
                                    <i class="section2__star section2__star--on"></i>
                                    <i class="section2__star section2__star--on"></i>
                                    <i class="section2__star section2__star--on"></i>
                                    <i class="section2__star section2__star--on"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid-12 item__12 uk-flex-middle" uk-grid>
                        <div>
                            <div class="section2__txt">Thể loại:</div>
                        </div>
                        <div>
                            <div class="section2__txt1">Phá án - Hành động - Kinh dị</div>
                        </div>
                    </div>
                    <div class="uk-grid-12 item__12 uk-flex-middle" uk-grid>
                        <div>
                            <div class="section2__txt">Số người chơi:</div>
                        </div>
                        <div>
                            <div class="section2__txt">4 - 8</div>
                        </div>
                    </div>
                    <div class="uk-grid-12 item__12 uk-flex-middle" uk-grid>
                        <div>
                            <div class="section2__txt">Địa chỉ:</div>
                        </div>
                        <div>
                            <div class="section2__txt">189 Hoàng Cầu, HN</div>
                        </div>
                    </div>
                    <div class="section2__item"></div>
                    <div class="section2__txt">Cốt truyện: TRỐN TÌM - Một trò chơi vốn đã quen thuộc với tuổi thơ của rất nhiều người nhưng sẽ ra sao nếu trò chơi ấy còn có cả những vị khách không</div>
                    <div><a href="" class="uk-link-text section2__link">Learn more</a></div>
                    <a href="" class="header__btn uk-width item__24-12 uk-button uk-button-primary">Booking this room</a>
                    <a href="" class="section2__btn uk-button uk-button-secondary uk-width item__16">Trailer</a>
                </div>
            </div>
            <div class="item__46-23" uk-slider="sets: true;finite: true">

                <div class="uk-position-relative">

                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-grid-small uk-grid-32-m" uk-grid>
                            <?php for ($i=1;$i<=10;$i++): ?>
                            <label>
                                <input class="uk-radio section2__radio" type="radio" name="radio2" <?= ($i==1)?'checked':'' ?>>
                                <div class="section2__card uk-card uk-card-body uk-padding-small">
                                    <div class="uk-cover-container uk-border-rounded">
                                        <img src="https://picsum.photos/161/107/?random=<?= $i ?>" alt="" uk-cover="">
                                        <canvas width="322" height="214"></canvas>
                                    </div>
                                    <div class="item__20">Room 1</div>
                                    <div class="uk-grid-12 uk-flex-middle item__6" uk-grid>
                                        <div>
                                            <div class="section2__txt">Level:</div>
                                        </div>
                                        <div>
                                            <div class="uk-position-relative uk-text-nowrap">
                                                <i class="section2__star section2__star--off"></i>
                                                <i class="section2__star section2__star--off"></i>
                                                <i class="section2__star section2__star--off"></i>
                                                <i class="section2__star section2__star--off"></i>
                                                <i class="section2__star section2__star--off"></i>
                                                <div class="uk-position-center-left uk-overflow-hidden" style="width: 89%">
                                                    <i class="section2__star section2__star--on"></i>
                                                    <i class="section2__star section2__star--on"></i>
                                                    <i class="section2__star section2__star--on"></i>
                                                    <i class="section2__star section2__star--on"></i>
                                                    <i class="section2__star section2__star--on"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <?php endfor; ?>
                        </ul>
                    </div>

                    <div class="uk-hidden@s uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@s">
                        <a class="uk-position-center-left-out uk-position-small uk-link-toggle section2__slidenav section2__slidenav__previous" href="#" uk-slider-item="previous">
                            <div></div>
                            <span>back more</span>
                        </a>
                        <a class="uk-position-center-right-out uk-position-small uk-link-toggle section2__slidenav section2__slidenav__next" href="#" uk-slider-item="next">
                            <div></div>
                            <span>view more</span>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>