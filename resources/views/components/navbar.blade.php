<nav
    class="sticky top-0 z-50 bg-navbar-gray px-4 py-4 sm:px-10 sm:py-5 md:px-20 rounded dark:bg-gray-800 font-montserrat">
    <div class="relative container flex flex-wrap justify-between items-center mx-auto">
        <a href="/" class="block w-10">
            <svg class="fill-current text-personal-red" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 85 85" width="100%" height="100%">
                <path
                    d="M32.8 1.1c-12 2.8-23 12-28.7 23.9C.7 32.1.5 33.1.5 42.5S.7 52.9 4.1 60c4.6 9.6 11.2 16.3 20.5 20.7 35.6 16.9 73-20.6 56.1-56.1C72.1 6.4 52-3.4 32.8 1.1zm25.4 9.7c7.7 3.8 13 9.2 16.7 17.1 2.2 4.8 2.6 7 2.6 14.6 0 8.2-.3 9.7-3.3 15.7-3.8 7.7-9.2 13-17.1 16.7-4.7 2.2-7 2.6-14.6 2.6s-9.9-.4-14.6-2.6c-7.9-3.7-13.3-9-17.1-16.7-6-12.1-4.8-26 3.2-37 9.8-13.6 28.7-18 44.2-10.4z" />
                <path
                    d="M26.5 30.2c-.3 2.4-.9 9.6-1.3 16.2-.8 12.6-.6 13.1 4 12.4 2.2-.3 2.3-.7 2.8-10.8l.5-10.5 1.6 3.5c.9 1.9 2.6 5.9 3.9 8.7 1.8 4.2 2.7 5.3 4.5 5.3 1.8 0 2.7-1.1 4.5-5.3 1.3-2.8 3-6.8 3.9-8.7l1.6-3.5L53 48c.5 10.1.6 10.5 2.8 10.8 4.6.7 4.8.2 4-12.4-.4-6.6-1-13.8-1.3-16.2-.6-4.1-.8-4.3-3.8-4-2.7.3-3.6 1.1-5.8 5.3-1.4 2.8-3.3 7.1-4.3 9.5l-1.8 4.4-4.5-9.7c-4.5-9.4-4.7-9.7-7.9-9.7-3.1 0-3.3.2-3.9 4.2z" />
            </svg>
        </a>
        <div class="flex items-center md:order-2">
            <button type="button"
                class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 p-1 border-2 border-personal-gray hover:border-personal-red dark:focus:ring-gray-600"
                id="user-menu-button" aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="{{ asset('profile.jpg') }}" alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                id="dropdown">
                <div class="py-3 px-4">
                    <span class="block text-sm text-gray-900 dark:text-white">Mehmet Ozdemir</span>
                    <span
                        class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">m.ozd23@gmail.com</span>
                </div>
                <ul class="" aria-labelledby="dropdown">
                    <li>
                        <a href="#"
                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My
                            resume</a>
                    </li>
                </ul>
            </div>
            <button data-collapse-toggle="mobile-menu-2" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg border-2 border-personal-gray md:hidden  focus:outline-none hover:border-personal-red dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-md md:font-medium">
                <x-navbar-menu-link name="Home" link="/"></x-navbar-menu-link>
                <x-navbar-menu-link name="Technos" link="/technos"></x-navbar-menu-link>
                <x-navbar-menu-link name="Blog" link="/blog"></x-navbar-menu-link>
                <x-navbar-menu-link name="Contact" link="/contact"></x-navbar-menu-link>
                @auth
                    @can('admin')
                        <x-navbar-menu-link name="Admin" link="/admin"></x-navbar-menu-link>
                    @endcan
                @endauth
            </ul>
        </div>

    </div>

</nav>
