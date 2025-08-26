<div class="flex justify-center items-center">
    <div class="w-full overflow-hidden relative">
        <div class="flex transition-transform duration-500 ease-in-out gap-2" id="carousel">
            <div class="w-1/4 flex-shrink-0 p-2">
                <img src="assets/galery/1.jpg" alt="galery-1" class="w-full rounded-sm">
            </div>
            <div class="w-1/4 flex-shrink-0 p-2">
                <img src="assets/galery/3.jpg" alt="galery-3" class="w-full rounded-sm">
            </div>
            <div class="w-1/4 flex-shrink-0 p-2">
                <img src="assets/galery/4.jpg" alt="galery-4" class="w-full rounded-sm">
            </div>
            <div class="w-1/4 flex-shrink-0 p-2">
                <img src="assets/galery/5.jpg" alt="galery-5" class="w-full rounded-sm">
            </div>
            <div class="w-1/4 flex-shrink-0 p-2">
                <img src="assets/galery/6.jpg" alt="galery-6" class="w-full rounded-sm">
            </div>
        </div>
        <button onclick="prevSlide()" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2">❮</button>
        <button onclick="nextSlide()" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2">❯</button>
    </div>

    <script>
        let index = 0;
        function showSlide() {
            const carousel = document.getElementById("carousel");
            carousel.style.transform = `translateX(-${index * (100 / 4)}%)`;
        }
        function prevSlide() {
            index = (index > 0) ? index - 1 : 0;
            showSlide();
        }
        function nextSlide() {
          const totalSlides = document.querySelectorAll("#carousel div").length;
          const maxIndex = totalSlides - 4;
            index = (index < 1) ? index + 1 : maxIndex;
            showSlide();
        }
 </script>
</div>