<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DevPulse</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 text-slate-900">

    <!-- Navigation -->
    <nav class="bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-6 py-4">
            
            <h1 class="text-2xl font-bold">
                DevPulse
                <div class="mt-4 flex gap-2">

    <x-nav-link href="/" active="home">
    Home
</x-nav-link>

  <x-nav-link href="/workshops" active="workshops">
    Workshops
</x-nav-link>


<x-nav-link
    href="/about"
    :active="request()->is('about')"
>
    About
</x-nav-link>

<x-nav-link
    href="/contact"
    :active="request()->is('contact')"
>
    Contact
</x-nav-link>

</div>
            </h1>

        </div>
    </nav>


    <!-- Page Header -->
    <header class="max-w-7xl mx-auto px-6 py-8">

        <h2 class="text-2xl font-bold">
            {{ $heading ?? 'Welcome to DevPulse' }}
        </h2>

    </header>


    <!-- Page Content -->
    <main class="max-w-7xl mx-auto px-6 py-8">

        {{ $slot }}

    </main>


    <!-- Footer -->
    <footer class="bg-slate-900 text-white mt-12">
        <div class="max-w-7xl mx-auto px-6 py-6 text-center">
            <p>
                © 2026 DevPulse. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>