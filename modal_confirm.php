<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div id="fullpage">
    <?php require "template-parts/layouts/section1.php"; ?>
    <?php require "template-parts/layouts/section2.php"; ?>
    <?php require "template-parts/layouts/section3.php"; ?>

    <?php require "template-parts/layouts/section4.php"; ?>
    <?php require "template-parts/layouts/section5.php"; ?>
</div>
<div id="modal-confirm" class="uk-flex-top modal__acc" uk-modal>
    <div class="uk-modal-dialog modal__dialog1 w440 uk-margin-auto-vertical">
        <div class="uk-modal-header modal__header">
            <div class="modal__confirm__title">Xác nhận thông tin đặt phòng</div>
            <button class="uk-modal-close-default" type="button" uk-close></button>
        </div>
        <div class="uk-modal-body modal__body">
            <div class="uk-child-width-expand uk-grid-24" uk-grid>
                <div>
                    <div class="modal__confirm__box1 uk-padding-small uk-text-center">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 20.9161V13.9161C9 13.3638 9.44772 12.9161 10 12.9161H14C14.5523 12.9161 15 13.3638 15 13.9161V20.9161M4 18.9161V11.3571C4 10.1574 4.53851 9.02098 5.46705 8.26126L10.7335 3.95233C11.4703 3.34955 12.5297 3.34955 13.2665 3.95233L18.533 8.26126C19.4615 9.02098 20 10.1574 20 11.3571V18.9161C20 20.0207 19.1046 20.9161 18 20.9161H16H8H6C4.89543 20.9161 4 20.0207 4 18.9161Z" stroke="#7D807E" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <div>Room 1</div>
                    </div>
                </div>
                <div>
                    <div class="modal__confirm__box1 uk-padding-small uk-text-center">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 6.5C7.58172 6.5 4 10.0817 4 14.5C4 18.9183 7.58172 22.5 12 22.5C16.4183 22.5 20 18.9183 20 14.5C20 10.0817 16.4183 6.5 12 6.5ZM12 6.5V3.5M12 10.5V14.5M10 3.5H14M17.6569 8.84315L19 7.5" stroke="#7D807E" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <div>Slot 1</div>
                    </div>
                </div>
            </div>
            <div class="item__16 uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="modal__confirm__txt1">Họ và tên:</div>
                </div>
                <div class="uk-width-auto">
                    <div class="modal__confirm__txt1" style="color: #EEFEFB;">Hoang Van A</div>
                </div>
            </div>
            <div class="item__16 uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="modal__confirm__txt1">Email:</div>
                </div>
                <div class="uk-width-auto">
                    <div class="modal__confirm__txt1" style="color: #EEFEFB;">hoangvana@gmail.com</div>
                </div>
            </div>
            <div class="item__16 uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="modal__confirm__txt1">Số điện thoại:</div>
                </div>
                <div class="uk-width-auto">
                    <div class="modal__confirm__txt1" style="color: #EEFEFB;">085858544</div>
                </div>
            </div>
            <div class="item__16 uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="modal__confirm__txt1">Số lượng:</div>
                </div>
                <div class="uk-width-auto">
                    <div class="modal__confirm__txt1" style="color: #EEFEFB;">2</div>
                </div>
            </div>
            <div class="item__16 uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="modal__confirm__txt1">Voucher:</div>
                </div>
                <div class="uk-width-auto">
                    <div class="uk-label uk-label-warning modal__confirm__label">-15,000,000</div>
                </div>
            </div>
            <div class="item__33 modal__confirm__box1">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <div class="modal__confirm__txt2">Tổng giá:</div>
                    </div>
                    <div class="uk-width-auto">
                        <div class="modal__confirm__txt2" style="color: #AF9533;">300.000.000VND</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-modal-footer modal__footer">
            <div class="uk-child-width-1-2 uk-grid-small" uk-grid>
                <div>
                    <button href="" class="header__btn uk-width uk-button uk-button-primary">Reserve now</button>
                </div>
                <div>
                    <button class="uk-button modal__acc__btnCancel uk-width uk-button-default uk-modal-close" type="button">Huỷ</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    UIkit.modal('#modal-confirm').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>