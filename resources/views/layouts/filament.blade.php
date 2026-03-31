<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SonBanAcc Admin') }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
        <meta name="theme-color" content="#0b1020">

        <!-- Filament and App Styles -->
        @filamentStyles
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        
        {{ $slot }}

        @livewireScripts
        @filamentScripts
        @vite('resources/js/app.js')
        @stack('scripts')
    </body>
</html>
