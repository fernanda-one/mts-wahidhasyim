<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<!-- CODE HERE -->
<!-- HeaderLogin -->
<div class="flex flex-col min-h-screen">
    <section id="header" class="">
        <div class="flex py-6 px-6 items-center justify-between">
            <div class="flex">
                <img src="/img/logo.png" class="w-[40px]" alt="">
                <div class="ml-4">
                    <p class="font-semibold">Registrasi</p>
                    <p class="text-xs  text-gray-400 font-medium">Wellcome Back</p>
                </div>
            </div>
            <div>
                <a href="" class="text-PrimeText text-xs font-semibold">Log In</a>
            </div>
        </div>
        <hr>
    </section>
    <!-- form daftar -->
    <div class="max-w-md mx-auto">
        <form id="multi-step-form" class="relative">
            <div id="step-1" class="space-y-6 mt-3">
                <div class="mt-1 px-6">
                    <label for="namaLengkap" class="block text-sm font-semibold">Nama Lengkap</label>
                    <div class="mt-1 ">
                        <input id="namaLengkap" class="block w-full xp-3 py-2 placeholder-gray-400 border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText" placeholder="Fernanda Iqshal Syafalam" type="text">
                    </div>
                </div>
                <!-- Jenis Kelamin -->
                <div class="mt-1 px-6">
                    <span class="block text-sm font-semibold mb-1">Jenis Kelamin</span>
                    <div class="flex justify-between gap-4">
                        <div class="w-full">
                            <input type="radio" name="jenisKelamin" id="user1" class="hidden peer">
                            <label for="user1" class="flex gap-4 rounded bg-SecondText p-2 peer-checked:ring-1 peer-checked:ring-PrimeText ">Perempuan</label>
                        </div>
                        <div class="w-full">
                            <input type="radio" name="jenisKelamin" id="user2" class="hidden peer">
                            <label for="user2" class="flex gap-4 rounded bg-SecondText p-2 peer-checked:ring-1 peer-checked:ring-PrimeText ">Laki-laki</label>
                        </div>
                    </div>
                </div>
                <!-- NISN -->
                <div class="px-6 mt-3 flex gap-4">
                    <div class="w-full">
                        <label for="" class="text-sm font-semibold">NISN</label>
                        <input class="block w-full placeholder-gray-400 border border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText" placeholder="" type="number">
                    </div>
                    <div class="w-full">
                        <label for="" class="text-sm font-semibold">NIK</label>
                        <input class="block w-full placeholder-gray-400 border border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText" placeholder="" type="number">
                    </div>
                </div>
                <!-- Tempat Tanggal Lahir -->
                <div class="px-6 mt-3">
                    <label for="ttl" class="block text-sm font-semibold mb-2">Tempat,Tanggal Lahir</label>
                    <div class="flex justify-between gap-4">
                        <Input id="tempat" class="block w-full placeholder-gray-400 border border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText" type="text">
                        <input id="tanggalLahir" type="date" class="block w-full xp-3 py-2 placeholder-gray-400 border border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText">
                    </div>
                    <!-- Agama -->
                    <div class="w-full mt-3">
                        <label for="" class="text-sm font-semibold">Agama</label>
                        <select name="agama" class="block mt-1 w-full rounded outline-none" id="agama">
                            <option value="1">Islam</option>
                            <option value="1">Kristen</option>
                            <option value="1">Katolik</option>
                            <option value="1">Hindu</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3 px-6">
                    <div class="mt-1 flex items-center">
                        <input class="block xp-3 py-2 placeholder-gray-400 border-gray-300 rounded-sm focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText checked:bg-PrimeText" placeholder="" type="checkbox">
                        <p class="ml-2 text-gray-400 text-sm font-medium">Remember me</p></input>
                    </div>
                </div>
                <div class="px-6 pb-6">
                    <button data-next="2" class="w-full bg-SecondText hover:bg- px-4 py-2 font-semibold rounded-md text-PrimerColor duration-700 shadow-md hover:bg-PrimeText">
                        Selanjutnya
                    </button>
                </div>
            </div>
            <div id="step-2" class="space-y-6 mt-3 hidden">
                <div class="mt-1 px-6">
                    <label for="namaLengkap" class="block text-sm font-semibold">Nama Lengkap</label>
                    <div class="mt-1 ">
                        <input id="namaLengkap" class="block w-full xp-3 py-2 placeholder-gray-400 border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText" placeholder="Fernanda Iqshal Syafalam" type="text">
                    </div>
                </div>
                <!-- Jenis Kelamin -->
                <div class="mt-1 px-6">
                    <span class="block text-sm font-semibold mb-1">Jenis Kelamin</span>
                    <div class="flex justify-between gap-4">
                        <div class="w-full">
                            <input type="radio" name="jenisKelamin" id="user1" class="hidden peer">
                            <label for="user1" class="flex gap-4 rounded bg-SecondText p-2 peer-checked:ring-1 peer-checked:ring-PrimeText ">Perempuan</label>
                        </div>
                        <div class="w-full">
                            <input type="radio" name="jenisKelamin" id="user2" class="hidden peer">
                            <label for="user2" class="flex gap-4 rounded bg-SecondText p-2 peer-checked:ring-1 peer-checked:ring-PrimeText ">Laki-laki</label>
                        </div>
                    </div>
                </div>
                <!-- NISN -->
                <div class="px-6 mt-3 flex gap-4">
                    <div class="w-full">
                        <label for="" class="text-sm font-semibold">NISN</label>
                        <input class="block w-full placeholder-gray-400 border border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText" placeholder="" type="number">
                    </div>
                    <div class="w-full">
                        <label for="" class="text-sm font-semibold">NIK</label>
                        <input class="block w-full placeholder-gray-400 border border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText" placeholder="" type="number">
                    </div>
                </div>
                <!-- Tempat Tanggal Lahir -->
                <div class="px-6 mt-3">
                    <label for="ttl" class="block text-sm font-semibold mb-2">Tempat,Tanggal Lahir</label>
                    <div class="flex justify-between gap-4">
                        <Input id="tempat" class="block w-full placeholder-gray-400 border border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText" type="text">
                        <input id="tanggalLahir" type="date" class="block w-full xp-3 py-2 placeholder-gray-400 border border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText">
                    </div>
                    <!-- Agama -->
                    <div class="w-full mt-3">
                        <label for="" class="text-sm font-semibold">Agama</label>
                        <select name="agama" class="block mt-1 w-full rounded outline-none" id="agama">
                            <option value="1">Islam</option>
                            <option value="1">Kristen</option>
                            <option value="1">Katolik</option>
                            <option value="1">Hindu</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3 px-6">
                    <div class="mt-1 flex items-center">
                        <input class="block xp-3 py-2 placeholder-gray-400 border-gray-300 rounded-sm focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText checked:bg-PrimeText" placeholder="" type="checkbox">
                        <p class="ml-2 text-gray-400 text-sm font-medium">Remember me</p></input>
                    </div>
                </div>
                <div class="px-6 space-y-6">
                    <button data-prev="1" class="w-full bg-SecondText hover:bg- px-4 py-2 font-semibold rounded-md text-PrimerColor duration-700 shadow-md hover:bg-PrimeText">
                        Sebelumnya
                    </button>
                    <button type="submit" data-next="3" class="w-full bg-PrimerColor hover:bg- px-4 py-2 font-semibold rounded-md text-SecondText duration-700 shadow-md hover:bg-PrimeText">
                        Selanjutnya
                    </button>
                </div>
            </div>
            <div id="step-3" class="space-y-6 mt-3 hidden">
                <div class="mt-1 px-6">
                    <label for="namaLengkap" class="block text-sm font-semibold">Nama Lengkap</label>
                    <div class="mt-1 ">
                        <input id="namaLengkap" class="block w-full xp-3 py-2 placeholder-gray-400 border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText" placeholder="Fernanda Iqshal Syafalam" type="text">
                    </div>
                </div>
                <!-- Jenis Kelamin -->
                <div class="mt-1 px-6">
                    <span class="block text-sm font-semibold mb-1">Jenis Kelamin</span>
                    <div class="flex justify-between gap-4">
                        <div class="w-full">
                            <input type="radio" name="jenisKelamin" id="user1" class="hidden peer">
                            <label for="user1" class="flex gap-4 rounded bg-SecondText p-2 peer-checked:ring-1 peer-checked:ring-PrimeText ">Perempuan</label>
                        </div>
                        <div class="w-full">
                            <input type="radio" name="jenisKelamin" id="user2" class="hidden peer">
                            <label for="user2" class="flex gap-4 rounded bg-SecondText p-2 peer-checked:ring-1 peer-checked:ring-PrimeText ">Laki-laki</label>
                        </div>
                    </div>
                </div>
                <!-- NISN -->
                <div class="px-6 mt-3 flex gap-4">
                    <div class="w-full">
                        <label for="" class="text-sm font-semibold">NISN</label>
                        <input class="block w-full placeholder-gray-400 border border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText" placeholder="" type="number">
                    </div>
                    <div class="w-full">
                        <label for="" class="text-sm font-semibold">NIK</label>
                        <input class="block w-full placeholder-gray-400 border border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText" placeholder="" type="number">
                    </div>
                </div>
                <!-- Tempat Tanggal Lahir -->
                <div class="px-6 mt-3">
                    <label for="ttl" class="block text-sm font-semibold mb-2">Tempat,Tanggal Lahir</label>
                    <div class="flex justify-between gap-4">
                        <Input id="tempat" class="block w-full placeholder-gray-400 border border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText" type="text">
                        <input id="tanggalLahir" type="date" class="block w-full xp-3 py-2 placeholder-gray-400 border border-gray-300 rounded-lg focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText">
                    </div>
                    <!-- Agama -->
                    <div class="w-full mt-3">
                        <label for="" class="text-sm font-semibold">Agama</label>
                        <select name="agama" class="block mt-1 w-full rounded outline-none" id="agama">
                            <option value="1">Islam</option>
                            <option value="1">Kristen</option>
                            <option value="1">Katolik</option>
                            <option value="1">Hindu</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3 px-6">
                    <div class="mt-1 flex items-center">
                        <input class="block xp-3 py-2 placeholder-gray-400 border-gray-300 rounded-sm focus:outline-none focus:border-PrimeText focus:ring-1 focus:ring-PrimeText checked:bg-PrimeText" placeholder="" type="checkbox">
                        <p class="ml-2 text-gray-400 text-sm font-medium">Remember me</p></input>
                    </div>
                </div>
                <div class="px-6 space-y-6">
                    <button data-prev="2" class="w-full bg-SecondText hover:bg- px-4 py-2 font-semibold rounded-md text-PrimerColor duration-700 shadow-md hover:bg-PrimeText">
                        Sebelumnya
                    </button>
                    <button type="submit" class="w-full bg-PrimerColor hover:bg- px-4 py-2 font-semibold rounded-md text-SecondText duration-700 shadow-md hover:bg-PrimeText">
                        Selanjutnya
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- footer -->
    <section id="footer" class="mt-auto">
        <div class="container bottom-0 text-xs" style="font-weight: 500;">
            <hr>
            <div class="py-3">
                <p class="text-center text-zinc-400">By creating an account You agree to Our</p>
                <a href="" class="block text-center text-PrimerColor">Terms and Conditions</a>
            </div>
        </div>
    </section>
</div>

<script>
    const form = document.getElementById("multi-step-form");

    form.addEventListener("click", (event) => {
        const target = event.target;

        if (target.tagName === "BUTTON") {
            const currentStep = target.closest("[id^='step-']");
            const nextStepNumber = Number(target.dataset.next);
            const prevStepNumber = Number(target.dataset.prev);

            if (nextStepNumber) {
                const nextStep = document.getElementById(`step-${nextStepNumber}`);
                currentStep.classList.add("hidden");
                nextStep.classList.remove("hidden");
                nextStep.classList.add("slide-in-right");
            } else if (prevStepNumber) {
                const prevStep = document.getElementById(`step-${prevStepNumber}`);
                currentStep.classList.add("hidden");
                prevStep.classList.remove("hidden");
                prevStep.classList.add("slide-in-left");
            }
        }
    });

    form.addEventListener("submit", (event) => {
        event.preventDefault();
        // handle form submission here
    });
</script>

<?= $this->endSection(); ?>