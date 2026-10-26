<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Job Board - {{ $title ?? 'Find Your Next Career Move' }} </title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-50 text-slate-900 antialiased">
      <header class="sticky top-0 z-50 bg-linear-to-r from-indigo-700 via-indigo-600 to-violet-600 shadow-lg">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
          <a href="/" class="flex items-center gap-2.5">
            <span class="flex size-10 items-center justify-center rounded-xl bg-white/20 ring-1 ring-white/30">
              <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.09-.89 1.97-1.98 1.97H5.73a1.98 1.98 0 0 1-1.98-1.97v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.66V8.7a2.2 2.2 0 0 0-1.98-2.2h-3.77m4.99 7.65a2.25 2.25 0 0 1-.75.51L12 17.25l-7.5-2.59a2.25 2.25 0 0 1-.75-.51m0 0A2.18 2.18 0 0 1 3 12.49V8.7a2.2 2.2 0 0 1 1.98-2.2h3.77m0 0V5.25A2.25 2.25 0 0 1 11 3h2a2.25 2.25 0 0 1 2.25 2.25V6.5m-6.5 0h6.5" />
              </svg>
            </span>
            <span class="text-xl font-bold tracking-tight text-white">Job<span class="text-amber-300">Board</span></span>
          </a>

          <div id="nav-menu" class="hidden items-center gap-1 md:flex">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
          </div>

          <div class="hidden md:block">
            <a href="/" class="rounded-full bg-amber-400 px-5 py-2 text-sm font-semibold text-indigo-950 shadow transition hover:bg-amber-300">
              Browse Jobs
            </a>
          </div>

          <button type="button" aria-label="Toggle menu"
                  onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                  class="rounded-lg p-2 text-white hover:bg-white/10 md:hidden">
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
            </svg>
          </button>
        </nav>

        <div id="mobile-menu" class="hidden border-t border-white/15 px-4 pb-4 pt-2 md:hidden">
          <div class="flex flex-col gap-1">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
          </div>
        </div>
      </header>

      {{ $slot }}
    </body>
</html>
