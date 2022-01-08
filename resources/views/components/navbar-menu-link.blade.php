@props(['name','link'])
<li>
    <a href="{{ $link }}"
        class="block py-2 pr-4 pl-3 text-white rounded md:p-0 hover:text-personal-red transition duration-300 dark:text-white"
        aria-current="page">{{ $name }}</a>
</li>
