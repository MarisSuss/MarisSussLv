<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Māris Suss</title>
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <!-- Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</head>

<body class="bg-gray-50 text-black font-roboto flex flex-col min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Māris Suss</h1>

            <!-- Language Switcher -->
            <div class="flex space-x-2">
                <form action="{{ url('/lv') }}" method="POST">
                    @csrf
                    <button type="submit" class="hover:underline">LV</button>
                </form>
                <p>/</p>
                <form action="{{ url('/en') }}" method="POST">
                    @csrf
                    <button type="submit" class="hover:underline">EN</button>
                </form>

            <!-- Contact Page -->
            </div>
                <a href="{{ url(app()->getLocale()) . '/contact' }}" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Contact Me
                </a>         
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-8 px-4 flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow mt-8">
        <div class="container mx-auto px-4 py-6 text-center">
            <p>&copy; {{ date('Y') }} Māris Suss. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>