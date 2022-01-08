<div class="h-36 mx-auto px-4 max-w-xl flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-4">
    <div class="relative w-full sm:w-3/6">
        <button id="category-dropdown-btn" type="button" class="relative w-full py-3 rounded text-md font-medium text-white bg-blue-700">
            <span>Catégories</span>
            <i class="block absolute right-4 top-1/2 transform -translate-y-1/2 text-md tranform fas fa-angle-down"></i>
        </button>
        <div id="category-dropdown" class="hidden z-50 absolute bg-white overscroll-contain mt-4 w-full h-48 text-center overflow-y-scroll scrollbar-hide shadow rounded">
            <ul>
                <li class="w-full py-3 border-b-2 cursor-pointer hover:bg-blue-700 hover:text-white ">Tous</li>
                <li class="w-full py-3 border-b-2 cursor-pointer hover:bg-blue-700 hover:text-white ">categorie</li>
                <li class="w-full py-3 border-b-2 cursor-pointer hover:bg-blue-700 hover:text-white ">categorie</li>
                <li class="w-full py-3 border-b-2 cursor-pointer hover:bg-blue-700 hover:text-white ">categorie</li>
                <li class="w-full py-3 border-b-2 cursor-pointer hover:bg-blue-700 hover:text-white ">categorie</li>
                <li class="w-full py-3 border-b-2 cursor-pointer hover:bg-blue-700 hover:text-white ">categorie</li>
                <li class="w-full py-3 border-b-2 cursor-pointer hover:bg-blue-700 hover:text-white ">categorie</li>
            </ul>
        </div>
    </div>
    <input class="w-full rounded text-center text-md px-6 py-3 bg-blue-200" placeholder="Mot-clé, tag, ..." />
</div>
<script>
    const categoryDropdownBtn = document.querySelector('#category-dropdown-btn')
    const categoryDropdown = document.querySelector('#category-dropdown')
    const categories = categoryDropdown.querySelectorAll('li')
    categoryDropdownBtn.onclick = () => {
        if(categoryDropdown.classList.contains('hidden')){
            categoryDropdown.classList.remove('hidden')
            categoryDropdown.classList.add('block')
        }
        else if(categoryDropdown.classList.contains('block')){
            categoryDropdown.classList.remove('block')
            categoryDropdown.classList.add('hidden')
        }
    }

    categories.forEach(category => {
        category.onclick = () => {
            categoryDropdownBtn.querySelector('span').textContent = category.innerText
            categoryDropdown.classList.remove('block')
            categoryDropdown.classList.add('hidden')
        }
    });


    document.onclick = (e) => {
        let isClickInside = categoryDropdown.contains(e.target) || categoryDropdownBtn.contains(e.target)
        if(!isClickInside)
        {
            categoryDropdown.classList.remove('block')
            categoryDropdown.classList.add('hidden')
        }
    }
</script>
