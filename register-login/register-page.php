<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-blue-100">
    <!-- navbar -->
    <header class="bg-blue-600 text-white p-4 shadow-lg shadow-white">
        <div class="container mx-auto flex justify-between px-5 items-center">
            <h1 class="text-2xl font-bold">ReadIt</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="../home.php" class="hover:underline">Home</a></li>
                    <li><a href="#" class="hover:underline">About</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container w-[40%] mx-auto p-4">
        <h1 class="text-3xl text-center font-bold mb-4">Blog Platform</h1>

        <!-- Registration Form -->
        <div class="bg-white p-6 rounded shadow-md mb-6">
            <h2 class="text-2xl font-bold mb-4">Register</h2>
            <form id="registerForm" action="./register-form.php" method="post">
                <div class="mb-4">
                    <label class="block text-gray-700">Name</label>
                    <input type="text" name="name" required class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" required class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Password</label>
                    <input type="password" name="password" required class="w-full p-2 border border-gray-300 rounded">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Register</button>
            </form>
        </div>
</body>
</html>