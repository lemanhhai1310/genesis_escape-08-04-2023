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
<div id="modal-email" class="uk-flex-top modal__acc" uk-modal>
    <div class="uk-modal-dialog modal__dialog1 w408 uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-body modal__body uk-text-center">
            <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="72" height="72" rx="36" fill="#DF7D46" fill-opacity="0.25"/>
                <path d="M36 28V40M36 46V46.02M33.615 16.7036L20.115 25.3826C18.7993 26.2285 18 27.7119 18 29.3079V42.6921C18 44.2881 18.7993 45.7715 20.115 46.6174L33.615 55.2964C35.0742 56.2345 36.9258 56.2345 38.385 55.2964L51.885 46.6174C53.2007 45.7715 54 44.2881 54 42.6921V29.3079C54 27.7119 53.2007 26.2285 51.885 25.3826L38.385 16.7036C36.9258 15.7655 35.0742 15.7655 33.615 16.7036Z" stroke="#DF7D46" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
            <div class="modal__confirm__title item__16">Vui lòng kiểm tra email!</div>
            <div class="item__16 modal__email__txt">Chúng tôi đã gởi một mã CODE đến email tranngocthevinh60@gmail.com của bạn, mã code có thời hạn là 30 phút</div>
        </div>
        <div class="uk-modal-footer modal__footer">
            <div class="uk-child-width-1-2 uk-grid-small" uk-grid>
                <div>
                    <button href="" class="header__btn uk-width uk-button uk-button-primary">Go to email</button>
                </div>
                <div>
                    <button class="uk-button modal__acc__btnCancel uk-width uk-button-default uk-modal-close" type="button">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    UIkit.modal('#modal-email').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>