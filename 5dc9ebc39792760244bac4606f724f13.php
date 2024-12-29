<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
            <div style="text-align: left;" class="py-5 px-5">
            <a href="<?php echo e(url()->previous()); ?>" class="bg-gray-500 text-white py-2 px-4 rounded inline-block">Back</a>
            </div>
            
        </div>

<div class="bg-gray-100 flex items-center justify-center">
    
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <img src="/images/logo.png" alt="Mental Health" class=" rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        
        <?php if(!empty($error_message)): ?>
    <div class="bg-red-500 text-white p-2 mb-4 rounded">
        <?php echo e($error_message); ?>

    </div>
<?php endif; ?>


        <form method="POST" action="/login">
        <?php echo csrf_field(); ?>

        <div class="mb-4">
                    <label for="username" class="block text-gray-700">Username</label>
                    <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded" pattern="[a-z]{8,}" title="Username must be at least 8 characters and lowercase letters only." required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded" minlength="8" required>
                </div>
            <div class="flex justify-between items-center">
                <a href="/register" class="text-sm text-blue-500">Register Account</a>
                <button type="submit" name ="login" class="bg-blue-500 text-white py-2 px-4 rounded">Login</button>
                <a href="/forgot_password" class="text-sm text-blue-500">Forgot Password?</a>
            </div>
        </form>
    </div>

</div>   
</body>

</html><?php /**PATH C:\xampp\htdocs\MentalHealth\resources\views/login.blade.php ENDPATH**/ ?>