<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="font-sans bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center py-4">
            <div style="text-align: left; width: 85px;">
                <img src="/images/logo.png" alt="Mental Health" class="rounded-lg shadow-md">
            </div>
            <div class="text-center">
                <a href="/" class="mx-2 text-gray-700 px-5">Home</a>
                <a href="/populer" class="mx-2 text-gray-700 px-5">Populer</a>
                <a href="/terbaru" class="mx-2 text-gray-700 px-5">Terbaru</a>
                <a href="/about" class="mx-2 text-gray-700 px-5">About Us</a>
            </div>
            @guest
                <div style="text-align: right;">
                <a href="/profile" class="flex items-center">
        <img src="/images/profile.png" alt="Profile Picture" class="w-10 h-10 rounded-full object-cover">
    </a>
                </div>
            @endguest
        </div>
    </nav>

    <main class="container mx-auto mt-12">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-semibold">Your Profile</h1>
        </div>

        <div class="flex justify-center items-center space-x-12">
            <div class="flex-shrink-0">
                <img id="profilePic" src="/images/profile.png" alt="Profile Picture" class="w-40 h-40 rounded-full object-cover mb-4">
                <input type="file" id="fileInput" class="mt-2 p-2 text-sm" accept="image/*" onchange="previewProfilePic()" disabled>
            </div>

            <div class="space-y-4">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" value="eddiebrock" class="w-64 p-2 border rounded-md" disabled>
                </div>

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" value="Eddie Brock" class="w-64 p-2 border rounded-md" disabled>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" value="eddiebrock@gmail.com" class="w-64 p-2 border rounded-md" disabled>
                </div>

                <div class="relative">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="flex items-center">
                        <input type="password" id="password" value="eddiebrock" class="w-64 p-2 border rounded-md" disabled>
                        <!-- Eye Icon (Initially Hidden) -->
                        <button type="button" id="togglePassword" class="ml-2 text-gray-500 hidden" onclick="togglePasswordVisibility()">
                            <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" class="h-6 w-6">
                                <path d="M12 4.5c-3.4 0-6.3 2.3-7.7 5.2.3 1 .8 2.1 1.6 3 .6-.9 1.6-1.6 2.8-1.9 1-.2 2.1-.1 3 .3 1.4.5 2.6 1.5 3.2 2.8.4-.7.9-1.3 1.5-1.9C15.4 6.7 13.2 4.5 12 4.5zM12 2C6.6 2 3 7 3 7s3 5 9 5 9-5 9-5-3-5-9-5z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex justify-between space-x-4">
                    <button id="editButton" class="bg-blue-500 text-white px-4 py-2 rounded-md w-32" onclick="enableEdit()">Edit</button>
                    <button id="saveButton" class="bg-green-500 text-white px-4 py-2 rounded-md w-32" onclick="saveChanges()" style="display:none;">Save</button>
                </div>
            </div>
        </div>

        <div class="text-center mt-8">
            <button onclick="confirmLogout()" class="bg-red-500 text-white px-6 py-3 rounded-full">Log Out</button>
        </div>
    </main>

    <script>
        let isEdited = false;

        function enableEdit() {
            isEdited = true;
            document.getElementById('name').disabled = false;
            document.getElementById('password').disabled = false;
            document.getElementById('fileInput').disabled = false;
            document.getElementById('editButton').style.display = 'none';
            document.getElementById('saveButton').style.display = 'inline-block';
            document.getElementById('togglePassword').classList.remove('hidden');
        }

        function saveChanges() {
            alert("Changes saved successfully!");
            isEdited = false;
            document.getElementById('username').disabled = true;
            document.getElementById('name').disabled = true;
            document.getElementById('password').disabled = true;
            document.getElementById('fileInput').disabled = true;
            document.getElementById('editButton').style.display = 'inline-block';
            document.getElementById('saveButton').style.display = 'none';
            document.getElementById('togglePassword').classList.add('hidden');
        }

        function confirmLogout() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to log out?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Log Out',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/logout';
                }
            });
        }

        function togglePasswordVisibility() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.setAttribute("d", "M12 4.5c-3.4 0-6.3 2.3-7.7 5.2.3 1 .8 2.1 1.6 3 .6-.9 1.6-1.6 2.8-1.9 1-.2 2.1-.1 3 .3 1.4.5 2.6 1.5 3.2 2.8.4-.7.9-1.3 1.5-1.9C15.4 6.7 13.2 4.5 12 4.5zM12 2C6.6 2 3 7 3 7s3 5 9 5 9-5 9-5-3-5-9-5z");
            } else {
                passwordField.type = "password";
                eyeIcon.setAttribute("d", "M12 4.5c-3.4 0-6.3 2.3-7.7 5.2.3 1 .8 2.1 1.6 3 .6-.9 1.6-1.6 2.8-1.9 1-.2 2.1-.1 3 .3 1.4.5 2.6 1.5 3.2 2.8.4-.7.9-1.3 1.5-1.9C15.4 6.7 13.2 4.5 12 4.5zM12 2C6.6 2 3 7 3 7s3 5 9 5 9-5 9-5-3-5-9-5z");
            }
        }

        function previewProfilePic() {
            const file = document.getElementById('fileInput').files[0];
            const reader = new FileReader();
            reader.onloadend = function () {
                document.getElementById('profilePic').src = reader.result;
            }
            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>
