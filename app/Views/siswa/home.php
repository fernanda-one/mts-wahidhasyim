<?= $this->extend('layouts/template') ;?>
<?= $this->section('content') ;?>
    <!-- Navbar -->
    <nav class="relative container mx-auto px-4 bg-PrimerColor">
        <!--  Flex Container  -->
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="py-2 flex flex-row items-center">
                <img src="img/logo.png " class="w-[35px] shadow" alt="">
                <h1 class="ml-2 text-lg font-semibold text-white">PPDB ONLINE</h1>
            </div>
            <!-- Menu Items -->
            <div class="hidden md:flex space-x-6">
                <a href="" class="text-PrimerColor hover:text-SecondText shadow-sm">Alur</a>
                <a href="" class="text-PrimerColor hover:text-SecondText shadow-sm">Info</a>
                <a href="" class="text-PrimerColor hover:text-SecondText shadow-sm">Syarat</a>
                <a href="" class="text-PrimerColor hover:text-SecondText shadow-sm">Kontak</a>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section id="hero ">
        <!-- Flex Container -->
        <div class="container mx-auto bg-cover bg-center h-[400px] bg-[url('/img/bg_header.jpg')] flex flex-col items-center">
            <img src="img/logo.png" class="mt-5 mb-10 w-[100px]" alt="">
            <h1 class="text-white text-center text-4xl my-2 mb-5 shadow-lg font-extrabold">
                SELAMAT DATANG DI PPDB ONLINE <br> MTS. WAHID HASYIM BANGSRI
            </h1>
            <div>
                <button class=" text-PrimerColor mr-3 bg-SecondText hover:bg-PrimeText duration-300 hover:text-SecondText font-bold py-1 px-3 rounded">
                   <a href="/daftar"><i class="fa fa"></i> KLIK DAFTAR</a>
                </button>
                <button class=" text-slate-50 bg-PrimerColor hover:bg-PrimeText duration-300 text-md font-bold py-1 px-3 rounded">
                   <a href="/masuk">MASUK SISWA</a> 
                </button>
            </div>
        </div>
        <!-- End FLex Container -->
    </section>
    <!-- End Hero Section -->
    <!-- Alur Section -->
    <section class="alur">
        <h1 class="text-3xl my-2 font-semibold text-center ">ALUR PPDB ONLINE</h1>
        <hr class="mx-auto mb-4" color="black" width="150">
        <div class="container mb-5 mx-auto bg-[url('/img/bg.png')]">
            <img src="img/alur.png" alt="">
        </div>
    </section>
    <!-- End Alur Section -->
    <!-- Information section -->
    <section id="information " class="bg-SecondaryColor">
        <div class="text-white p-2">
            <div class="flex justify-center">
                <h1 class="text-3xl my-2 font-semibold">INFORMASI PPDB ONLINE</h1>
            </div>
            <hr class="mx-auto" width="150">
            <div class="flex-row p-3 gap-2">
                <br>
                <p class="text-justify text-xl">MTs. WAHID HASYIM BANGSRI menyediakan PPDB secara online diharapkan proses PPDB dapat berjalan cepat dan bisa dilakukan dimanapun dan kapanpun selama sesi PPDB Online dibuka. Proses pendaftaran calon siswa baru di masa pandemi Covid-19 ini dan terhambat oleh jarak jika datang ke madrasah langsung, bisa mengakses website PPDB Online MTs. WAHID HASYIM BANGSRI.</p>
                <br>
                <p class="text-justify text-xl">Pengisian form PPDB Online mohon diperhatikan data yang dibutuhkan yang nantinya akan dipakai dalam proses PPDB. Setelah proses pengisian form PPDB secara online berhasil dilakukan, calon siswa akan mendapat bukti daftar dengan nomor pendaftaran dan harus disimpan yang akan digunakan untuk proses selanjutnya.</p>
            </div>
        </div>
    </section>
    <!-- End Alur Section -->
    <!-- Syarat Section -->
    <section id="alur">
        <h1 class="text-3xl my-2 font-semibold text-center ">SYARAT PENDAFTARAN</h1>
        <hr class="mx-auto mb-4" color="black" width="150">
        <div class="container mx-auto bg-[url('/img/bg.png')]">
            <img src="img/syarat.PNG" alt="">
        </div>
    </section>
    <!-- End Syarat Section -->
    <section id="syarat">
        <div class=" bg-SecondaryColor text-white p-3">
            <div class="flex justify-center">
                <h1 class="font-semibold my-2 text-3xl">KONTAK KAMI</h1>
            </div>
            <hr class="mx-auto mb-4" width="150">
            <div class="p-3">
                <p class="text-center text-xl">PPDB ONLINE © MTS. WAHID HASYIM BANGSRI</p>
                <p class="text-center text-xl">JLN. KANTOR POS NO. 08 RT 03 RW 06 DESA BANGSRI KECAMATAN BANGSRI KABUPATEN JEPARA</p>
            </div>
        </div>
    </section>
    <footer class="bg-PrimerColor text-white p-2">
        <p class="text-center text-sm">PPDB Online © MTs. WAHID HASYIM BANGSRI - 2023</p>
    </footer>
    <script src="/js/app.js"></script>
<?= $this->endSection() ;?>