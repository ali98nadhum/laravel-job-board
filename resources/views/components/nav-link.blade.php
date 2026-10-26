@props(['active' => false])

@php
     $currnt = 'bg-white/15 text-white shadow-inner';
     $default = 'text-indigo-100 hover:bg-white/10 hover:text-white';
@endphp


<a class="rounded-full px-4 py-2 text-sm font-medium transition {{ $active ? $currnt : $default }}" {{ $attributes }}>
  {{ $slot }}
</a>
