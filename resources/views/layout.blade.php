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
            background: #1a1a1a; /* Darker background */
            color: #e5e7eb; /* Light gray text */
        }
        a {
            color: #60a5fa; /* Light blue links */
        }
        a:hover {
            color: #3b82f6; /* Brighter blue on hover */
        }
    </style>
</head>

<body class="font-roboto flex flex-col min-h-screen">
    <!-- Header -->
    <header class="sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center" style="box-shadow: 0 10px 8px -8px rgba(255, 0, 0, 0.8);">
        <div class="flex items-center space-x-4">
                <!-- Logo -->
                <a href="{{ url('/' . $language) }}" class="text-4xl font-bold text-gray-100">
                    Māris Suss
                </a>
                <p class="text-4xl font-bold text-gray-100">
                    /
                </p>

                <!-- Language Switcher -->     
                <div class="flex items-center space-x-4">
                    <form action="{{ url('/lv') }}" method="POST">
                        @csrf
                        <button type="submit" 
                                class="text-2xl font-bold transition-all duration-300 
                                    {{ $language === 'lv' ? 'text-green-400 glow-green' : 'text-gray-400 hover:text-green-400 hover:glow-green' }}">
                            LV
                        </button>
                    </form>
                    <form action="{{ url('/en') }}" method="POST">
                        @csrf
                        <button type="submit" 
                                class="text-2xl font-bold transition-all duration-300 
                                    {{ $language === 'en' ? 'text-green-400 glow-green' : 'text-gray-400 hover:text-green-400 hover:glow-green' }}">
                            EN
                        </button>
                    </form>
                </div>

                <style>
                    .glow-green {
                        text-shadow: 0 0 10px rgba(0, 255, 0, 0.8);
                    }
                    .hover\:glow-green:hover {
                        text-shadow: 0 0 10px rgba(0, 255, 0, 0.8);
                    }
                    .hover\:glow-red:hover {
                        text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
                    }
                </style>
            </div>

            <nav class="hidden md:flex space-x-12">
                <!-- Contact button -->
            <a href="{{ url($language . '/contact') }}" 
            class="px-4 py-2 bg-gray-800 text-white rounded-lg shadow-md transition-all duration-300 
                    hover:bg-green-500 hover:shadow-green-500/50">
                Contact
            </a>
                <!-- Admin Dashboard -->
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
    <footer class="text-white py-6 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Māris Suss. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>