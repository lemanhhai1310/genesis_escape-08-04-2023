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
<script>
    UIkit.notification({message:'<span class="nofication__iconSuccess" uk-icon="icon: check"></span> The action that you have done was a success! Well done', pos: 'top-right',status:'success',timeout:5000});
</script>
<?php require "template-parts/layouts/footer.php"; ?>