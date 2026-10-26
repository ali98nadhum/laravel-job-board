<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Job Board - {{ $title ?? 'Find Your Next Career Move' }} </title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
      <nav>
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
      </nav>

      {{ $slot }}
    </body>
</html>
