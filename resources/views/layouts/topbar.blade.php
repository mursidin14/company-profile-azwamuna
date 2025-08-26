<!-- Topbar Start -->
<div class="w-full bg-gray-100 py-2 hidden lg:block">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="border-r border-primary pr-3">
                    <a href="#" class="text-gray-600 text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        Jl. Moh Paleo 2 No. 14, Antang, Manggala, Makassar, Sulawesi Selatan, 90234
                    </a>
                </div>
                <div>
                    <a href="mailto:example@gmail.com" class="text-gray-600 text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                        </svg>
                        alhazualmubarakazwamuna@gmail.com
                    </a>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div class="flex space-x-3 border-r border-primary pr-3">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-4">
                            <path d="M22.676 0H1.326C.593 0 0 .594 0 1.326v21.348C0 23.406.593 24 1.326 24H12.89v-9.283H9.692v-3.622h3.198V8.408c0-3.17 1.936-4.894 4.764-4.894 1.355 0 2.518.101 2.855.146v3.312l-1.96.001c-1.536 0-1.833.73-1.833 1.799v2.359h3.666l-.478 3.622h-3.188V24h6.255c.732 0 1.326-.594 1.326-1.326V1.326C24 .594 23.406 0 22.676 0z"/>
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-4">
                            <path d="M24 4.556a9.835 9.835 0 01-2.828.775 4.93 4.93 0 002.164-2.724 9.86 9.86 0 01-3.127 1.194 4.919 4.919 0 00-8.384 4.482A13.953 13.953 0 011.671 3.15a4.917 4.917 0 001.523 6.556 4.903 4.903 0 01-2.228-.616v.061a4.917 4.917 0 003.946 4.827 4.905 4.905 0 01-2.224.084 4.922 4.922 0 004.601 3.417A9.867 9.867 0 010 21.543a13.936 13.936 0 007.548 2.212c9.051 0 14-7.496 14-14 0-.213-.005-.426-.014-.637A10.017 10.017 0 0024 4.557z"/>
                        </svg>     
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-4">
                            <path d="M22.23 0H1.77C.792 0 0 .774 0 1.729v20.542C0 23.226.792 24 1.77 24h20.462C23.208 24 24 23.226 24 22.271V1.729C24 .774 23.208 0 22.23 0zM7.05 20.452H3.523V9H7.05v11.452zM5.285 7.536a2.044 2.044 0 110-4.088 2.044 2.044 0 010 4.088zm15.167 12.916h-3.524v-5.616c0-1.338-.026-3.064-1.869-3.064-1.87 0-2.155 1.46-2.155 2.968v5.712H9.391V9h3.385v1.561h.049c.471-.896 1.623-1.84 3.342-1.84 3.574 0 4.233 2.35 4.233 5.404v6.326z"/>
                        </svg>
                          
                    </a>
                </div>
                <form action="{{ url('lang/en') }}" method="GET">
                    <button type="submit" class="cursor-pointer border-r pr-3 h-4 flex items-center">En</button>
                </form>
                <form action="{{ url('lang/id') }}" method="GET">
                    <button type="submit" class="cursor-pointer">Id</button>
                </form>                
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<script>
    document.getElementById('languageDropdown').addEventListener('click', function() {
        document.getElementById('languageMenu').classList.toggle('hidden');
    });
</script>
