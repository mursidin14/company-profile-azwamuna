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
    <div class="absolute top-0 left-0 w-full bg-black opacity-50 text-white" style="min-height: 250px">
      </div>
      <div class="relative flex items-center justify-center text-white text-center" style="height:250px">
            <div class="space-y-4">
              <h3 class="text-2xl md:text-xl font-bold"><a href="{{route('home')}}" class="text-md text-gray-400">Home </a>/ Blog</h3>
            </div>
        </div>
    </section>
    {{-- end thumbnil --}}

    {{-- start blog --}}
    <section class="p-6">
      <div class="container mx-auto">
        <h1 class="text-center text-3xl font-bold mb-1 text-gray-800">Blog</h1>
        <div class="border-t-2 w-18 mx-auto mb-6"></div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            @foreach ($blogs as $blog)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="{{ asset('storage/'.$blog->img) }}" class="w-full h-60 object-cover" alt="Blog Image">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between text-gray-500 text-sm mb-3">
                            <div><i class="fas fa-user text-blue-500"></i>{{ $blog->author }}</div>
                        </div>
                        <a href="{{ route('blogs.detail', $blog->id) }}" class="text-xl font-semibold text-gray-900 hover:text-blue-500">{{ $blog->getTranslation('title', app()->getLocale()) }}</a>
                        <p class="text-gray-600 mt-2">{!! Str::limit(strip_tags($blog->getTranslation('desc', app()->getLocale()), '<h1><br><h2><strong><ol><li><br>'), 250, '...') !!}</p>
                        <a href="{{ route('blogs.detail', $blog->id) }}" class="text-blue-500 font-semibold mt-4 inline-block">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </section>
    {{-- end blog --}}


    @include('layouts.footer')
  </body>
</html>