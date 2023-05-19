<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @isset($title)
            {{ $title }} |
        @endisset {{ config('app.name', __('appname')) }}
    </title>
    @include('layouts.partials.styles')
    @stack('styles')
    @livewireStyles
</head>

<body class="bg-white">

    <div id="app1">
        @auth
            <div class="flex-grow-1">


                <div class="p-3 min-height" style="overflow-x: hidden">
                    @yield('content')
                </div>
            </div>
        @endauth
    </div>




</body>
@include('layouts.partials.scripts')

@livewireScripts
@stack('script')

</html>
