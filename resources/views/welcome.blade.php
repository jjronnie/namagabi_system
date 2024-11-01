<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAMAGABI SS - Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-semibold text-blue-600">NAMAGABI SS</h1>
            <div class="flex space-x-4">
                <!-- Show only to guests (not logged-in users) -->
                @guest
                    <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded">Login</a>
                    <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded">Register</a>
                @endguest

                <!-- Show only to authenticated (logged-in) users -->
                @auth
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                       class="bg-red-600 hover:bg-red-700 text-white font-medium px-4 py-2 rounded">
                       Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endauth
            </div>
        </div>
    </header>

    <main class="flex-grow flex flex-col justify-center items-center text-center px-6">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Welcome to NAMAGABI SS</h2>
        <p class="text-gray-600 text-lg mb-8">Empowering students with quality education and modern learning facilities.</p>
        <a href="{{ route('dashboard') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded">
            Get Started
        </a>
    </main>

    <footer class="bg-gray-800 text-white py-6 mt-auto">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} NAMAGABI SS. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
