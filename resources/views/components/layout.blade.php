<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobFinder</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen">
    <nav class="bg-gray-800 shadow-md">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 justify-between items-center">

                <div class="flex items-center">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/briefcase.png" alt="Logo" class="h-8 w-8 mr-2">
                    <span class="text-white text-lg font-bold">JobFinder</span>
                </div>

                <div class="hidden md:flex items-center space-x-4">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/jobs" :active="request()->is('jobs*')">Jobs</x-nav-link>

                
                    <a href="{{ url('/jobs/create') }}" 
                    class="ml-4 inline-block px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-lg shadow hover:bg-green-700 transition">
                    Create Job
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-900">
                {{ $heading }}
            </h1>
        </div>
    </header>

    <main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="bg-white/80 backdrop-blur-md border border-gray-200 rounded-xl shadow-lg p-6">
            {{ $slot }}
        </div>
    </main>
</body>
</html>
