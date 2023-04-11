<script type="text/javascript" src="assets/fullPage.js-master/vendors/easings.js"></script>
<script type="text/javascript" src="assets/fullPage.js-master/dist/fullpage.js"></script>
<script>
    var myFullpage = new fullpage('#fullpage', {
        verticalCentered: false,

        //to avoid problems with css3 transforms and fixed elements in Chrome, as detailed here: https://github.com/alvarotrigo/fullPage.js/issues/208
        css3:false,
        anchors: ['home', 'selectroom', 'guidleplay', 'testimonials', 'contact'],
        menu: '#menu',
        lazyLoad: true,
        navigation: true,
        navigationPosition: 'left',
    });
</script>
</div>
<!--/app-->
</body>
</html>