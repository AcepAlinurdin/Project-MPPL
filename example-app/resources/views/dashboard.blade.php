<x-app-layout>
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 md:h-96 overflow-hidden rounded-lg">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out md:block" data-carousel-item>
                <img src="{{ asset('images/ruangan (1).jpg') }}" class="absolute block w-full h-full object-cover"
                    alt="Baju">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out md:block" data-carousel-item>
                <img src="{{ asset('images/ruangan (2).jpg') }}" class="absolute block w-full h-full object-cover"
                    alt="Baju">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out md:block" data-carousel-item>
                <img src="{{ asset('images/ruangan (3).jpg') }}" class="absolute block w-full h-full object-cover"
                    alt="Baju">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out md:block" data-carousel-item>
                <img src="{{ asset('images/ruangan (4).jpg') }}" class="absolute block w-full h-full object-cover"
                    alt="Baju">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out md:block" data-carousel-item>
                <img src="{{ asset('images/ruangan (5).jpg') }}" class="absolute block w-full h-full object-cover"
                    alt="Baju">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div>
        <p class="font-bold text-center mt-7 text-2xl mb-5">Tentang kami</p>
    </div>
    <div>
        <p class="px-5 text-center">
            Konveksi AR Production adalah penyedia pakaian berkualitas tinggi, mengkhususkan diri dalam pembuatan
            T-shirt dan kemeja PDH. Kami menawarkan berbagai pilihan seperti T-shirt lengan pendek, lengan panjang,
            serta kemeja PDH lengan pendek dan panjang, yang semuanya terbuat dari bahan katun atau sintetis terbaik.

            Produk kami dirancang untuk kenyamanan dan profesionalisme, dilengkapi dengan kancing, kerah, dan saku. Kami
            memahami pentingnya penampilan yang rapi dan profesional, sehingga setiap detail dipikirkan dengan cermat
            untuk memberikan pengalaman terbaik bagi pelanggan.

            Kami siap melayani kebutuhan pakaian dalam jumlah besar maupun kecil, dengan kemampuan menyesuaikan produk
            sesuai permintaan khusus. Dengan tim yang berpengalaman, kami berkomitmen untuk terus berinovasi dan
            meningkatkan kualitas layanan dan produk kami. Terima kasih telah mempercayakan kebutuhan pakaian Anda
            kepada Konveksi AR Production.
        </p>
        <div class="flex flex-col items-center py-10 bg-gray-100">
    <a href="https://wa.me/0882000882684" class="bg-red-800 hover:bg-red-900 text-white font-medium rounded-lg text-sm px-6 py-3 shadow-md transition duration-300 ease-in-out">Hubungi via WhatsApp</a>
</div>
    </div>

    <div>
    <p class="font-bold text-center mt-7 text-2xl">Produk kami</p>
