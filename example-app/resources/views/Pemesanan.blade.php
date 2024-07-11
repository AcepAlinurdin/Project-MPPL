<x-app-layout>
    <div>
        <p class="text-3xl ml-5 font-extrabold mb-5 mt-5">Form Pemesanan</p>
    </div>
    @if($errors->any())
    <div class="mb-4 text-red-600">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form id="pemesananForm" action="{{ route('pemesanan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid gap-6 mb-6 ml-5 mr-5">
            <div>
                <label for="phone" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">No HP</label>
                <input type="text" id="phone" name="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="085320XXXXX" required />
            </div>
        </div>
        <div>
            <p class="ml-5 mb-5 font-extrabold">Alamat</p>
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-2 ml-5 mr-5">
            <div>
                <label for="province" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Provinsi</label>
                <select name="province" id="province-select" onchange="updateOtherSelect('province','city')"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <!-- Options will be populated by JavaScript -->
                </select>
            </div>
            <div>
                <label for="city" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Kabupaten</label>
                <select name="city" id="city-select" onchange="updateOtherSelect('city','kecamatan')"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <!-- Options will be populated by JavaScript -->
                </select>
            </div>
            <div>
                <label for="kecamatan" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Kecamatan</label>
                <select name="kecamatan" id="kecamatan-select" onchange="updateOtherSelect('kecamatan','kelurahan')"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <!-- Options will be populated by JavaScript -->
                </select>
            </div>
            <div>
                <label for="kelurahan" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Desa</label>
                <select name="kelurahan" id="kelurahan-select"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <!-- Options will be populated by JavaScript -->
                </select>
            </div>
            <div>
                <label for="jalan" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Jalan</label>
                <input type="text" id="jalan" name="jalan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" required />
                    <div>
                <p class="mb-5 mt-1 text-xs">Lengkapi alamat anda dengan menambahkan nama jalan,RT/RW,dan patokan. </p>
            </div>
            </div>
           
            <div>
                <label for="no_rumah" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">No Rumah</label>
                <input type="tel" id="no_rumah" name="no_rumah"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="123-45-678" required />
            </div>
        </div>
        <div class="ml-5 mr-5">
            <div>
                <label for="jenis_produk" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Jenis Produk</label>
                <select id="jenis_produk" name="jenis_produk"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih jenis kain anda</option>
                    <option value="T shirt">T shirt Lengan Panjang</option>
                    <option value="Kolor">T shirt lengan pendek</option>
                    <option value="Celana pendek">Kemeja PDH lengan pendek</option>
                    <option value="Kaos kaki">Kemeja PDH lengan panjang</option>
                </select>
            </div>
            <div>
                <p class="mb-5 mt-1 text-xs">Jika Jenis Kain yang Anda ingin tidak terdapat di pilihan silahkan tambahkan di form Deskripsi</p>
            </div>

            <div>
                <label for="jenis_kain" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Jenis Kain</label>
                <select id="jenis_kain" name="jenis_kain"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih jenis produk anda</option>
                    <option value="T shirt">Cotton Combed 24s/30s</option>
                    <option value="Kolor">Japan Drill</option>
                    <option value="Celana pendek">American Drill</option>
                </select>
            </div>

            <!-- <div>
                <label for="jenis_kain" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Jenis kain</label>
                <input type="text" id="jenis_kain" name="jenis_kain"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Katun" required />
            </div> -->
            <div>
                <p class="mt-1 text-xs">Jika Jenis Produk yang Anda ingin tidak terdapat di pilihan silahkan tambahkan di form Deskripsi</p>
            </div>
        </div>
        <div>
            <p class="ml-5 mt-5"><b>Ukuran :</b>Jika ukuran yang Anda miliki lebih dari satu ukuran dan jumlah produk yang berbeda-beda silakan tambahkan di form Deskripsi.</p>
        </div>
        <div class="ml-5">
            @foreach(['S', 'M', 'L', 'XL', 'XXL', '3XL', '4XL', '5XL'] as $size)
                <label class="inline-flex items-center">
                    <input type="checkbox" name="ukuran_checkbox[]" value="{{ $size }}" class="form-checkbox">
                    <span class="ml-2">{{ $size }}</span>
                </label>
            @endforeach
        </div>
        <input type="hidden" id="ukuran" name="ukuran">
        <div class="ml-5 mr-5">
            <div>
                <label for="jumlah_produk" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Jumlah Produk</label>
                <input type="text" id="jumlah_produk" name="jumlah_produk"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white

 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Masukan Berapa banyak produk yang anda butuhkan" required />
            </div>
            <div>
                <p class="mt-1 mb-5 text-xs">Jika Jumlah Produk yang ingin di pesan berbeda-beda pada tiap "Ukuran/size" silakan tambahkan di form Deskripsi</p>
            </div>
            <label class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white" for="file_input">Upload file</label>
            <input type="file" name="upload_foto"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="file_input">
            <div class="mb-6">
                <div>
                    <p class="mt-1 mb-5 text-xs">Silahkan masukan desain logo berupa JPG, PNG yang ingin Anda gunakan. Apabila tidak mempunyai logo, silahkan cantumkan no WA di dalam deskripsi untuk request pembuatan logo.</p>
                </div>
                <label for="deskripsi" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white mt-5">Deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi"
                    class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <p class="mb-5 text-xs">Silahkan masukan desain logo yang ingin Anda gunakan. Apabila tidak mempunyai logo, silahkan cantumkan no WA di dalam deskripsi untuk request pembuatan logo.</p>
            </div>
        </div>
        <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value=""
                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                    required />
            </div>
            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a
                    href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
    <script>
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };
        const API_KEY = 'e69d8e0bff26c6bfc63d275ddb0e24a5ced607a11d933271af2e0bdab099f6a8';
        (async () => {
            const province = await fetch(`https://api.binderbyte.com/wilayah/provinsi?api_key=${API_KEY}`, requestOptions)
                .then(response => response.json());
            const provinceItemElement = province.value.map(item =>
                `<option value="${item.id}">${item.name}</option>`
            ).join('');
            const provinceSelectElement = document.querySelector('select[name="province"]');
            provinceSelectElement.innerHTML = provinceItemElement;
        })();
        const updateOtherSelect = async (from, to) => {
            const fromElement = document.querySelector(`select[name="${from}"]`);
            const fromValue = fromElement.value;
            let keyApi = 'id_kecamatan';
            let pathApi = '';
            switch (from) {
                case 'province':
                    keyApi = 'id_provinsi';
                    pathApi = 'kabupaten';
                    break;
                case 'city':
                    keyApi = "id_kabupaten";
                    pathApi = 'kecamatan';
                    break;
                default:
                    keyApi = "id_kecamatan";
                    pathApi = 'kelurahan';
                    break;
            }
            const toApi = await fetch(`https://api.binderbyte.com/wilayah/${pathApi}?api_key=${API_KEY}&${keyApi}=${fromValue}`, requestOptions)
                .then(response => response.json());
            const toItemElement = toApi.value.map(item =>
                `<option value="${item.id}">${item.name}</option>`
            ).join('');
            const toSelectElement = document.querySelector(`select[name="${to}"]`);
            toSelectElement.innerHTML = toItemElement;
        };

        document.getElementById('pemesananForm').addEventListener('submit', function (event) {
            const checkboxes = document.querySelectorAll('input[name="ukuran_checkbox[]"]:checked');
            const sizes = Array.from(checkboxes).map(checkbox => checkbox.value).join(',');
            document.getElementById('ukuran').value = sizes;
        });
    </script>
</x-app-layout>
