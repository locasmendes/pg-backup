<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }} - Passou Ganhou</title>
        @vite(['resources/css/app.css'])
        @livewireStyles
        <style>
            [x-cloak] {
                display: none;
            }
        </style>
    </head>
    <body class="antialiased" id="body">

       <x-header />
        <livewire:form-contact />
        <main>
            {{ $main }}
        </main>

        <x-footer />
        @livewireScripts
        @vite(['resources/js/app.js'])
    </body>
</html>
