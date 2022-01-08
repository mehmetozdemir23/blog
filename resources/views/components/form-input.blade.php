@props(['type', 'name', 'placeholder', 'value' => ''])

<div class="relative">
    <input autocomplete="off"
        {{ $attributes(['class' => 'w-full h-16 p-4 rounded bg-transparent border-2 border-gray-400 focus:border-gray-400 focus:ring-0 focus:border-personal-red  text-lg font-montserrat text-gray-200 placeholder-gray-400']) }}
        name="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}"
        value="{{ $value }}" />
    <i class="absolute right-4 top-1/2 transform -translate-y-1/2 text-transparent fas fa-asterisk"></i>
</div>
