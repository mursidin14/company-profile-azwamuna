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
      <img src="assets/avatar_2.jpg" alt="avatar about" class="absolute top-0 left-0 w-full object-cover" style="min-height:250px" />
    
    <!-- Overlay -->
    <div class="absolute top-0 left-0 w-full bg-black opacity-50 text-white" style="min-height:250px">
      </div>
      <div class="relative flex items-center justify-center text-white text-center" style="height:250px">
            <div class="space-y-4">
              <h3 class="text-2xl md:text-xl font-bold"><a href="{{route('home')}}" class="text-md text-gray-400">Home </a>/ Contact Us</h3>
            </div>
        </div>
    </section>
    {{-- end thumbnil --}}

    {{-- start contact --}}
    <section class="p-6">
      <div class="container mx-auto">
        <h1 class="text-center text-3xl font-bold mb-1 text-gray-800">Contact</h1>
        <div class="border-t-2 w-18 mx-auto mb-6"></div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div class="flex justify-center">
                <img src="{{ url('assets/avatar.jpg') }}" class="w-full max-w-md" alt="Contact Image">
            </div>
            <div>
                <h4 class="text-blue-500 text-lg font-semibold py-2">Send Your Message</h4>
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" class="p-3 border rounded w-full" placeholder="Your Name">
                        <input type="email" class="p-3 border rounded w-full" placeholder="Your Email">
                        <input type="text" class="p-3 border rounded w-full" placeholder="Your Phone">
                        <textarea class="p-3 border rounded w-full col-span-2" rows="4" placeholder="Message"></textarea>
                    </div>
                    <button class="bg-blue-500 text-white w-full py-3 mt-4 rounded">Send Message</button>
                </form>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-10 text-center">
            <div>
                <div class="text-blue-500 text-2xl mb-2"><i class="fas fa-map-marker-alt"></i></div>
                <h4 class="font-semibold">Address</h4>
                <p>Jl. Moh Paleo 2 No. 14, Antang, Manggala, Makassar, Sulawesi Selatan, 90234</p>
            </div>
            <div>
                <div class="text-blue-500 text-2xl mb-2"><i class="fas fa-envelope"></i></div>
                <h4 class="font-semibold">Mail Us</h4>
                <p>alhazualmubarakazwamuna@gmail.com</p>
            </div>
            <div>
                <div class="text-blue-500 text-2xl mb-2"><i class="fa fa-phone-alt"></i></div>
                <h4 class="font-semibold">Telephone</h4>
                <p>(+628) 539 774 754 6</p>
            </div>
            <div>
                <div class="text-blue-500 text-2xl mb-2"><i class="fab fa-firefox-browser"></i></div>
                <h4 class="font-semibold">Website</h4>
                <p>azwamuna.com</p>
            </div>
        </div>
        
        <div class="mt-10">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.6242684114854!2d119.47553017603656!3d-5.163995294813364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee310ef510393%3A0x3fb6524eef72f84a!2sJl.%20Moh.%20Paleo%202%20No.14%2C%20Antang%2C%20Kec.%20Manggala%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan%2090234!5e0!3m2!1sid!2sid!4v1739848752928!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </section>
    {{-- end contact --}}

    @include('layouts.footer')
  </body>
</html>