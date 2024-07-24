<x-app-layout>
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('/example-app/public/images/baju.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Baju">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/baju.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Baju">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/baju.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Baju">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/baju.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Baju">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/baju.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Baju">
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
        <p type="" class="font-bold text-center mt-7 text-2xl mb-5">Tentang kami</p>
    </div>
    <div>
        <p class="ml-10 mr-10 text-center ">

Konveksi AR Production adalah penyedia pakaian berkualitas tinggi, mengkhususkan diri dalam pembuatan T-shirt dan kemeja PDH. Kami menawarkan berbagai pilihan seperti T-shirt lengan pendek, lengan panjang, serta kemeja PDH lengan pendek dan panjang, yang semuanya terbuat dari bahan katun atau sintetis terbaik.

Produk kami dirancang untuk kenyamanan dan profesionalisme, dilengkapi dengan kancing, kerah, dan saku. Kami memahami pentingnya penampilan yang rapi dan profesional, sehingga setiap detail dipikirkan dengan cermat untuk memberikan pengalaman terbaik bagi pelanggan.

Kami siap melayani kebutuhan pakaian dalam jumlah besar maupun kecil, dengan kemampuan menyesuaikan produk sesuai permintaan khusus. Dengan tim yang berpengalaman, kami berkomitmen untuk terus berinovasi dan meningkatkan kualitas layanan dan produk kami. Terima kasih telah mempercayakan kebutuhan pakaian Anda kepada Konveksi AR Production. <eveniet class="lore"></eveniet>
        </p>
    </div>

    <div>
        <p type="" class="font-bold text-center mt-7 text-2xl">Produk kami</p>
    </div>
    <div class="flex flex-wrap">
    <div class="w-1/4 p-4">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        T-Shirt Lengan Pendek
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                T-shirt lengan pendek adalah pakaian kasual dengan lengan setengah panjang. Terbuat dari katun atau bahan sintetis, tanpa kancing atau kerah, dan sering dihiasi dengan berbagai cetakan. Nyaman dan serbaguna untuk aktivitas sehari-hari.
                </p>
               
            </div>
        </div>
    </div>
    <div class="w-1/4 p-4">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        T-shirt Lengan Panjang
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                T-shirt lengan panjang adalah pakaian kasual dengan lengan penuh. Terbuat dari katun atau bahan sintetis, tanpa kancing atau kerah, dan sering dihiasi dengan berbagai cetakan. Nyaman dan serbaguna untuk aktivitas sehari-hari.
                </p>
               
            </div>
        </div>
    </div>
    <div class="w-1/4 p-4">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Kemeja PDH Lengan Pendek
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                Kemeja PDH lengan pendek adalah seragam formal dengan lengan setengah panjang. Terbuat dari katun atau bahan sintetis, memiliki kancing dan kerah, serta sering dilengkapi dengan saku. Nyaman dan rapi untuk aktivitas profesional.
                </p>
               
            </div>
        </div>
    </div>
    <div class="w-1/4 p-4">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Kemeja PDH Lengan Panjang                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                Kemeja PDH lengan panjang adalah seragam formal dengan lengan penuh. Terbuat dari katun atau bahan sintetis, memiliki kancing dan kerah, serta sering dilengkapi dengan saku. Nyaman dan rapi untuk aktivitas profesional.
                </p>
               
            </div>
        </div>
    </div>
    <div class="w-1/4 p-4">
    </div>
</div>

    <div>
        <p type="" class="font-bold text-center mt-7 text-2xl">Apa yang berbeda dari kami?</p>
    </div>
    <div>
    <div class="flex h-screen">
        <div class="w-1/2 ml-5">
            <div class="bg-red-500 h-full p-6 text-center">Kolom 1</div>
        </div>
        <div class="w-1/2 flex flex-col mr-5">
            <div class="flex-1 flex">
                <div class="w-1/2 ">
                    <div class="bg-blue-500 h-full  text-center">Kolom 1 di Baris 1 di Kolom 2</div>
                </div>
                <div class="w-1/2 ">
                    <div class="bg-green-500 h-full text-center">Kolom 2 di Baris 1 di Kolom 2</div>
                </div>
            </div>
            <div class="flex-1 ">
                <div class="bg-yellow-500 h-full  text-center">Baris 2 di Kolom 2</div>
            </div>
        </div>
    </div>
    </div>


</x-app-layout>
