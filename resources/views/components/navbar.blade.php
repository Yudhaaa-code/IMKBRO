<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-12" src="img/logo 1.png"  alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            </div>
          </div>
        </div>
        <div class="relative w-49 transition-all">
          <input
            type="text"
            placeholder="Search..."
            id="searchInput"
            class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-full outline-none transition-all border-gray-300"
          />
          <div class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </div>
        </div>
      
        <script>
          const searchInput = document.getElementById('searchInput');
          const searchContainer = searchInput.parentElement;
          const searchIcon = searchContainer.querySelector('svg');
      
          searchInput.addEventListener('focus', () => {
            searchContainer.classList.add('w-64');
            searchContainer.classList.remove('w-48');
            searchInput.classList.remove('border-gray-300');
            searchInput.classList.add('border-blue-500');
            searchIcon.classList.add('text-blue-500');
            searchIcon.classList.remove('text-gray-400');
          });
      
          searchInput.addEventListener('blur', () => {
            searchContainer.classList.add('w-48');
            searchContainer.classList.remove('w-64', 'bg-white');
            searchInput.classList.add('border-gray-300');
            searchInput.classList.remove('border-blue-500');
            searchIcon.classList.add('text-gray-400');
            searchIcon.classList.remove('text-blue-500');
          });
        </script>
          <!-- Mobile menu button -->
        </div>
      </div>
    </div>
    <div class="relative w-49 transition-all">
      <div class="absolute inset-y-0 left-0 flex items-center pl-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        </svg>
      </div>
    </div>
  
    <script>
      const searchInput = document.getElementById('searchInput');
      const searchContainer = searchInput.parentElement;
      const searchIcon = searchContainer.querySelector('svg');
  
      searchInput.addEventListener('focus', () => {
        searchContainer.classList.add('w-64');
        searchContainer.classList.remove('w-48');
        searchInput.classList.remove('border-gray-300');
        searchInput.classList.add('border-blue-500');
        searchIcon.classList.add('text-blue-500');
        searchIcon.classList.remove('text-gray-400');
      });
  
      searchInput.addEventListener('blur', () => {
        searchContainer.classList.add('w-48');
        searchContainer.classList.remove('w-64', 'bg-white');
        searchInput.classList.add('border-gray-300');
        searchInput.classList.remove('border-blue-500');
        searchIcon.classList.add('text-gray-400');
        searchIcon.classList.remove('text-blue-500');
      });
    </script>
        </div>
      </div>
    </div>

  </nav>