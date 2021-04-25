<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/guardian.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="{{ asset('js/guardian.js') }}" defer></script>
    {{ $styles ?? '' }}
    {{ $scripts ?? '' }}
</head>
<body class="guardian__dashboard">
    <x-guardian-fixed-flash></x-guardian-fixed-flash>
    <div class="grid">
        <x-guardian-sidebar-nav>
            <x-guardian-sidebar-nav-button href="{{ route('dashboard.posts.index') }}">
                <x-slot name="icon">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                </x-slot>
                List Post
            </x-guardian-sidebar-nav-button>
            <x-guardian-sidebar-nav-button href="{{ route('dashboard.posts.create') }}">
                <x-slot name="icon">
                    <svg  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                </x-slot>
                Create Post
            </x-guardian-sidebar-nav-button>
            <x-guardian-sidebar-nav-button href="{{ route('dashboard.tuts.create') }}">
                <x-slot name="icon">
                    <svg  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                </x-slot>
                Create Tut
            </x-guardian-sidebar-nav-button>
        </x-guardian-sidebar-nav>
        <main class="main">
            {{ $slot  }}
        </main>
    </div>

</body>
</html>
