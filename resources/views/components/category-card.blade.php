@props(['title'])
<div class='w-full bg-card-gray relative flex justify-center p-4 items-center space-x-4 text-gray-200'>
    <svg class="w-8 h-8 text-gray-100 fill-current" version="1.0" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512">
        {{ $slot }}
    </svg>
    <div class="font-montserrat font-bold text-md">{{ $title }}</div>

</div>
