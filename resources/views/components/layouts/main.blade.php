<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? ''}} :: Baldur's Gate 3</title>
    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= url('css/styles.css');?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>

    <script src="<?= url('js/bootstrap.bundle.min.js') ?>" defer></script>
    <script src="<?= url('js/main.js') ?>" defer></script>
   
</head>
<body>
    <div id="user">
        <header>
        <div class="blur">
            <nav class="navbar navbar-expand-lg especificidad">
                <div class="container">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <x-nav-link routeto="home" class="text-light">Home</x-nav-link>
                            </li>
                            <li class="nav-item">
                                <x-nav-link routeto="blogs.blog" class="text-light">Blog</x-nav-link>
                            </li>
                            <li class="nav-item">
                                <x-nav-link routeto="games.all" class="text-light">Productos</x-nav-link>
                            </li>
                            @auth
                            <li class="nav-item">
                                <x-nav-link routeto="auth.login.show">Iniciar seisón</x-nav-link>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        </header>
        <main>
            {{$slot}}
        </main>
        <footer>
            <p>Derechos reservados &copy; 2025</p>
        </footer>
    </div>
</body>
</html>