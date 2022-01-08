@props(['post'])
<div class="w-full md:flex rounded bg-card-gray shadow-md font-montserrat">
    <section class="hidden sm:flex flex-shrink-0 flex justify-center items-center p-4 rounded-lg md:w-48">
        <img src="{{ asset('function.png') }}" class="w-96 mb-4 rounded" alt="">
    </section>
    <div class="p-2 sm:p-4 w-full flex flex-col justify-between space-y-4">
        <section class="w-full flex flex-col space-y-4 text-sm justify-between md:flex-row md:space-y-0 md:items-center">
            <div class="categories flex-1 flex flex-wrap justify-start text-white">
                <x-category-tag name="{{ $post->category->category_name }}" />
            </div>
            <div class="flex-shrink-0 date text-gray-500">{{ $post->created_at->diffForHumans() }}</div>
        </section>
        <section class="space-y-4 md:space-y-2">
            <div class="title text-2xl text-white">{{ $post->post_title }}</div>
            <div class="w-full leading-5 text-justify text-sm text-gray-400 md:max-w-xl">
                {{ $post->post_excerpt }}
            </div>
        </section>
        <section class="flex justify-end items-center">
            <a href="/posts/{{ $post->post_slug }}"
                class="inline-block text-3xl text-personal-red">
                <span class="block px-6 py-2 text-sm border border-personal-red rounded-full">Read</span>
            </a>
        </section>
    </div>
</div>
