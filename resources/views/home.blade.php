<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Navbar -->
    <nav class="relative container mx-auto p-6">
        <!-- Flex container -->
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="pt-2">
                <img src="{{URL('/images/logo.svg')}}" alt="">
            </div>
            <!-- Menu Items -->
            <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-orange-400">Pricing</a>
                <a href="#" class="hover:text-orange-400">Product</a>
                <a href="#" class="hover:text-orange-400">About</a>
                <a href="#" class="hover:text-orange-400">Careers</a>
                <a href="#" class="hover:text-orange-400">Community</a>
            </div>
            <!-- Button -->
            <a href="#" class="hidden md:block p-3 px-6 pt-2 text-white bg-red-500 rounded-full baseline hover:bg-red-600">Get Started</a>
        </div>
    </nav>
</body>
</html>