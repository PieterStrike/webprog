<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="bg-white shadow">
    <div class="container mx-auto flex justify-between items-center py-4">
        <div style="text-align: left; width: 85px;">
            <img src="/images/logo.png" alt="Mental Health" class="rounded-lg shadow-md">
        </div>
        <div style="text-align: center;">
            <a href="/" class="mx-2 text-gray-700 px-5">Home</a>
            <a href="/populer" class="mx-2 text-gray-700 px-5">Populer</a>
            <a href="/terbaru" class="mx-2 text-gray-700 px-5">Terbaru</a>
            <a href="/about" class="mx-2 text-gray-700 px-5">About Us</a>
        </div>
        <div style="text-align: right;">
            <!-- Cek apakah pengguna sudah login -->
            <?php if(auth()->guard()->guest()): ?>
                <a href="/login" class="mx-2 text-gray-700">Login</a>
            <?php else: ?>
                <!-- Menampilkan nama pengguna setelah login -->
                <a href="/profile" class="mx-2 text-gray-700"><?php echo e(Auth::user()->username); ?></a>
                <!-- Form untuk logout -->
                <form action="<?php echo e(route('logout')); ?>" method="POST" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="text-gray-700">Logout</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</nav>
</body>
</html><?php /**PATH C:\xampp\htdocs\MentalHealth\resources\views/components/navbar.blade.php ENDPATH**/ ?>