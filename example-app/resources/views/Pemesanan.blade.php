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
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <div class="grid gap-6 mb-6 ml-5 mr-5">
            <div>
                <label for="no_hp" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">No HP</label>
                <input type="text" id="no_hp" name="no_hp"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="085320XXXXX" required />
            </div>
        </div>
        <div>
            <p class="ml-5 mb-5 font-extrabold">Alamat</p>
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-2 ml-5 mr-5">
            <div>
                <label for="province"
                    class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Provinsi</label>
                <select name="province" id="province-select" onchange="updateOtherSelect('province','city')"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <!-- Options will be populated by JavaScript -->
                </select>
            </div>
            <div>
                <label for="city"
                    class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Kabupaten</label>
                <select name="city" id="city-select" onchange="updateOtherSelect('city','kecamatan')"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <!-- Options will be populated by JavaScript -->
                </select>
            </div>
            <div>
                <label for="kecamatan"
                    class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Kecamatan</label>
                <select name="kecamatan" id="kecamatan-select" onchange="updateOtherSelect('kecamatan','kelurahan')"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <!-- Options will be populated by JavaScript -->
                </select>
            </div>
            <div>
                <label for="kelurahan"
                    class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Desa</label>
                <select name="kelurahan" id="kelurahan-select"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <!-- Options will be populated by JavaScript -->
                </select>
            </div>
            <div>
                <label for="jalan" class="block mb-2 mt-5 text-sm font-extrabold text-gray-900 dark:text-white">Jalan</label>
                <input type="text" id="jalan" name="jalan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" required />
                <div>
                    <p class="mb-5 mt-1 text-xs">Lengkapi alamat anda dengan menambahkan nama jalan,RT/RW,dan patokan.
                    </p>
                </div>
            </div>

            <div>
                <label for="no_rumah" class="block mb-2 mt-5 text-sm font-extrabold text-gray-900 dark:text-white">No
                    Rumah</label>
                <input type="tel" id="no_rumah" name="no_rumah"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="123-45-678" required />
            </div>
        </div>
        <div class="ml-5 mr-5">
            <div>
                <label for="jenis_produk" class="block mb-2 mt-5 text-sm font-extrabold text-gray-900 dark:text-white">Jenis
                    Produk</label>
                <select id="jenis_produk" name="jenis_produk" onchange="calculateTotal()"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled>Pilih jenis produk anda</option>
                    <option value="T_shirt_LP">T shirt Lengan Panjang - Rp. 100,000</option>
                    <option value="T_shirt_LP">T shirt Lengan Pendek - Rp. 80,000</option>
                    <option value="Kemeja_PDH_LP">Kemeja PDH Lengan Panjang - Rp. 150,000</option>
                    <option value="Kemeja_PDH_LP">Kemeja PDH Lengan Pendek - Rp. 120,000</option>
                </select>
            </div>
            <div>
                <label for="jenis_kain" class="block mb-2 mt-5 text-sm font-extrabold text-gray-900 dark:text-white">Jenis
                    Kain</label>
                <select id="jenis_kain" name="jenis_kain" onchange="calculateTotal()"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled>Pilih jenis kain anda</option>
                    <option value="Cotton_Combed_24s_30s">Cotton Combed 24s/30s - Rp. 50,000</option>
                    <option value="Japan_Drill">Japan Drill - Rp. 70,000</option>
                    <option value="American_Drill">American Drill - Rp. 60,000</option>
                </select>
            </div>
            <div>
                <label for="ukuran"
                    class="block mb-2 mt-5 text-sm font-extrabold text-gray-900 dark:text-white">Ukuran</label>
                <select id="ukuran" name="ukuran" onchange="calculateTotal()"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled>Pilih ukuran anda</option>
                    <option value="S">S - Rp. 10,000</option>
                    <option value="M">M - Rp. 15,000</option>
                    <option value="L">L - Rp. 20,000</option>
                    <option value="XL">XL - Rp. 25,000</option>
                    <option value="XXL">XXL - Rp. 30,000</option>
                    <option value="3XL">3XL - Rp. 35,000</option>
                    <option value="4XL">4XL - Rp. 40,000</option>
                    <option value="5XL">5XL - Rp. 45,000</option>
                </select>
            </div>
            <div>
                <label for="jumlah_produk"
                    class="block mb-2 mt-5 text-sm font-extrabold text-gray-900 dark:text-white">Jumlah Produk</label>
                <input type="number" id="jumlah_produk" name="jumlah_produk" onchange="calculateTotal()"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Masukkan jumlah produk" required />
            </div>

            <label class="block mb-2 mt-5 text-sm font-extrabold text-gray-900 dark:text-white " for="file_input">Upload
                file</label>
            <input type="file" name="upload_foto"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="file_input">
            <div class="mb-6">
                <div>
                    <p class="mt-1 mb-5 text-xs">Silahkan masukan desain logo berupa JPG, PNG yang ingin Anda gunakan.
                        Apabila tidak mempunyai logo, silahkan cantumkan no WA di dalam deskripsi untuk request
                        pembuatan logo.</p>
                </div>
                <label for="deskripsi"
                    class="block text-sm font-extrabold text-gray-900 dark:text-white mt-5">Deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi"
                    class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <p class="mb-5 text-xs">Silahkan masukan desain logo yang ingin Anda gunakan. Apabila tidak mempunyai
                    logo, silahkan cantumkan no WA di dalam deskripsi untuk request pembuatan logo.</p>
                </div>
            <div>
                <label for="total_harga" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Total
                    Harga</label>
                <input type="text" id="total_harga" name="total_harga" readonly
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <label class="block mb-2 mt-5 text-sm font-extrabold text-gray-900 dark:text-white " for="file_input">Upload Bukti Pembayaran</label>
            <input type="file" name="bukti"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="file_input">
        </div>
        <div class="flex items-start mb-6">
        <button type="submit" class="text-white mt-5 ml-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Submit</button>
        </div>
        
    </form>
    </div>
    <script>
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };
        const API_KEY = 'e69d8e0bff26c6bfc63d275ddb0e24a5ced607a11d933271af2e0bdab099f6a8';
        (async () => {
            const province = await fetch(`https://api.binderbyte.com/wilayah/provinsi?api_key=${API_KEY}`,
                    requestOptions)
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
            const toApi = await fetch(
                    `https://api.binderbyte.com/wilayah/${pathApi}?api_key=${API_KEY}&${keyApi}=${fromValue}`,
                    requestOptions)
                .then(response => response.json());
            const toItemElement = toApi.value.map(item =>
                `<option value="${item.id}">${item.name}</option>`
            ).join('');
            const toSelectElement = document.querySelector(`select[name="${to}"]`);
            toSelectElement.innerHTML = toItemElement;
        };
        document.addEventListener('DOMContentLoaded', function () {
            const hargaProduk = {
                'T_shirt_LP': 100000,
                'T_shirt_LP': 80000,
                'Kemeja_PDH_LP': 150000,
                'Kemeja_PDH_LP': 120000
            };

            const hargaKain = {
                'Cotton_Combed_24s_30s': 50000,
                'Japan_Drill': 70000,
                'American_Drill': 60000
            };

            const hargaUkuran = {
                'S': 10000,
                'M': 15000,
                'L': 20000,
                'XL': 25000,
                'XXL': 30000,
                '3XL': 35000,
                '4XL': 40000,
                '5XL': 45000
            };

            const jenisProdukSelect = document.getElementById('jenis_produk');
            const jenisKainSelect = document.getElementById('jenis_kain');
            const ukuranSelect = document.getElementById('ukuran');
            const jumlahProdukInput = document.getElementById('jumlah_produk');
            const totalHargaInput = document.getElementById('total_harga');

            function calculateTotal() {
                const jenisProduk = jenisProdukSelect.value;
                const jenisKain = jenisKainSelect.value;
                const ukuran = ukuranSelect.value;
                const jumlahProduk = jumlahProdukInput.value;

                if (jenisProduk && jenisKain && ukuran && jumlahProduk) {
                    const totalHarga = (hargaProduk[jenisProduk] + hargaKain[jenisKain] + hargaUkuran[ukuran]) *
                        jumlahProduk;
                    totalHargaInput.value = 'Rp. ' + totalHarga.toLocaleString('id-ID');
                } else {
                    totalHargaInput.value = '';
                }
            }

            jenisProdukSelect.addEventListener('change', calculateTotal);
            jenisKainSelect.addEventListener('change', calculateTotal);
            ukuranSelect.addEventListener('change', calculateTotal);
            jumlahProdukInput.addEventListener('input', calculateTotal);
        });

    </script>
</x-app-layout>