</div>
<div class="flex flex-wrap">
    <div class="w-full sm:w-1/2 md:w-1/4 p-4">
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl dark:bg-gray-800 dark:border-gray-700">
                <img class="w-full h-96 object-cover rounded-t-lg" src="{{ asset('images/satu (1).png') }}" alt="" />
            <div class="p-4">
                    <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">T-Shirt Lengan Pendek</h5>
                <p class="text-sm font-normal text-gray-700 dark:text-gray-400">
                    T-shirt lengan pendek adalah pakaian kasual dengan lengan setengah panjang. Terbuat dari katun
                    atau bahan sintetis, tanpa kancing atau kerah, dan sering dihiasi dengan berbagai cetakan.
                    Nyaman dan serbaguna.
                </p>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-1/2 md:w-1/4 p-4">
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl dark:bg-gray-800 dark:border-gray-700">
                <img class="w-full h-96 object-cover rounded-t-lg" src="{{ asset('images/satu (2).png') }}" alt="" />
            </a>
            <div class="p-4">
                    <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">T-Shirt Lengan Panjang</h5>
                <p class="text-sm font-normal text-gray-700 dark:text-gray-400">
                    T-shirt lengan panjang adalah pakaian kasual dengan lengan penuh. Terbuat dari katun atau bahan
                    sintetis, tanpa kancing atau kerah, dan sering dihiasi dengan berbagai cetakan. Nyaman dan
                    serbaguna untuk aktivitas sehari-hari.
                </p>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-1/2 md:w-1/4 p-4">
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl dark:bg-gray-800 dark:border-gray-700">
                <img class="w-full h-96 object-cover rounded-t-lg" src="{{ asset('images/satu (4).png') }}" alt="" /> 
            <div class="p-4">
                    <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Kemeja PDH Lengan Pendek</h5>
                <p class="text-sm font-normal text-gray-700 dark:text-gray-400">
                    Kemeja PDH lengan pendek adalah seragam formal dengan lengan setengah panjang. Terbuat dari
                    katun atau bahan sintetis, memiliki kancing dan kerah, serta sering dilengkapi dengan saku.
                    Nyaman dan rapi untuk aktivitas profesional.
                </p>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-1/2 md:w-1/4 p-4">
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl dark:bg-gray-800 dark:border-gray-700">
                <img class="w-full h-96 object-cover rounded-t-lg" src="{{ asset('images/satu (3).png') }}" alt="" />
            </a>
            <div class="p-4">
                    <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Kemeja PDH Lengan Panjang</h5>

                <p class="text-sm font-normal text-gray-700 dark:text-gray-400">
                    Kemeja PDH lengan panjang adalah seragam formal dengan lengan penuh. Terbuat dari katun atau
                    bahan sintetis, memiliki kancing dan kerah, serta sering dilengkapi dengan saku. Nyaman dan rapi
                    untuk aktivitas profesional.
                </p>
            </div>
        </div>
    </div>
</div>


    <div>
    <p class="font-bold text-center mt-7 text-2xl">Apa yang berbeda dari kami?</p>
</div>
<div class="flex flex-col md:flex-row">
    <div class="w-full md:w-1/2 p-4 flex flex-col">
        <div class="flex-1 p-2">
            <div class="bg-white h-full p-6 text-center shadow-lg rounded-2xl" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 9px;">
                <p class="text-black  font-bold text-xl">Kualitas Bahan Terbaik</p>
                <p class="text-black mt-2">AR Production hanya menggunakan bahan-bahan berkualitas tinggi yang tahan lama dan nyaman dipakai, memastikan kepuasan pelanggan kami.</p>
            </div>
        </div>
        <div class="flex-1 p-2">
            <div class="bg-white h-full p-6 text-center shadow-lg rounded-2xl" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 9px;">
                <p class="text-black font-bold text-xl">Desain Kreatif dan Inovatif</p>
                <p class="text-black mt-2">Tim desain kami selalu mengikuti tren terbaru dan menghadirkan desain yang unik dan inovatif untuk setiap produk konveksi kami.</p>
            </div>
        </div>
    </div>
    <div class="w-full md:w-1/2 p-4 flex flex-col">
        <div class="flex-1 p-2">
            <div class="bg-white h-full p-6 text-center shadow-lg rounded-2xl" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 9px;">
                <p class="text-black  font-bold text-xl">Harga Kompetitif</p>
                <p class="text-black mt-2">Kami menawarkan harga yang sangat kompetitif tanpa mengorbankan kualitas, memastikan produk kami dapat dijangkau oleh berbagai kalangan.</p>
            </div>
        </div>
        <div class="flex-1 p-2">
            <div class="bg-white h-full p-6 text-center shadow-lg rounded-2xl" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 9px;">
                <p class="text-black  font-bold text-xl">Pelayanan Pelanggan Terbaik</p>
                <p class="text-black mt-2">Kami selalu mengutamakan kepuasan pelanggan dengan memberikan layanan pelanggan yang responsif dan ramah, siap membantu kapan saja.</p>
            </div>
        </div>
    </div>
</div>

    </div>

</x-app-layout>
