<x-layout>
    <div class="mx-auto max-w-4xl p-8 flex flex-col space-y-4 items-center">
        @foreach ($posts as $post)
            <x-post-card :post="$post" />
        @endforeach
    </div>
</x-layout>
