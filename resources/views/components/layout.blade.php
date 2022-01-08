<!DOCTYPE html>
<html lang="en" class="light" style="color-scheme: light;">

<head>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Questrial&family=Space+Grotesk:wght@700&display=swap"
        rel="stylesheet">
</head>

<body class="h-screen flex flex-col bg-personal-gray">
    <x-navbar />
    <main class="mx-auto flex-1 relative w-full h-full overflow-y-scroll scrollbar-hide max-w-6xl">
        {{ $slot }}
    </main>
    <div id="btn-to-top"
        class="transition-opacity duration-700 ease-out opacity-0 fixed bottom-2 right-2 w-12 h-12 bg-personal-gray flex justify-center items-center rounded-full">
        <svg class="fill-personal-red text-personal-red" version="1.0" xmlns="http://www.w3.org/2000/svg" width="75%"
            viewBox="0 0 512 512">
            <path
                d="M247.5 64.3c-5.5 2.5-19.4 19.4-29.7 35.9-12.6 20.2-23.7 48.6-27.8 70.8-2.7 14.3-3.7 41.6-2.1 55.2 1 8.9 33.4 162.1 36.6 173.3 1.5 5.4 4.8 9.2 10.3 11.9 2.8 1.5 6.2 1.7 22.7 1.4l19.3-.3 3.9-3.1c2.1-1.6 4.6-4.6 5.5-6.5 1.6-3.3 34.8-159.7 36.8-173.4 1.5-10.6 1.2-36.9-.6-49.6-5-36-21.6-73.1-46.3-103.3-8.9-10.8-12-13-19.5-13.3-3.7-.2-7.3.2-9.1 1zm25.3 96.6c3.5 1.8 7.9 5.2 11 8.5 17.4 19.1 11.1 49.3-12.7 60.5-4.9 2.3-6.8 2.6-16.1 2.6-9.5 0-11-.3-16-2.8-7.6-3.9-15.3-11.7-18.7-19.1-2.4-5.3-2.8-7.3-2.8-15.6 0-8.5.3-10.2 3.1-16 3.6-7.7 10.7-15 17.9-18.5 10.1-5 24-4.8 34.3.4zM328.2 286.6c-.6 2.2-4.7 21.6-9.2 43.3-6.9 32.9-8 39.5-6.9 40.5 1.9 1.7 44.2 28.4 46.2 29.2 1.6.6 1.7-1.9 1.7-29.8v-30.4L344.6 311l-15.4-28.3-1 3.9zM180.8 287c-.8 1.4-7.7 13.8-15.2 27.6L152 339.7l.2 30.7.3 30.7 22.8-14.5c12.5-7.9 23.3-14.9 24-15.5 1.1-.9-.2-8.6-7.4-42-4.8-22.5-8.9-41.8-9.1-42.8-.3-1.6-.6-1.5-2 .7zM229.6 428.7c-.3 1-1.7 5.8-3.1 10.6-1.5 4.9-2.5 9.1-2.2 9.3.2.2 14.3.3 31.4.2l31-.3-3-10.8-3-10.7h-25.3c-23.2 0-25.3.1-25.8 1.7z" />
        </svg>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/seamless-scroll-polyfill@latest/lib/bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        smoothscroll.polyfill();
        const btnToTop = document.querySelector('#btn-to-top')
        const main = document.querySelector('main')
        btnToTop.onclick = () => {
            main.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        main.addEventListener('scroll', function(e) {
            if (main.scrollTop > 50) {
                btnToTop.classList.remove('opacity-0')
                btnToTop.classList.add('opacity-100')
            } else {
                btnToTop.classList.remove('opacity-100')
                btnToTop.classList.add('opacity-0')
            }
        })
    </script>

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

</body>

</html>
