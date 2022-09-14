<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jobick : Job Admin Bootstrap 5 Template">
    <meta property="og:title" content="Jobick : Job Admin Bootstrap 5 Template">
    <meta property="og:description" content="Jobick : Job Admin Bootstrap 5 Template">
    <meta property="og:image" content="https://jobick.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Jobick Job Seller</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="{{ asset('/assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">

</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">


@yield('seller')

</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('assets') }}/vendor/global/global.min.js"></script>
<script src="{{ asset('assets') }}/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="{{ asset('assets') }}/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

{{--<!-- Apex Chart -->--}}
{{--<script src="{{ asset('assets') }}/vendor/apexchart/apexchart.js"></script>--}}

{{--<script src="{{ asset('assets') }}/vendor/chart.js/Chart.bundle.min.js"></script>--}}

{{--<!-- Chart piety plugin files -->--}}
{{--<script src="{{ asset('assets') }}/vendor/peity/jquery.peity.min.js"></script>--}}

<!-- Dashboard 1 -->
<script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>

<script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.js') }}"></script>

<script src="{{ asset('assets/js/custom.min.js') }}"></script>
<script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>
<script src="{{ asset('assets/js/demo.js') }}"></script>
<script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>
<script src="{{ asset('assets/js/toastr.min.js') }}"></script>

<script>
    @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>

<script>
    // function JobickCarousel()
    // {
    //
    //     /*  testimonial one function by = owl.carousel.js */
    //     jQuery('.front-view-slider').owlCarousel({
    //         loop:false,
    //         margin:30,
    //         nav:true,
    //         autoplaySpeed: 3000,
    //         navSpeed: 3000,
    //         autoWidth:true,
    //         paginationSpeed: 3000,
    //         slideSpeed: 3000,
    //         smartSpeed: 3000,
    //         autoplay: false,
    //         animateOut: 'fadeOut',
    //         dots:true,
    //         navText: ['', ''],
    //         responsive:{
    //             0:{
    //                 items:1
    //             },
    //
    //             480:{
    //                 items:1
    //             },
    //
    //             767:{
    //                 items:3
    //             },
    //             1750:{
    //                 items:3
    //             }
    //         }
    //     })
    // }

    // jQuery(window).on('load',function(){
    //     setTimeout(function(){
    //         JobickCarousel();
    //     }, 1000);
    // });
</script>

</body>
</html>
