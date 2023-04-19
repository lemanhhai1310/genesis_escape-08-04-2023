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
<div id="modal-success" class="uk-flex-top modal__acc" uk-modal>
    <div class="uk-modal-dialog modal__dialog1 w408 uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-body modal__body uk-text-center">
            <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="72" height="72" rx="36" fill="#3EC975" fill-opacity="0.25"/>
                <path d="M52 26L31.4142 46.5858C30.6332 47.3668 29.3668 47.3668 28.5858 46.5858L20 38" stroke="#3EC975" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
            <div class="modal__confirm__title item__16">Đặt phòng thành công <span style="color: #3EC975;">#56456</span></div>
        </div>
        <div class="uk-modal-footer modal__footer">
            <div class="uk-child-width uk-grid-small" uk-grid>
                <div>
                    <button href="" class="header__btn uk-width uk-button uk-button-primary">Complete</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    UIkit.modal('#modal-success').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>