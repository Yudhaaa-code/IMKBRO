<nav class="bg-zinc-900 shadow-md border-b border-gray-600 bg-opacity-90 backdrop-blur-md sticky top-0 z-50">
    <div class="p-4 mx-auto lg:max-w-5xl max-w-2xl">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <a class="flex items-center gap-3" href="/">
            <img class="size-32" src="img/logo-removebg-preview.png"  alt="Your Company">
            </a>
          </div>
          <div class="hidden md:block text-zinc-100">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a class="relativeflex items-center space-x-2 text-white hover:text-gray-300" href="/">
                <div class="flex items-center gap-2 text-base">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" class="size-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 3s-6.186 5.34-9.643 8.232c-.203.184-.357.452-.357.768 0 .553.447 1 1 1h2v7c0 .553.447 1 1 1h3c.553 0 1-.448 1-1v-4h4v4c0 .552.447 1 1 1h3c.553 0 1-.447 1-1v-7h2c.553 0 1-.447 1-1 0-.316-.154-.584-.383-.768-3.433-2.892-9.617-8.232-9.617-8.232z">
                    </path>
                  </svg>
                  Beranda
                </div>
            </a>
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
        searchInput.classList.add('border-gray-400');
        // searchIcon.classList.add('text-blue-500');
        searchIcon.classList.remove('text-gray-400');
      });
  
      searchInput.addEventListener('blur', () => {
        searchContainer.classList.add('w-48');
        searchContainer.classList.remove('w-64', 'bg-white');
        searchInput.classList.add('border-gray-300');
        // searchInput.classList.remove('border-blue-500');
        searchIcon.classList.add('text-gray-400');
        // searchIcon.classList.remove('text-blue-500');
      });
    </script>
        </div>
      </div>
    </div>

  </nav>