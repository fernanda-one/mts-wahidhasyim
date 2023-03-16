<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<!-- CODE HERE -->
<!-- HeaderLogin -->
<div class="flex flex-col min-h-screen">
    <section id="header">
        <div class="flex py-6 px-6 items-center justify-between">
            <div class="flex">
                <img src="/img/logo.png" class="w-[40px]" alt="">
                <div class="ml-4">
                    <p class="font-semibold">LOGIN</p>
                    <p class="text-xs  text-gray-400 font-medium">Wellcome Back</p>
                </div>
            </div>
            <div>
                <a href="" class="text-PrimeText text-xs font-semibold">Registrasi</a>
            </div>
        </div>
        <hr>
    </section>
    <!-- form login -->
    <section id="login" class="mb-10">
        <form action="" class="space-y-6 mt-10" method="post">
            <div class="mt-3 px-6">
                <label for="email" class="block text-sm font-semibold">Email</label>
                <div class="mt-1 ">
                    <input id="email" class="block w-full xp-3 py-2 placeholder-gray-400 border border-gray-300 rounded-lg" placeholder="example@gmail.com" type="text">
                </div>
            </div>
            <div class="mt-3 px-6">
                <label for="password" class="block text-sm font-semibold">Password</label>
                <div class="mt-1 ">
                    <input id="password" class="block w-full xp-3 py-2 placeholder-gray-400 border border-gray-300 rounded-lg" placeholder="" type="password">
                </div>
            </div>
            <div class="mt-3 px-6">
                <div class="mt-1 flex items-center">
                    <input id="password" class="block xp-3 py-2 placeholder-gray-400 border border-gray-300 rounded-sm" placeholder="" type="checkbox">
                    <p class="ml-2 text-gray-400 text-sm font-medium">Remember me</p></input>
                </div>
            </div>
            <div class="px-6">
                <button type="submit" ons="" class="w-full bg-PrimerColor hover:bg-SecondaryColor px-4 py-2 font-semibold rounded-md text-white">
                    Login
                </button>
            </div>
        </form>
        <!-- <a href="" class="px-6 block my-3 font-semibold text-md text-PrimerColor">Forgot password?</a> -->
    </section>
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


<?= $this->endSection(); ?>