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

    {{-- start blog --}}
    <section class="p-6">
      <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 gap-8 items-center">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="{{ asset('storage/'.$blog->img) }}" class="w-full h-96 object-cover" alt="Blog Image">
                    </div>
                    <div class="p-6">
                        <a href="{{ route('blogs.detail', $blog->id) }}" class="text-xl font-semibold text-gray-900 hover:text-blue-500">{{ $blog->getTranslation('title', app()->getLocale()) }}</a>
                        <p class="text-gray-600 mt-2">{!! strip_tags($blog->getTranslation('desc', app()->getLocale()), '<h1><br><h2><strong><ol><li><br>') !!}</p>
                        <a href="{{ route('blogs.index', $blog) }}" class="text-blue-500 font-semibold mt-4 inline-block">Back <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    {{-- end blog --}}


    @include('layouts.footer')
  </body>
</html>