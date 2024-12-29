<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>

    <div style="text-align: left;" class="py-5 px-5">
        <a href="javascript:history.back()" class="bg-gray-500 text-white py-2 px-4 rounded inline-block">Back</a>
    </div>

    <div class="bg-gray-100 flex items-center justify-center">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
            <img src="/images/logo.png" alt="Mental Health" class="rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Forgot Password</h2>
            
            <!-- Display notification when email is invalid -->
            <div id="email-error" class="bg-red-500 text-white p-4 rounded mb-4 text-center hidden">
                Please enter a valid email with "@domain.com".
            </div>

            <!-- Form for email input -->
            <form id="forgotPasswordForm">
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded" placeholder="example@example.com" required>
                </div>
                <div class="flex items-center justify-center">
                    <button type="button" id="confirmButton" class="bg-blue-500 text-white py-2 px-4 rounded">Confirm</button>
                </div>
            </form>

            <!-- Success message after submitting -->
            <div id="success-message" class="bg-green-500 text-white p-4 rounded mb-4 text-center hidden">
                The reset password link has been sent to your email. Please check your inbox.
            </div>
            
            <!-- OK Button to go back to login -->
            <div id="ok-button" class="flex items-center justify-center mt-4 hidden">
                <a href="/login" class="bg-green-500 text-white py-2 px-4 rounded">OK</a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('confirmButton').addEventListener('click', function () {
            const email = document.getElementById('email').value;

            // Validate email format
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            const errorMessage = document.getElementById('email-error');
            const successMessage = document.getElementById('success-message');
            const okButton = document.getElementById('ok-button');

            // If email is invalid
            if (!emailPattern.test(email)) {
                errorMessage.classList.remove('hidden');
                successMessage.classList.add('hidden');
                okButton.classList.add('hidden');
            } else {
                errorMessage.classList.add('hidden');
                successMessage.classList.remove('hidden');
                okButton.classList.remove('hidden');
            }
        });
    </script>

</body>
</html>
