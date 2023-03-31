<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<!-- CODE HERE -->
<div>
    <!-- header -->
    <div id="sidebar" class="bg-PrimerColor left-[-250px] flex flex-col duration-700 text-SecondText w-3/5 md:w-72  shadow-xl h-screen overflow-hidden md:relative fixed top-0 bottom-0">
        <div class="flex justify-between border-b mx-4 md:mx-10 border-SecondaryColor py-5 font-medium gap-2.5 items-center">
            <img src="/img/logo.png" class="w-8 h-8" alt="">
            <span class="text-sm ml-2 font-semibold">MTS. WAHID HASYIM BANGSRI</span>
            <i class="fa-solid fa-x md:hidden" onclick="toggleSidebar()"></i>
        </div>
        <div class="p-3 mt-3 flex mx-1 font-medium items-center rounded-md px-4 duration-600 text-SecondText hover:bg-SecondaryColor">
            <i class="fa-solid fa-home"></i>
            <span class="ml-3">Beranda</span>
        </div>
        <div class="p-3 mt-3 flex mx-1 font-medium items-center rounded-md px-4 duration-600 text-SecondText hover:bg-SecondaryColor">
            <i class="fa-solid fa-file"></i>
            <span class="ml-4">Data Diri</span>
        </div>
        <div class="p-3 mt-3 flex mx-1 font-medium items-center rounded-md px-4 duration-600 text-SecondText hover:bg-SecondaryColor">
            <i class="fa-solid fa-check-to-slot"></i>
            <span class="ml-3">Cetak Pendaftaran</span>
        </div>
        <div class="mt-auto p-3 flex font-medium mx-1 mb-2 items-center rounded-md px-4 duration-600 text-SecondText hover:bg-SecondaryColor">
            <i class="fa-solid fa-gear"></i>
            <span class="ml-3">Pengaturan</span>
        </div>
    </div>
    <!-- Navbar -->
    <div class="flex justify-between p-3 items-center text-SecondText bg-PrimerColor">
        <div class="flex items-center">
            <i class="fa-solid fa-bars" onclick="toggleSidebar()"></i>
            <span class="font-semibold ml-4 text-lg"><?= $contentTitle; ?></span>
        </div>
        <div class="flex items-center">
            <span class="mr-2 text-sm left"><?= $name; ?></span>
            <img src="/img/logo.png" class="w-6 h-6" alt="">
        </div>
    </div>
    <?= $this->renderSection('content'); ?>
</div>
<script type="text/javascript">
    function toggleSidebar() {
        document.getElementById("sidebar").classList.toggle("left-0")
    }
</script>

<?= $this->endSection(); ?>