<!DOCTYPE html>
<html lang="en">
<head dir="rtl">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        /* Prevent page shift when dropdown opens */
body {
    overflow-x: hidden; /* Prevent horizontal scrolling */
}

.dropdown-menu {
    left: 0 !important;  /* Ensure the dropdown aligns correctly with the parent */
    right: auto !important;  /* Override any conflicting right alignment */
}

.navbar-nav {
    position: relative;
}

        * {
            font-family: 'Almarai', sans-serif;
        }
        
        /* Header Styling */
        .header-image {
            background-color: #f37a27; /* Solid background color */
            height: 80px;
        }

        /* Navbar Styling */
        .navbar-light .navbar-nav .nav-link {
            color: #333;
            font-weight: 600;
            margin-right: 1rem;
        }
        .navbar-light .navbar-nav .nav-link:hover {
            color: #f37a27;
        }
        .navbar-light .navbar-brand img {
            max-height: 60px;
        }

        /* Badge and Icon Styling */
        .bi-bag-check, .bi-bell, .bi-person-circle {
            font-size: 1.5rem;
            color: #f37a27;
        }
        .badge-notification {
            font-size: 0.8rem;
            color: #fff;
        }

        /* General Page Layout */
        .container-fluid {
            max-width: 1200px;
        }
        main, footer {
            background-color: #f8f9fa;
        }

        /* Dropdown Menu Styling */
        .dropdown-menu {
            min-width: 200px;
        }
    </style>
</head>
<body dir="rtl">

<!-- Header with Navbar -->
<header class="header-image mb-4 shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Brand Logo -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="/images/logo.png" alt="Logo" loading="lazy" />
            </a>
            
            <!-- Navbar Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pa') }}">الكورشيه</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pb') }}">الفخار</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pc') }}">السبح</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('loginui') }}">تسجيل الدخول</a></li>
                </ul>

                <!-- Icons and Notifications -->
                <div class="d-flex align-items-center">
                    <!-- Cart Icon -->
                    <a class="text-reset me-3" href="#"><i class="bi bi-bag-check"></i></a>

                    <!-- Notification Icon -->
                    <div class="dropdown">
                        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-bell"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">{{ Session::get('counter') }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{route('CART')}}">CART</a></li>
                        
                        </ul>
                    </div>

                    <!-- User Profile Icon -->
                    <div class="dropdown">
    <a class="dropdown-toggle d-flex align-items-center hidden-arrow text-danger" href="#" id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-person-circle text-danger"></i>
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
        <li><a class="dropdown-item" href="{{ route('logoutui') }}">Logout</a></li>
    </ul>
</div>

                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Main Content Area -->
<main class="py-4">
    @yield('content')
</main>

<!-- Footer Area -->
<footer class="py-4 text-center" style="background-color: #f37a27; color: white;">
    <p>&copy; 2024 Shopping Site | All Rights Reserved</p>
</footer>

</body>
</html>
