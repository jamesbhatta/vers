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

<body class="sidebar-opened">

    <div id="app1">
        @guest
            @yield('content')
        @endguest

        @auth
            <div id="sidebar" class="bg-deep-blue" data-collapsed="false">
                <x-sidebar></x-sidebar>
            </div>
            <div id="content-area" class="flex-grow-1">
                <x-navbar></x-navbar>

                <div class="p-3 min-height" style="overflow-x: hidden">
                    @yield('content')
                </div>
            </div>
        @endauth
    </div>



<script src="{{asset('js/app.js')}}"></script>
</body>
@include('layouts.partials.scripts')

@livewireScripts
@stack('script')
</html>
