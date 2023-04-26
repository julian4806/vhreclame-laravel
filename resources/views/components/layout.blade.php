<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'VHReclame' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/js/jquery.min.js', 'resources/css/justifiedGallery.min.css', 'resources/js/jquery.justifiedGallery.min.js', 'resources/css/owl.carousel.min.css', 'resources/css/owl.theme.default.min.css', 'resources/js/owl.carousel.js', 'resources/scss/app.scss', 'resources/js/navbar.js', 'resources/js/slider.js'])
</head>

<body>
    <x-nav></x-nav>
    <div>
        {{ $slot }}
    </div>
    <x-footer></x-footer>
</body>

</html>
