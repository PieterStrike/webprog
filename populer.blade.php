<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Awareness</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">
    <nav class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center py-4">
            <div style="text-align: left; width: 85px;">
                <img src="/images/logo.png" alt="Mental Health" class=" rounded-lg shadow-md">
            </div>
            <div style="text-align: center;">
                <a href="/" class="mx-2 text-gray-700 px-5">Home</a>
                <a href="/populer" class="mx-2 text-gray-700 px-5">Populer</a>
                <a href="/terbaru" class="mx-2 text-gray-700 px-5">Terbaru</a>
                <a href="/about" class="mx-2 text-gray-700 px-5">About Us</a>
            </div>
            <div style="text-align: right;">
                <a href="/login" class="mx-2 text-gray-700">Login</a>
            </div>
            
        </div>
    </nav>

    <main class="container mx-auto mt-8">
        <div class="flex justify-center mt-8">
            <div class="relative w-1/2">
                <input 
                type="text" 
                placeholder="Search..." 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button 
                    type="submit" 
                    class="absolute right top-1/2 transform -translate-y-1/2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Search
                    </button>
            </div>
        </div>

        <div class="container mx-auto mt-8">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-6 flex">
                <div style="width: 300px;">
                    <img src="/images/foto4.png" alt="Image 1" class="object-cover">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">Gangguan Mental Semakin Ngetren, Patut Diwaspadai!</h2>
                    <p class="text-gray-600 mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...
                    </p>
                </div>
            </div>
    
            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-6 flex">
                <div style="width: 300px;">
                    <img src="/images/foto5.png" alt="Image 2" class="object-cover">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">Gangguan Jiwa - Gejala, Penyebab, dan Pengobatan</h2>
                    <p class="text-gray-600 mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...
                    </p>
                </div>
            </div>
    
            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-6 flex">
                <div style="width: 300px;">
                    <img src="/images/foto6.png" alt="Image 2" class="object-cover">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">Minimnya Kesadaran Masyarakat Akan Kesehatan Mental</h2>
                    <p class="text-gray-600 mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...
                    </p>
                </div>
            </div>
        </div>

    </main>
</body>
</html>
