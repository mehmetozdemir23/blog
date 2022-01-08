<x-layout>
    <article class="mx-auto p-4 max-w-4xl space-y-8 text-gray-200 flex flex-col items-center font-montserrat">
        <header>
            <h1 class="max-w-xl text-center text-3xl ">{{ $post->post_title }}</h1>
        </header>
        <main class="max-w-2xl p-4">
            <h4 class="mr-auto mb-4 text-gray-200">
                By {{ $post->author->user_user_name }}
            </h4>
            <div class="text-justify">
                {!! $post->post_body !!}
            </div>
        </main>
    </article>
</x-layout>
