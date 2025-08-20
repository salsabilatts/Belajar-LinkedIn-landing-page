<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Mastering LinkedIn for Career Growth - Belajar LinkedIn')</title>
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* Your existing CSS styles here - I'll provide this in the next artifact */
    </style>
</head>
<body>
    <div class="progress-bar" id="progressBar"></div>
    
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="logo">Belajar LinkedIn</div>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Belajar LinkedIn. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Your existing JavaScript here
    </script>
</body>
</html>