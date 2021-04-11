<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title . ' - ' .config('app.name') ?? config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/backend.js') }}" defer></script>
</head>
<body>
    <x-menu></x-menu>
    {{ $slot }}
    <canvas id="hero-canvas" class="hero-canvas"></canvas>


    <svg>
        <defs>
            <filter id="wave">
                <feTurbulence type="fractalNoise" baseFrequency="0.00001 0.00001" numOctaves="1" result="wrap" />
                <feDisplacementMap in2="turbulence" in="SourceGraphic" scale="50" xChannelSelector="R" yChannelSelector="G"/>
            </filter>
        </defs>
    </svg>

</body>
</html>
