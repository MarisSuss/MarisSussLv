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
        body,
        header,
        footer {
            background: #1a1a1a;
            /* Darker background */
            color: #e5e7eb;
            /* Light gray text */
        }

        a {
            color: #60a5fa;
            /* Light blue links */
        }

        a:hover {
            color: #3b82f6;
            /* Brighter blue on hover */
        }
    </style>
</head>

<body class="font-roboto flex flex-col min-h-screen">
    <!-- Header -->
    <header class="sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-baseline"
            style="box-shadow: 0 10px 8px -8px rgba(255, 0, 0, 0.8);">
            <!-- Left Section: Logo and Language Switcher -->
            <div class="flex items-baseline space-x-4">
                <!-- Logo -->
                <a href="{{ url('/' . $language) }}"
                    class="text-5xl font-bold text-gray-100 transition-all duration-300 hover:text-red-500 hover:glow-red">
                    Māris Suss
                </a>
                <p class="text-4xl font-bold text-gray-100">
                    /
                </p>
                <!-- Language Switcher -->
                <div class="flex items-center space-x-2">
                    <form action="{{ url('/lv') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="text-3xl font-bold transition-all duration-300 
                                {{ $language === 'lv' ? 'text-white' : 'text-gray-400 hover:text-white hover:glow-white' }}">
                            LV
                        </button>
                    </form>
                    <form action="{{ url('/en') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="text-3xl font-bold transition-all duration-300 
                                {{ $language === 'en' ? 'text-white' : 'text-gray-400 hover:text-white hover:glow-white' }}">
                            EN
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right Section: Contact Me -->
            <div>
                <a href="{{ url($language . '/contact') }}"
                    class="text-3xl font-bold text-white transition-all duration-300 hover:text-red-500 hover:glow-red">
                    Contact Me
                </a>
            </div>
        </div>

        <style>
            a:hover {
                color: inherit;
                /* Prevent default blue hover */
            }

            .hover\:glow-red:hover {
                text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
            }
        </style>
    </header>

    <style>
        .hover\:glow-white:hover {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        }

        .hover\:glow-red:hover {
            text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
        }
    </style>

    <!-- Main Content -->
    <main class="container mx-auto mt-8 px-4 flex-grow">
        <div>
            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
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
