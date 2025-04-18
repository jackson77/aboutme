<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Expert Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
<div style="display: flex; flex-direction:column; min-height:100vh;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">IT Expert</a>
 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse align-items-center" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            </ul>
            <div class="mb-2">
                <a href="https://wa.me/+255712636504" class="text-white me-3" target="_blank"><i class="fab fa-whatsapp fa-lg"></i></a>
                <a href="https://www.facebook.com/web.facebook.com/jomrayson.awend/" class="text-white me-3" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="https://www.instagram.com/www.instagram.com/33icebittz" class="text-white me-3" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="https://www.linkedin.com/www.linkedin.com/in/jackson-awe-158528128" class="text-white me-3" target="_blank"><i class="fab fa-linkedin fa-lg"></i></a>
            </div>
            <div class="ms-3">
                <a href="{{ route('lang.switch', 'en') }}" class="nav-link d-inline text-white {{ App::getLocale() === 'en' ? 'fw-bold' : '' }}">EN</a> |
                <a href="{{ route('lang.switch', 'de') }}" class="nav-link d-inline text-white {{ App::getLocale() === 'de' ? 'fw-bold' : '' }}">DE</a>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
   
</div>


    <footer class="text-center mt-auto bg-dark text-white py-3">
        <div class="mb-2">
            <a href="https://wa.me/+255712636504" class="text-white me-3" target="_blank"><i class="fab fa-whatsapp fa-lg"></i></a>
            <a href="https://www.facebook.com/your_profile" class="text-white me-3" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
            <a href="https://www.instagram.com/your_profile" class="text-white me-3" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
            <a href="https://www.linkedin.com/in/your_profile" class="text-white me-3" target="_blank"><i class="fab fa-linkedin fa-lg"></i></a>
        </div>
        <p>&copy; {{ date('Y') }} IT Expert. All rights reserved.</p>
    </footer>



</div>
</body>
</html>