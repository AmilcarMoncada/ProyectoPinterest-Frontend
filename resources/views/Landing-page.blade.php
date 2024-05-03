<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest</title>
    <link rel="stylesheet" href="../resources/css/landing.css">
</head>
<body>
    <header>
        <div class="header-content">
            
            <div class="title-container">
                <img id="logo" href="#" src="https://upload.wikimedia.org/wikipedia/commons/0/08/Pinterest-logo.png" alt="Pinterest Logo">
                <h1 href="#" id="Titulo-landing">Pinterest</h1>
                <a href="#" class="btn-header">Hoy</a>
                <a href="#" class="btn-header">Explorar</a>
            </div>
        </div>
        <div class="btn-container">
            <a href="#">Info</a>
            <a href="#">Empresa</a>
            <a href="#">Blog</a>
            <a href="{{ route('usuario-registrarse') }}" class="btn">Regístrate Gratis</a>
            <a href="{{ route('usuario-login') }}" class="btn">Iniciar Sesión</a>
        </div>
    </header>
    
    <section class="hero">
        <h2>Encuentra inspiración para tus proyectos</h2>

                @foreach ($pines as $pin)
                <div class="pin-container">
                    <img class="imagenes-landing" src="{{ asset($pin->pin) }}" alt="Imagen">
                    <div class="pin-name">{{ $pin->nombrePin }}</div>
                    <div class="pin-author">
                        <img class="author-icon" src="{{ asset($pin->usuarioPin->perfilUsuario->fotoPerfil) }}" alt="Avatar">
                        <span>{{ $pin->usuarioPin->nombres }}</span>
                    </div>
                </div>
                @endforeach
    </section>
</body>
</html>








