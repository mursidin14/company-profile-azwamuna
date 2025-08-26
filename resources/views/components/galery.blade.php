<section class="activities bg-gray-300 pt-6 pb-12 px-6" id="galery">
    <div class="container mx-auto">
        <h1 class="text-center text-3xl font-bold mb-1 text-gray-800">{{ __('message.kegiatan') }}</h1>
        <div class="border-t-2 w-18 mx-auto mb-6"></div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div class="relative">
                <a href="#galery" onclick="openModal('assets/kegiatan/1.jpg')">
                    <img src="assets/kegiatan/1.jpg" alt="kegiatan-1" class="w-full h-48 object-cover rounded-sm cursor-pointer" />
                </a>
            </div>
            <div class="relative">
                <a href="#galery" onclick="openModal('assets/kegiatan/2.jpg')">
                    <img src="assets/kegiatan/2.jpg" alt="kegiatan-2" class="w-full h-48 object-cover rounded-sm cursor-pointer"/>
                </a>
            </div>
            <div class="relative">
                <a href="#galery" onclick="openModal('assets/kegiatan/3.jpg')">
                    <img src="assets/kegiatan/3.jpg" alt="kegiatan-3" class="w-full h-48 object-cover rounded-sm cursor-pointer" />
                </a>
            </div>
            <div class="relative">
                <a href="#galery" onclick="openModal('assets/kegiatan/4.jpg')">
                    <img src="assets/kegiatan/4.jpg" alt="kegiatan-4" class="w-full h-48 object-cover rounded-sm cursor-pointer" />
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Modal untuk Zoom -->
<div id="imageModal" class="hidden fixed inset-0 bg-black bg-opacity-75 flex justify-center items-center z-50">
    <div class="relative">
        <img id="modalImage" src="" alt="Zoomed Image" class="max-w-full max-h-screen rounded-lg shadow-lg">
        <button onclick="closeModal()" class="absolute top-2 right-2 bg-white text-gray-800 rounded-full px-3 py-1 text-xl font-bold">&times;</button>
    </div>
</div>

<script>
    function openModal(imageSrc) {
        document.getElementById("modalImage").src = imageSrc;
        document.getElementById("imageModal").classList.remove("hidden");
    }

    function closeModal() {
        document.getElementById("imageModal").classList.add("hidden");
    }

    // Tutup modal saat klik di luar gambar
    document.getElementById("imageModal").addEventListener("click", function(event) {
        if (event.target === this) {
            closeModal();
        }
    });
</script>