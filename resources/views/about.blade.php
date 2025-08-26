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
      <img src="{{ url('assets/avatar_2.jpg') }}" alt="avatar about" class="absolute top-0 left-0 w-full object-cover" style="min-height:250px" />
    
    <!-- Overlay -->
    <div class="absolute top-0 left-0 w-full bg-black opacity-50 text-white" style="min-height:250px">
      </div>
      <div class="relative flex items-center justify-center text-white text-center" style="height:250px">
            <div class="space-y-4">
              <h3 class="text-2xl md:text-xl font-bold"><a href="{{route('home')}}" class="text-md text-gray-400">Home </a>/ About Us</h3>
            </div>
        </div>
    </section>
    {{-- end thumbnil --}}

        {{-- start alur --}}
        <section class="role py-12 px-6">
          <div class="container mx-auto">
            <h1 class="text-center text-3xl font-bold mb-1 text-gray-800">{{ __('message.about_title') }}</h1>
            <div class="border-t-2 w-18 mx-auto mb-6"></div>
            <div class="items-center space-y-4 md:space-y-0 md:space-x-6">
              <p class="text-lg"><b>{{ __('message.about_pt') }}</b> {{ __('message.about') }}</p>
              <p class="text-lg">{{ __('message.next_about') }}</p>
           </div>
          </div>
        </section>
        {{-- end start --}}

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

    @include('layouts.footer')
  </body>
</html>