@props(['title'])
<div class="flex flex-col px-4 items-center w-full rounded bg-card-gray py-4">
    <p class="text-md text-gray-200 mb-4">{{ $title }}</p>
    {{ $slot }}
</div>
