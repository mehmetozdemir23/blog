@props(['icon', 'percent'])
<div class="w-full flex items-center h-16">
    <div class="w-20 flex flex-col justify-center items-center">
        @if (isset($icon))
            <i class="text-3xl text-gray-200 {{ $icon }}"></i>
        @endif
        {{ $slot }}
    </div>
    <div class="flex flex-col w-full bg-gray-400">
        <div class="relative bg-personal-red border-2 border-personal-red" style="width:{{ $percent }}%">
            <div class="flex flex-col items-center absolute -right-0 -bottom-2 transform translate-x-1/2">
                <div class="rounded text-xs text-gray-200 border-2 border-gray-200 px-2 py-1">
                    {{ $percent }}%
                </div>
                <i class="transform -translate-y-1/2 ml-1 text-gray-200 fas fa-caret-down"></i>
            </div>
        </div>
    </div>
</div>
