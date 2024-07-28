<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>SC-TECHNT</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords"
          content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="Phoenixcoded">
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon"><!-- [Page specific CSS] start -->
    <link href="../assets/css/plugins/animate.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          rel="stylesheet"><!-- [Page specific CSS] end --><!-- [Font] Family -->
    <link rel="stylesheet" href="../assets/fonts/inter/inter.css" id="main-font-link">
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="../assets/fonts/feather.css">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/material.css"><!-- [Template CSS Files] -->
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">
    <link rel="stylesheet" href="../assets/css/style-preset.css">
    <link rel="stylesheet" href="../assets/css/landing.css">
    <script src="../assets/js/tech-stack.js"></script>
    <style type="text/css">.danmu {
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            -ms-user-select: none
        }

        .danmu > * {
            position: absolute;
            white-space: nowrap
        }

        .danmu-switch {
            width: 32px;
            height: 20px;
            border-radius: 100px;
            background-color: #ccc;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            outline: none;
            cursor: pointer;
            position: relative;
            text-align: center;
            margin: 10px auto
        }

        .danmu-switch.danmu-switch-active {
            padding-left: 12px;
            background-color: #f85959
        }

        .danmu-switch span.txt {
            width: 20px;
            height: 20px;
            line-height: 20px;
            text-align: center;
            display: block;
            border-radius: 100px;
            background-color: #fff;
            -webkit-box-shadow: -2px 0 0 0 rgba(0, 0, 0, .04);
            box-shadow: -2px 0 0 0 rgba(0, 0, 0, .04);
            font-family: PingFangSC;
            font-size: 10px;
            font-weight: 500;
            color: #f44336
        }</style>
</head>

<body data-pc-preset="preset-9" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
      data-pc-theme_contrast="" data-pc-theme="dark" class="landing-page">

@yield('content')

<script src="../assets/js/pcoded.js"></script>
<script src="../assets/js/plugins/feather.min.js"></script>
<script src="../assets/js/plugins/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="../assets/js/plugins/Jarallax.js"></script>
<script>layout_change('dark');</script>
<script>change_box_container('false');</script>
<script>layout_caption_change('true');</script>
<script>layout_rtl_change('false');</script>
<script>preset_change('preset-9');</script>
<script>main_layout_change('vertical');</script>

<script>// Start [ Menu hide/show on scroll ]
    let ost = 0;
    document.addEventListener('scroll', function () {
        let cOst = document.documentElement.scrollTop;
        if (cOst == 0) {
            document.querySelector('.navbar').classList.add('top-nav-collapse');
        } else if (cOst > ost) {
            document.querySelector('.navbar').classList.add('top-nav-collapse');
            document.querySelector('.navbar').classList.remove('default');
        } else {
            document.querySelector('.navbar').classList.add('default');
            document.querySelector('.navbar').classList.remove('top-nav-collapse');
        }
        ost = cOst;
    });
    // End [ Menu hide/show on scroll ]
    var wow = new WOW({
        animateClass: 'animated'
    });
    wow.init();

    // slider start
    $('.screen-slide').owlCarousel({
        loop: true,
        margin: 30,
        center: true,
        nav: false,
        dotsContainer: '.app_dotsContainer',
        URLhashListener: true,
        items: 1
    });
    $('.workspace-slider').owlCarousel({
        loop: true,
        margin: 30,
        center: true,
        nav: false,
        dotsContainer: '.workspace-card-block',
        URLhashListener: true,
        items: 1.5
    });
    // slider end
    // marquee start
    $('.marquee').marquee({
        duration: 500000,
        pauseOnHover: true,
        startVisible: true,
        duplicated: true
    });
    $('.marquee-1').marquee({
        duration: 500000,
        pauseOnHover: true,
        startVisible: true,
        duplicated: true,
        direction: 'right'
    });
    // marquee end</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var links = document.querySelectorAll('.instant-link');

        links.forEach(function (link) {
            link.addEventListener('click', function (e) {
                var url = link.getAttribute('href');
            });
        });
    });
</script>


</body>
</html>
