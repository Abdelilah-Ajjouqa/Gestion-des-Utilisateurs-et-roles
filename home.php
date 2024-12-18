<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReadIt</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <header class="bg-blue-600 text-white p-4 shadow-lg shadow-white">
        <div class="container mx-auto flex justify-between px-5 items-center">
            <h1 class="text-2xl font-bold">ReadIt</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="./home.php" class="hover:underline">Home</a></li>
                    <li><a href="#" class="hover:underline">About</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- main -->
    <section class="bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center h-screen">
        <div class="text-center text-white">
            <h1 class="text-6xl font-bold mb-4">Welcome to Our <br> Platform</h1>
            <p class="text-lg mb-8">Discover, Connect, and Grow with Us</p>
            <div class="space-x-4">
                <a href="./register-login/register-page.php"><button class="bg-gray-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded">Register</button></a>
                <a href="./register-login/login-page.php"><button class="bg-gray-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded">Login</button></a>
                <a href="./index.php"><button class="hover:text-red-500 text-white font-bold py-1 px-2 rounded text-sm">Guest</button></a>
            </div>
        </div>
    </section>
</body>

</html>