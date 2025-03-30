<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
<header class="bg-white">
    <nav class="mx-auto flex text-white bg-gray-900 items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex gap-8">
            <a href="#" class="py-2">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
            <div class="flex gap-8">
                <a href="/" class="<?= urlIs('/') ? 'bg-gray-950 text-white' : 'bg-gray-900'; ?> px-5 py-3 text-sm font-semibold">Home</a>
                <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-950 text-white' : 'bg-gray-900'; ?> px-5 py-3 text-sm font-semibold">About</a>
                <?php if($_SESSION['user'] ?? false) :?>
                    <a href="/notes" class="<?= urlIs('/notes') ? 'bg-gray-950 text-white' : 'bg-gray-900'; ?> px-5 py-3 text-sm font-semibold">Notes</a>
                <?php endif; ?>
                <a href="/contact" class="<?= urlIs('/contact') ? 'bg-gray-950 text-white' : 'bg-gray-900'; ?> px-5 py-3 text-sm font-semibold">Contact</a>
            </div>
        </div>
        <div class="flex gap-8">
            <?php if($_SESSION['user'] ?? false): ?>
                <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <form action="/session" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="<?= urlIs('/session') ? 'bg-gray-950 text-white' : 'bg-gray-900'; ?> px-5 py-3 text-sm font-semibold">Logout</button>
                </form>
                <?php else: ?>
                    <a href="/login" class="<?= urlIs('/login') ? 'bg-gray-950 text-white' : 'bg-gray-900'; ?> px-5 py-3 text-sm font-semibold">Login</a>
                    <a href="/register" class="<?= urlIs('/register') ? 'bg-gray-950 text-white' : 'bg-gray-900'; ?> px-5 py-3 text-sm font-semibold">Register</a>
                <?php endif; ?>
        </div>
    </nav>
</header>
<!-- <?php require(__DIR__ . '/header.php'); ?> -->