<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button -->
              <button id="menu-toggle" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-none focus:ring-inset">
                  <span class="sr-only">Open main menu</span>
                  
                  <!-- Icon ketika menu tertutup -->
                  <svg id="menu-icon" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>

                  <!-- Icon ketika menu terbuka -->
                  <svg id="close-icon" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </button>
          </div>

          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-between">
              <div class="flex shrink-0 items-center px-3 py-2 text-sm font-medium text-gray-300">
                  <img class="h-8 w-auto" src="{{ asset('assets/logo.png') }}" alt="azwamuna">
                  PT.Alhazu Almubarak
              </div>
              <div class="hidden sm:ml-6 sm:block">
                  <div class="flex space-x-4">
                      <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'bg-gray-700 text-white px-3 py-2 text-sm font-medium rounded-md' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white'}}">Home</a>
                      <a href="{{ route('about') }}" class="{{ request()->is('about') ? 'bg-gray-700 text-white px-3 py-2 text-sm font-medium rounded-md' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">About</a>
                      <a href="{{ url('/blogs') }}" class="{{ request()->is('blogs') ? 'bg-gray-700 text-white px-3 py-2 text-sm font-medium rounded-md' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">Blogs</a>
                      <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'bg-gray-700 text-white px-3 py-2 text-sm font-medium rounded-md' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">Contact</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Mobile menu -->
  <div class="sm:hidden hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3">
          <a href="{{ url('/') }}" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Home</a>
          <a href="{{ url('/about') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
          <a href="{{ url('/blogs') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Blogs</a>
          <a href="{{ url('/contact') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
      </div>
  </div>
</nav>

<script>
  document.getElementById("menu-toggle").addEventListener("click", function () {
      const menu = document.getElementById("mobile-menu");
      const menuIcon = document.getElementById("menu-icon");
      const closeIcon = document.getElementById("close-icon");

      // Toggle class hidden
      menu.classList.toggle("hidden");
      menuIcon.classList.toggle("hidden");
      closeIcon.classList.toggle("hidden");
  });
</script>
