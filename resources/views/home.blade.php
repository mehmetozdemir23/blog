<x-layout>
    <section class="flex flex-col lg:flex-row justify-center h-full font-montserrat">
        <div class="h-full pt-24 flex flex-col items-center space-y-12">
            <div class="flex text-gray-200 text-center">
                <div class="text-6xl text-personal-red">
                    Mehmet Ozdemir
                </div>
            </div>
            <div class="text-gray-400 text-2xl md:text-3xl">Développeur web back-end</div>
            <div class="flex space-x-6 text-gray-200">
                <x-social-media-link icon="fab fa-facebook-f" />
                <x-social-media-link icon="fab fa-twitter" />
                <x-social-media-link icon="fab fa-instagram" />
                <x-social-media-link icon="fab fa-linkedin-in" />
            </div>
        </div>

        <div class="hidden w-96 border-2 border-white"></div>


    </section>
    {{-- <section id="services"
        class="border border-white flex flex-col items-center h-full mx-4 md:mx-auto pb-4 font-montserrat ">
        <div class="text-xl mx-auto text-gray-200">Services</div>
        <div class="mx-auto mt-6 mb-8 w-12 border-2 border-personal-red"></div>
        <div class="bg-card-gray p-4 rounded-md">
            <svg class="w-16 fill-current text-personal-red" version="1.0" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512">
                <path
                    d="M294.1 66.7c-2.7 2.6-6.9 16.5-55.2 183.8-28.7 99.5-52.3 182.5-52.3 184.3 0 5 2.9 7.1 14.5 10.3 5.6 1.6 11.1 2.9 12.1 2.9s3.1-1.2 4.7-2.8c2.7-2.5 6.9-16.4 55.2-183.7 28.7-99.6 52.3-182.5 52.3-184.3 0-5-2.9-7.1-14.5-10.3-5.6-1.6-11.1-2.9-12.1-2.9s-3.1 1.2-4.7 2.7zM136.4 117.5c-1.6.7-32.9 31.4-69.6 68.2C4.1 248.4 0 252.7 0 256c0 3.3 4.1 7.6 66.8 70.3 36.7 36.8 67.6 67.3 68.7 67.9 4.7 2.6 7.5 1.3 17.1-8.3 5.1-5.1 9.5-10.2 9.8-11.5.3-1.2.1-3.5-.5-5.1-.5-1.5-25.8-27.6-56.2-58.1L50.5 256l55.2-55.3c30.4-30.4 55.7-56.5 56.2-58 .6-1.6.8-3.9.5-5.1-.7-2.9-18.2-20.2-21-20.8-1.2-.3-3.4 0-5 .7zM370.5 116.8c-2.7.5-20.2 17.9-20.9 20.8-.3 1.2-.1 3.5.5 5.1.5 1.5 25.8 27.6 56.2 58l55.2 55.3-55.2 55.2c-30.4 30.5-55.7 56.6-56.2 58.1-.6 1.6-.8 3.9-.5 5.1.3 1.3 4.7 6.4 9.8 11.5 9.6 9.6 12.4 10.9 17.1 8.3 1.1-.6 31.9-31 68.5-67.6 66-66.1 66.5-66.6 66.5-70.6s-.5-4.5-67-71c-36.8-36.8-68.1-67.3-69.5-67.8-1.4-.4-3.4-.6-4.5-.4z" />
            </svg>
            <p class="mb-4 text-md text-gray-200 tracking-tight">Développement Web</p>
            <div class="text-xs text-gray-400 mb-16">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
            <div class="inline-block text-center rounded-md border-2 border-personal-red p-1">
                <a href="#"
                    class="inline-block rounded-sm transition duration-400 hover:text-card-gray hover:bg-personal-red text-xs text-personal-red px-3 py-1">COMPETENCES</a>
            </div>
        </div>
    </section> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/seamless-scroll-polyfill@latest/lib/bundle.min.js"></script>
    <script>
        const scroll = document.querySelector('#scroll-down')
        const services = document.querySelector('#services')
        scroll.onclick = () => {
            seamless.elementScrollIntoView(services, {
                behavior: "smooth",
            });
        }
    </script> --}}

</x-layout>
