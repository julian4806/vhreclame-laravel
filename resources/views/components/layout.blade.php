<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Website</title>
    @vite(['resources/css/app.css', 'resources/js/navbar.js'])
</head>

<body>
    <x-header></x-header>
    {{ $slot }}
    <x-footer></x-footer>
</body>

</html>
