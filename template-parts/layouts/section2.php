<div class="section uk-section uk-flex uk-flex-middle home__section home__section2" style="--url:url(https://genesis-escape.vn/images/room/bg/back_gone-min.png)">
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
                    <a href="#modal-bookroom" uk-toggle class="header__btn uk-width item__24-12 uk-button uk-button-primary">Booking this room</a>
                    <a href="#modal-media-youtube" uk-toggle class="section2__btn uk-button uk-button-secondary uk-width item__16">Trailer</a>
                </div>
            </div>
            <div class="uk-position-relative item__46-23">
                <div class="uk-overflow-auto">
                    <div class="uk-flex-nowrap uk-child-width-1-5@m uk-grid-small uk-grid-32-m uk-grid-match" uk-grid>
                        <?php for ($i=1;$i<=5;$i++): ?>
                            <label>
                                <input class="uk-radio section2__radio" type="radio" name="radio2" <?= ($i==1)?'checked':'' ?>>
                                <div class="section2__card section2__card--c1 uk-card uk-card-body uk-padding-small">
                                    <div class="uk-cover-container uk-border-rounded">
                                        <img src="https://picsum.photos/161/107/?random=<?= $i ?>" alt="" uk-cover="">
                                        <canvas width="322" height="214"></canvas>
                                    </div>
                                    <div class="item__20 section2__card__name">Room 1</div>
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
                    </div>
                </div>
                <a uk-toggle="" class="section2__card__viewMore uk-position-center-right-out uk-position-small uk-link-toggle section2__slidenav section2__slidenav__next" href="#modal-viewAll">
                    <div></div>
                    <span>view more</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div id="modal-viewAll" class="modal__viewAll uk-modal-container" uk-modal>
    <div class="uk-modal-dialog modal__dialog2">
        <div class="uk-modal-header">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <h2 class="uk-modal-title section3__txt">View all room</h2>
            <div class="uk-flex-middle uk-grid-small" uk-grid>
                <div class="uk-width-expand">
                    <nav class="modal__viewAll__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                        <div class="uk-navbar-left">
                            <ul class="uk-navbar-nav">
                                <li class="uk-active"><a href="">Mới ra</a></li>
                                <li><a href="">Zombie</a></li>
                                <li><a href="">Nhà ma trẻ em</a></li>
                                <li><a href="">Ác Quỷ</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="uk-width-auto@s">
                    <form class="modal__viewAll__search uk-search uk-search-default">
                        <span uk-search-icon></span>
                        <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </div>
        <div class="uk-modal-body c1" uk-overflow-auto>
            <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-grid-small uk-grid-24-m" uk-grid>
                <?php for ($i=1;$i<=40;$i++): ?>
                    <label>
                        <input class="uk-radio section2__radio" type="radio" name="radio2" <?= ($i==1)?'checked':'' ?>>
                        <div class="section2__card uk-card uk-card-body uk-padding-small">
                            <div class="uk-cover-container uk-border-rounded">
                                <img src="https://picsum.photos/161/107/?random=<?= $i ?>" alt="" uk-cover="">
                                <canvas width="322" height="214"></canvas>
                            </div>
                            <div class="item__20 section2__card__name">Room 1</div>
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
            </div>
        </div>
    </div>
</div>

