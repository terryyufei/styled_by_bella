@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-yellow-800 focus:ring-yellow-800 rounded-md shadow-sm']) !!}>
