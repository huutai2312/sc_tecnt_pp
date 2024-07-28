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
    <!-- [Favicon] icon -->
    <link rel="icon" href="https://ableproadmin.com/assets/images/favicon.svg" type="image/x-icon">
    <!-- [Font] Family -->
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
    <link rel="stylesheet" href="../assets/fonts/material.css">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">
    <link rel="stylesheet" href="../assets/css/style-preset.css">
</head>

<body data-pc-preset="preset-9" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
      data-pc-theme_contrast="" data-pc-theme="dark">

@include('includes.pre-loader')
@include('includes.sidebar')
@include('includes.header')

@yield('content')

@include('includes.footer')
{{--@include('includes.tab-custom')--}}

<script defer data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script defer src="../assets/js/plugins/apexcharts.min.js"></script>
<script defer src="../assets/js/pages/dashboard-default.js"></script>
<script defer src="../assets/js/plugins/popper.min.js"></script>
<script defer src="../assets/js/plugins/simplebar.min.js"></script>
<script defer src="../assets/js/plugins/bootstrap.min.js"></script>
<script preload src="../assets/js/fonts/custom-font.js"></script>
<script defer src="../assets/js/pcoded.js"></script>
<script defer src="../assets/js/plugins/feather.min.js"></script>
{{-- <script defer src="../assets/js/pages/dashboard-finance.js"></script> --}}
<script>layout_change('dark');</script>
<script>change_box_container('false');</script>
<script>layout_caption_change('true');</script>
<script>layout_rtl_change('false');</script>
<script>preset_change('preset-9');</script>
<script>main_layout_change('vertical');</script>

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