<div id="modal-bookroom" class="modal__viewAll modal__booking uk-modal-container" uk-modal>
    <div class="uk-modal-dialog modal__dialog2">
        <div class="uk-modal-header">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <h2 class="uk-modal-title section3__txt">RooHIDE N SEEKm 1</h2>
        </div>
        <div class="uk-modal-body c1" uk-overflow-auto>
            <div class="item__36-18">
                <div class="modal__booking__label">Chọn ngày</div>
                <div class="uk-grid-small uk-grid-24-m uk-child-width-auto item__12" uk-grid>
                    <?php for ($i=1;$i<=7;$i++): ?>
                    <label>
                        <input class="uk-radio modal__booking__radio" type="radio" name="radio2" checked>
                        <div class="modal__booking__boxDate <?= ($i==6)?'tooltip1':'' ?>" <?php if ($i==6): ?> uk-tooltip="title: Ngày cuối tuần giá sẽ tăng từ 20%; offset:15;; delay: 500" <?php endif; ?>>
                            <div class="uk-width">
                                <div class="modal__booking__boxDate__txt">Mon</div>
                                <div class="modal__booking__boxDate__so">11</div>
                            </div>
                        </div>
                    </label>
                    <?php endfor; ?>
                    <label>
                        <input class="uk-radio modal__booking__radio" type="radio" name="radio2" checked>
                        <div class="modal__booking__boxDate" id="datepicker">
                            <div class="uk-width">
                                <div>
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 8.33333H18M8 4.16667H5.66667C4.73325 4.16667 4.26654 4.16667 3.91002 4.34832C3.59641 4.50811 3.34144 4.76308 3.18166 5.07668C3 5.4332 3 5.89991 3 6.83333V14.8333C3 15.7668 3 16.2335 3.18166 16.59C3.34144 16.9036 3.59641 17.1586 3.91002 17.3183C4.26654 17.5 4.73325 17.5 5.66667 17.5H15.3333C16.2668 17.5 16.7335 17.5 17.09 17.3183C17.4036 17.1586 17.6586 16.9036 17.8183 16.59C18 16.2335 18 15.7668 18 14.8333V6.83333C18 5.89991 18 5.4332 17.8183 5.07668C17.6586 4.76308 17.4036 4.50811 17.09 4.34832C16.7335 4.16667 16.2668 4.16667 15.3333 4.16667H13M8 4.16667H13M8 4.16667V3.75C8 3.05964 7.44036 2.5 6.75 2.5C6.05964 2.5 5.5 3.05964 5.5 3.75V4.16667M13 4.16667V3.75C13 3.05964 13.5596 2.5 14.25 2.5C14.9404 2.5 15.5 3.05964 15.5 3.75V4.16667" stroke="#333836" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div id="selectedDates" class="modal__booking__boxDate__txt item__2">Other days</div>
                            </div>
                        </div>
                    </label>
                    <script>
                        flatpickr("#datepicker", {
                            onChange: function(selectedDates, dateStr, instance) {
                                var now = dateStr;
                                var dateString = moment(now).format('DD/MM/YYYY');
                                document.getElementById("selectedDates").innerHTML = dateString;
                                console.log('selectedDates',selectedDates);
                                console.log('dateStr',dateStr);
                                console.log('instance',instance);
                            },
                        });
                    </script>
                </div>
            </div>
            <div class="item__36-18">
                <div class="modal__booking__label">Chọn giờ</div>
                <div class="uk-grid-small uk-grid-24-m uk-child-width-1-2 uk-child-width-1-7-m item__12" uk-grid>
                    <?php for ($i=1;$i<=13;$i++): ?>
                        <label class="<?= ($i==4)?'uk-disabled':'' ?> <?= ($i==5)?'confirm':'' ?>">
                            <input class="uk-radio modal__booking__radio" type="radio" name="radioHour" checked>
                            <div class="modal__booking__boxHour">
                                <div class="uk-width">
                                    <div>12:30</div>
                                    <?php if ($i==4): ?>
                                    <div>(Reserved)</div>
                                    <?php endif; ?>

                                    <?php if ($i==5): ?>
                                        <div class="uk-flex uk-flex-middle uk-flex-center" style="font-size: 12px;">
                                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.1429 4.5C5.19739 4.5 2.80957 6.88781 2.80957 9.83333C2.80957 12.7789 5.19739 15.1667 8.1429 15.1667C11.0884 15.1667 13.4762 12.7789 13.4762 9.83333C13.4762 6.88781 11.0884 4.5 8.1429 4.5ZM8.1429 4.5V2.5M8.1429 7.16667V9.83333M6.80957 2.5H9.47624M11.9141 6.0621L12.8096 5.16667" stroke="#DF7D46" stroke-linecap="round"/>
                                            </svg>
                                            Chờ
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </label>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="item__36-18">
                <div class="modal__booking__label">Thông tin đặt phòng</div>
                <div class="uk-form-stacked item__12">
                    <fieldset class="uk-fieldset uk-grid-small uk-grid-24-m" uk-grid>

                        <div class="uk-width-1-2 uk-width-1-5@m">
                            <label class="uk-form-label section1__label" for="form-stacked-name">Họ và tên</label>
                            <div class="uk-form-controls">
                                <input class="uk-input section1__input" id="form-stacked-name" type="text" value="pham van A" placeholder="pham van A">
                            </div>
                        </div>
                        <div class="uk-width-1-2 uk-width-1-5@m">
                            <label class="uk-form-label section1__label" for="form-stacked-email">Email</label>
                            <div class="uk-form-controls">
                                <input class="uk-input section1__input" id="form-stacked-email" type="email" placeholder="Nhập email của bạn">
                            </div>
                        </div>
                        <div class="uk-width-1-2 uk-width-1-5@m">
                            <label class="uk-form-label section1__label" for="form-stacked-phone">Số điện thoại</label>
                            <div class="uk-form-controls">
                                <input class="uk-input section1__input" id="form-stacked-phone" type="tel" placeholder="Nhập số điện thoại của bạn">
                            </div>
                        </div>
                        <div class="uk-width-1-2 uk-width-1-5@m">
                            <label class="uk-form-label section1__label" for="form-stacked-vitri">Vị trí</label>
                            <div class="uk-form-controls">
                                <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                    <select aria-label="Custom controls">
                                        <option value="">Chọn vị trí của bạn</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button id="form-stacked-vitri" class="section1__btnSelect uk-width uk-text-left uk-position-relative uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-1-5@m">
                            <label class="uk-form-label section1__label" for="form-stacked-phong">Phòng</label>
                            <div class="uk-form-controls">
                                <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                    <select aria-label="Custom controls">
                                        <option value="">Chọn phòng</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button id="form-stacked-phong" class="section1__btnSelect uk-width uk-text-left uk-position-relative uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </div>
            </div>
        </div>
        <div class="uk-modal-footer">
            <div class="uk-flex-right" uk-grid>
                <div>
                    <a href="" class="section2__btn uk-button uk-button-secondary">Cancel</a>
                </div>
                <div>
                    <a href="" class="header__btn uk-button uk-button-primary">Booking Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal-media-youtube" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA" width="1920" height="1080" uk-video uk-responsive></iframe>
    </div>
</div>
<script>
    // UIkit.modal('#modal-bookroom').show();

    UIkit.util.on('#modal-bookroom', 'show', function () {
        // do something
        UIkit.tooltip('.tooltip1').show();
    });
</script>