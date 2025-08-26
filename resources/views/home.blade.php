<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>PT. Alhazu Almubarak Azwamuna</title>
  </head>
  <body>
    @include('layouts.topbar')
    @include('layouts.header')
    {{-- start thumbnil --}}
    <section class="thumbnil w-full text-center relative">
      <video class="absolute top-0 left-0 w-full object-cover" style="max-height:900px" autoplay loop muted playsinline>
        <source src="assets/export.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
    <!-- Overlay -->
    <div class="absolute top-0 left-0 w-full bg-black opacity-50 text-white" style="height:900px">
      </div>
      <div class="relative flex items-center justify-center text-white text-center" style="height:900px">
            <div class="space-y-4">
              <h1 class="text-4xl md:text-6xl font-bold">PT. Alhazu Almubarak Azwamuna</h1>
              <p>{{__('message.avatar_home')}}</p>
              <button id="scrollDownBtn" class="absolute text-white animate-bounce bg-blue-500 p-3 rounded-full">
                V
              </button>
            </div>
        </div>
    </section>
    {{-- end thumbnil --}}

    {{-- start card post --}}
    <section class="card bg-gray-300 p-6">
      <div class="container mx-auto" id="targetSection">
        <h1 class="text-center text-3xl font-bold mb-1 text-gray-800">{{ __('message.product') }}</h1>
        <div class="border-t-2 w-18 mx-auto mb-6"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($blogs as $blog)
              <div class="relative">
                  <a href="{{ route('blogs.detail', $blog->id) }}">
                    <img src="{{ asset('storage/'.$blog->img) }}" alt="asam" class="w-full h-48 object-cover rounded-lg" />
                    <div class="absolute bottom-0 left-0 right-0 bg-black opacity-50 p-2 text-white h-full flex items-center justify-center rounded-lg">{{$blog->title}}</div>
                  </a>
              </div>
            @endforeach
        </div>
      </div>
    </section>
    {{-- end card post --}}

    {{-- start visi misi --}}
    <section class="p-6">
      <div class="container mx-auto">
        <h1 class="text-center text-3xl font-bold mb-1 text-gray-800">{{ __('message.vimi') }}</h1>
        <div class="border-t-2 w-18 mx-auto mb-6"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Kolom Deskripsi -->
            <div class="space-y-5">
              <div class="text-gray-800">
                <h2 class="text-2xl font-semibold">{{ __('message.visi') }}</h2>
                <p class="text-lg">{{ __('message.vi') }}</p>
              </div>
              <div class="text-gray-800">
                <h2 class="text-2xl font-semibold">{{ __('message.misi') }}</h2>
                  <ul class="list-decimal list-inside text-lg">
                    @foreach ( __('message.mi') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                  </ul>
              </div>
            </div>
            <!-- Kolom Gambar -->
            <div>
                <img src="assets/owner.jpg" alt="Visi Misi" class="w-full rounded-lg shadow-lg">
            </div>
        </div>
    </div>
    </section>
    {{-- end visi misi --}}

    {{-- start kegiatan --}}
    @include('components.galery')
    {{-- end kegiatan --}}

    {{-- start alur --}}
    <section class="role py-12 px-6">
      <div class="container mx-auto">
        <h1 class="text-center text-3xl font-bold mb-1 text-gray-800">{{ __('message.pemesanan') }}</h1>
        <div class="border-t-2 w-18 mx-auto mb-6"></div>
        <div class="flex justify-center flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6">
          <!-- WhatsApp -->
          <div class="flex flex-col items-center">
              <img src="assets/alur/3.jpg" alt="WhatsApp" class="min-w-20 min-h-20 max-w-64 max-h-64">
              <p class="mt-2 text-lg font-semibold">{{ __('message.pesan') }}</p>
          </div>
          
          <!-- Arrow -->
          <div class="hidden md:block text-3xl">➡️</div>
          <div class="md:hidden text-3xl">⬇️</div>
          
          <!-- Pengumpulan Barang -->
          <div class="flex flex-col items-center">
              <img src="assets/alur/1.jpg" alt="Pengumpulan Barang" class="min-w-20 min-h-20 max-w-64 max-h-64">
              <p class="mt-2 text-lg font-semibold">{{ __('message.pengumpulan') }}</p>
          </div>
          
          <!-- Arrow -->
          <div class="hidden md:block text-3xl">➡️</div>
          <div class="md:hidden text-3xl">⬇️</div>
          
          <!-- Pengiriman Barang -->
          <div class="flex flex-col items-center">
              <img src="assets/alur/2.jpg" alt="Pengiriman Barang" class="min-w-20 min-h-20 max-w-64 max-h-64">
              <p class="mt-2 text-lg font-semibold">{{ __('message.pengiriman') }}</p>
          </div>
      </div>
      </div>
    </section>
    {{-- end start --}}

    {{-- start galery --}}
    <section class="galery bg-gray-300 pt-6 pb-12 px-6">
       <div class="container mx-auto">
         <h1 class="text-center text-3xl font-bold mb-1 text-gray-800">Galery</h1>
         <div class="border-t-2 w-18 mx-auto mb-6"></div>
                @include('components.carousel')
        </div>
    </section>
            {{-- end galery --}}

    @include('layouts.footer')
    <script>
      document.getElementById("scrollDownBtn").addEventListener("click", function() {
        document.getElementById("targetSection").scrollIntoView({ behavior: "smooth" });
      });
    </script>
  </body>
</html>