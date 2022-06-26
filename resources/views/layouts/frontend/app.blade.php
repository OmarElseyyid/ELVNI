<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{ asset('template/img/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('template/img/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('template/img/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template/img/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('template') }}/img/site.webmanifest.html">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="black">
    <link rel="stylesheet" href="{{ asset('template') }}/css/main.css@id=d3f5e3225442a08261f7.css" />
    <link rel="stylesheet" href="https://use.typekit.net/yqo5vxu.css" />
    <title>ELVNI</title>
    <meta name="generator" content="ELVNI">
    <meta name="keywords" content="ELVNİ At Çiftliği İZMİR - Binicilik Klubü , Kahvaltı ,Mangal">
    <meta name="description"
        content="Profesyonel kadrosuyla binicilik eğitimi ve misafirperverliğiyle sizleri farklı bir gün yaşamaya Elvni At Çiftliği İzmir e çağırıyoruz.">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta name="robots" content="all">
    <meta content="https://www.facebook.com/elvnietmangal/" property="fb:profile_id">
    <meta content="tr_TR" property="og:locale">
    <meta content="website" property="og:type">
    <meta content="https://elvniatciftligi.com/" property="og:url">
    <meta content="Ana Sayfa | ELVNİ At Çiftliği İZMİR |… | Binicilik Klubü , Kahvaltı ,Mangal" property="og:title">
    <meta
        content="Profesyonel kadrosuyla binicilik eğitimi ve misafirperverliğiyle sizleri farklı bir gün yaşamaya Elvni At Çiftliği İzmir e çağırıyoruz."
        property="og:description">
    {{-- site ss here!! <meta content="" property="og:image"> --}}
    <meta content="1200" property="og:image:width">
    <meta content="630" property="og:image:height">
    <link href="https://elvniatciftligi.com" rel="canonical">
    <link href="https://elvniatciftligi.com" rel="home">
    <link type="text/plain" href="humans.txt" rel="author">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        @media (min-width:481px) {

            /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */
            .video-container video {
                width: 100vw;
                height: 100vh;
                object-fit: cover;
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                z-index: -100;

            }

            .video-container {
                position: relative;

            }
        }

        @media (min-width:641px) {

            /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */
            .video-container video {
                width: 100vw;
                height: 100vh;
                object-fit: cover;
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                z-index: -100;
            }

            .video-container {
                position: relative;
            }
        }

        @media (min-width:961px) {

            /* tablet, landscape iPad, lo-res laptops ands desktops */
            .video-container video {
                width: 100vw;
                height: 100vh;
                object-fit: cover;
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                z-index: -100;
            }

            .video-container {
                position: relative;
            }
        }

        @media (min-width:1025px) {

            /* big landscape tablets, laptops, and desktops */
            .video-container video {
                width: 100vw;
                height: 100vh;
                object-fit: cover;
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                z-index: -100;
            }

            .video-container {
                position: relative;
            }

        }
    </style>

</head>

<body class="home" style="background-color: black;" onscroll="myFunction()">

    <section id="home-intro" class="hero full home video-container">
        <video id="fist" autoplay muted loop>
            <source src="{{ asset('template') }}/videos/fist.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
        <div class="icon-scroll"></div>
    </section>
    <div hidden>
        <video id="fist2" loop hidden>
            <source hidden src="{{ asset('template') }}/videos/fist.mp4" type="video/mp4" />
        </video>
    </div>


    @include('layouts.frontend.partial.header')

    @yield('content')

    @include('layouts.frontend.partial.footer')

    <!-- SCIPTS -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <script src="{{ asset('template') }}/js/manifest.js@id=d64713044d4b02b1808b"></script>
    <script src="{{ asset('template') }}/js/vendor.js@id=2dc5042273cace482b2d"></script>
    <script src="{{ asset('template') }}/js/main.js@id=bcf81981eefde18ebf2e"></script>
    {!! Toastr::message() !!}
    <script>
        function myFunction() {
            document.getElementById("fist2").play();
        }
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}', 'Error', {
                    closeButton: true,
                    progressBar: true,
                });
            @endforeach
        @endif
    </script>
</body>

</html>
