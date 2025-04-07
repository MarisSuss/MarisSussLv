<!-- filepath: /home/maris/MarisSussLv/resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="{{ $language }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Māris Suss</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
    <style>
        body, header, footer {
            background: linear-gradient(135deg, rgba(30, 30, 30, 1), rgba(45, 45, 45, 1));
            color: #d1d5db; /* Light gray text */
        }
    </style>
</head>

<body class="bg-gray-900 text-gray-300 font-roboto flex flex-col min-h-screen">
    <!-- Header -->
    <header class="sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo and Language Switcher -->
            <div class="flex items-center space-x-4">
                <a href="/" class="text-4xl font-bold text-gray-100">
                    Māris Suss
                </a>
                <form action="{{ url('/lv') }}" method="POST">
                    @csrf
                    <button type="submit" class="hover:underline">LV</button>
                </form>
                <p>/</p>
                <form action="{{ url('/en') }}" method="POST">
                    @csrf
                    <button type="submit" class="hover:underline">EN</button>
                </form>
            </div>

            <!-- Navigation -->
            <nav class="hidden md:flex space-x-12">
                <a href="{{ url($language . '/contact') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 transition">
                    Contact
                </a>
                @if(Auth::guard('admin')->check() && Auth::guard('admin')->user()->isAdmin())
                    <a href="{{ route('admin.dashboard', ['language' => $language]) }}" class="hover:text-indigo-400">Dashboard</a>
                @endif
            </nav>

            <!-- Mobile Menu -->
            <div x-data="{ open: false }" class="md:hidden">
                <button @click="open = !open" class="text-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
                <div x-show="open" class="absolute top-16 left-0 w-full bg-gray-800 shadow-md">
                    <a href="{{ url($language . '/contact') }}" class="block px-4 py-2 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 transition text-center">
                        Contact
                    </a>
                    @if(Auth::guard('admin')->check() && Auth::guard('admin')->user()->isAdmin())
                        <a href="{{ route('admin.dashboard', ['language' => $language]) }}" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a>
                    @endif
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-8 px-4 flex-grow">
        <div>
            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
                    {{ session('error') }}
                </div>
            @endif            
        </div>

        <div>
            @yield('content')
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-6 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Māris Suss. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>