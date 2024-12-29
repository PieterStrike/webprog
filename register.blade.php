<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>

    <div style="text-align: left;" class="py-5 px-5">
        <a href="javascript:history.back()" class="bg-gray-500 text-white py-2 px-4 rounded inline-block">Back</a>
    </div>

    <div class="bg-gray-100 flex items-center justify-center">

        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
            <img src="/images/logo.png" alt="Mental Health" class="rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

            @if (!empty($error_message))
                <div class="bg-red-500 text-white p-2 mb-4 rounded">
                    {{ $error_message }}
                </div>
            @endif

            <form method="POST" action="/register">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded" required>
                </div>

                <div class="mb-4">
                    <label for="username" class="block text-gray-700">Username</label>
                    <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded" pattern="[a-z]{8,}" title="Username must be at least 8 characters and lowercase letters only." required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded" minlength="8" required>
                </div>

                <div class="flex items-center justify-center">
                    <button type="submit" name="register" class="bg-blue-500 text-white py-2 px-4 rounded">Register</button>
                </div>
            </form>
        </div>

    </div>   
</body>

</html>
