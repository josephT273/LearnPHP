<header class="bg-white shadow">
    <div class="mx-auto py-6 px-6 sm:px-6 lg-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $heading ?></h1>
        <p>Hello, <?= $_SESSION['name'] ?? "Guest" ?></p>
    </div>
</header>