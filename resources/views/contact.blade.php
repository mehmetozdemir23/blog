<x-layout>
    <div class="flex flex-col h-full max-w-lg mx-auto">
        <div class="mx-auto mt-4 text-center text-lg text-gray-200 font-montserrat">Send me a message !</div>
        <form action="/contact" method="post" autocomplete="off" class="flex-1 flex flex-col p-4 space-y-4">
            @csrf
            <div class="bg-card-gray rounded">
                <input class="w-full text-gray-200 focus:ring-0 border-none rounded bg-transparent font-montserrat text-sm py-4" type="text" name="name" placeholder="Name or Company">
            </div>
            <div class="bg-card-gray rounded">
                <input class="w-full text-gray-200 focus:ring-0 border-none rounded bg-transparent font-montserrat text-sm py-4" type="email" name="email" placeholder="Email">
            </div>
            <div class="bg-card-gray rounded">
                <input class="w-full text-gray-200 focus:ring-0 border-none rounded bg-transparent font-montserrat text-sm py-4" type="text" name="subject" placeholder="Subject">
            </div>
            <textarea class="flex-1 block resize-none text-gray-200 focus:ring-0 text-sm w-full border-none rounded bg-card-gray font-montserrat" name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
            <button class="w-full text-center font-bold py-3 bg-personal-red rounded text-gray-200">Send</button>
        </form>
    </div>

</x-layout>
