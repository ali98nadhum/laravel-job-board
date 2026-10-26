@props(['active' => false])

@php
     $currnt = 'bg-gray-900 text-white';
     $default = 'text-gray-300 hover:bg-gray-700 hover:text-white';
     
 @endphp


<a  class="{{ $active ? $currnt : $default }}" {{ $attributes }}>
  {{ $slot }}
</a>