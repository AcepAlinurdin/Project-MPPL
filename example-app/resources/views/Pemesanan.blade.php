<x-app-layout>
    <div>
        <p class="text-3xl ml-5 font-extrabold mb-5 mt-5">Form Pemesanan</p>
    </div>

    <form>
        <div class="grid gap-6 mb-6  ml-5 mr-5">
            <div>
                <label for="phone" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Phone
                    number</label>
                <input type="tel" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="085320XXXXX" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
            </div>
        </div>
        <div>
            <p class="ml-5 mb-5 font-extrabold">Alamat</p>
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-2 ml-5 mr-5">
            <div>
                <label for="first_name"
                    class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Kota</label>

                <select name="province" id="province-select" onchange="updateOtherSelect('province','city')">

                </select>
            </div>
            <div>
                <label for="last_name"
                    class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Kabupaten</label>
                <select name="city" id="city-select" onchange="updateOtherSelect('city','kecamatan')">

                </select>
            </div>
            <div>
                <label for="company"
                    class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Kecamatan</label>
                <select name="kecamatan" id="kecamatan-select" onchange="updateOtherSelect('kecamatan','kelurahan')">

                </select>
            </div>
            <div>
                <label for="last_name"
                    class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Desa</label>
                <select name="kelurahan" id="kelurahan-select" onchange="updateOtherSelect('')">

                </select>
            </div>
            <div>
                <label for="company"
                    class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Jalan</label>
                <input type="text" id="company"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" required />
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">No
                    Rumah</label>
                <input type="tel" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
            </div>
        </div>
        <div class="ml-5 mr-5">

            <form class="max-w-sm mx-auto">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                    Prduk</label>
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih jenis produk anda</option>
                    <option value="US">T shirt</option>
                    <option value="CA">Kolor</option>
                    <option value="FR">Celana pendek</option>
                    <option value="DE">Kaos kaki</option>
                </select>
            </form>
            <div>
                <p class="mb-5 mt-1 text-xs">Jika Jenis Kain yang Anda ingin tidak terdapat di pilihan silahkan
                    tambahkan di form Deskripsi</p>
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Jenis
                    kain</label>
                <input type="text" id="last_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Katun" required />
            </div>
            <div>
                <p class=" mt-1 text-xs">Jika Jenis Produk yang Anda ingin tidak terdapat di pilihan silahkan tambahkan
                    di form Deskripsi</p>
            </div>
        </div>
        <div>
            <p class="ml-5 mt-5 "><b>Ukuran :</b>Jika ukuran yang Anda miliki lebih dari satu ukuran dan jumlah produk
                yang berbeda-beda silakan tambahkan di form Deskripsi.</p>
        </div>
        <label class="inline-flex items-center ml-20">
            <input type="checkbox" class="form-checkbox">
            <span class="ml-2">S</span>
        </label>

        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox">
            <span class="ml-2">M</span>
        </label>

        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox">
            <span class="ml-2">L</span>
        </label>

        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox">
            <span class="ml-2">XL</span>
        </label>

        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox">
            <span class="ml-2">XXL</span>
        </label>

        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox">
            <span class="ml-2">3XL</span>
        </label>

        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox">
            <span class="ml-2">4XL</span>
        </label>

        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox">
            <span class="ml-2">5XL</span>
        </label>
        <div class=ml-5>
            <div>
                <label for="first_name" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Jumlah
                    Produk</label>
                <input type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Masukan Berapa banyak produk yang anda butuhkan" required />
            </div>
            <div>
                <p class=" mt-1 mb-5 text-xs">Jika Jumlah Produk yang ingin di pesan berbeda-beda pada tiap
                    "Ukuran/size" silakan tambahkan di form Deskripsi</p>
            </div>

            <label class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white " for="file_input">Upload
                file</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="file_input" type="file">
            <div class="mb-6">
                <div>
                    <p class=" mt-1 mb-5 text-xs">silahkan masukan desain logo  berupa JPG,PNG yang ingin anda gunakan apabila tidak
                        mempunyai logo silahkan cantumkan no WA di dalam deskripsi untuk request pembuatan logo.</p>
                </div>
                <label for="large-input"
                    class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white mt-5">Deskripsi</label>
                <input type="text" id="large-input"
                    class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <p class=" mb-5 text-xs">silahkan masukan desain logo yang ingin anda gunakan apabila tidak mempunyai
                    logo silahkan cantumkan no WA di dalam deskripsi untuk request pembuatan logo yang.</p>
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

            const province = await fetch(`https://api.binderbyte.com/wilayah/provinsi?api_key=${API_KEY}`,
                    requestOptions)
                .then(response => response.json())
            // .then(provinces => provinces);
            console.log(province)
            const provinceItemElement = province.value.map(item =>
                `
    <option value="${item.id}">${item.name}</option>
    `)

            const provinceSelectElement = document.querySelector('select[name="province"]')
            console.log(provinceSelectElement)
            provinceSelectElement.innerHTML = provinceItemElement
        })()
        const updateOtherSelect = async (from, to) => {
            const fromElement = document.querySelector(`select[name="${from}"`)
            const fromValue = fromElement.value
            console.log(fromValue)
            let keyApi = 'id_kecamatan'
            let pathApi = ''
            switch (from) {
                case 'province':
                    keyApi = 'id_provinsi'
                    pathApi = 'kabupaten'
                    break;
                case 'city':
                    keyApi = "id_kabupaten"
                    pathApi = 'kecamatan'
                    break
                default:
                    keyApi = "id_kecamatan"
                    pathApi = 'kelurahan'
                    break
            }
            const toApi = await fetch(
                    `https://api.binderbyte.com/wilayah/${pathApi}?api_key=${API_KEY}&${keyApi}=${fromValue}`,
                    requestOptions)
                .then(response => response.json())
            // .then(provinces => provinces);
            const toItemElement = toApi.value.map(item =>
                `
    <option value="${item.id}">${item.name}</option>
    `)

            const toSelectElement = document.querySelector(`select[name="${to}"]`)
            console.log(toSelectElement)
            toSelectElement.innerHTML = toItemElement
        }

    </script>
</x-app-layout>
