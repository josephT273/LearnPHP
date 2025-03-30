<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
<header class="bg-white">
    <nav class="mx-auto flex text-white bg-gray-900 items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
        </div>
        <div class="flex gap-8">
            <a href="/" class="<?= urlIs('/') ? 'bg-gray-950 text-white' : 'bg-gray-900'; ?> px-5 py-3 text-sm font-semibold">Home</a>
            <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-950 text-white' : 'bg-gray-900'; ?> px-5 py-3 text-sm font-semibold">About</a>
            <a href="/notes" class="<?= urlIs('/notes') ? 'bg-gray-950 text-white' : 'bg-gray-900'; ?> px-5 py-3 text-sm font-semibold">Notes</a>
            <a href="/contact" class="<?= urlIs('/contact') ? 'bg-gray-950 text-white' : 'bg-gray-900'; ?> px-5 py-3 text-sm font-semibold">Contact</a>
        </div>
    </nav>
</header>
<!-- <?php require(__DIR__ . '/header.php'); ?> -->