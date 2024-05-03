<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="{{ url('css/vistaPerfilUsuario.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
                .pin-container {
            position: relative;
            display: inline-block;
            margin-right: 20px; /* Ajustar el espacio entre los pines */
            margin-bottom: 20px; /* Ajustar el espacio entre las filas de pines */
            width:500px;
            height:500px;
        }

        .pin-container:hover .pin-name {
            display: block;
        }

        .pin-name {
            display: none;
            position: absolute;
            top: 10px; /* Mover el nombre del pin hacia arriba */
            left: 10px; /* Alinear el nombre del pin a la izquierda */
            background-color: rgba(255, 255, 255, 0.7);
            padding: 5px;
            border-radius: 5px;
            font-size: 16px; /* Tamaño de letra más grande */
        }

        .pin-container:hover .pin-actions {
            display: block;
        }

        .pin-actions {
            display: none;
            position: absolute;
            top: 10px; /* Mover el nombre del pin hacia arriba */
            right:-90px; /* Alinear el nombre del pin a la derecha */
            font-size: 16px; /* Tamaño de letra más grande */
        
            
        }

        .pin-actions button {
            background-color: #E60023; /* Color del botón Guardar */
            color: #ffffff;
            padding: 3px 8px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            margin-left: 50px; 
            width:120px;
            height:50px;
            font-size:20px;
            
            
        }

        .pin-actions button:hover {
            background-color: #9b051c;
            
        }


        .pin-author {
            display: none;
            position: absolute;
            bottom: 10px; /* Mover la información del autor hacia abajo */
            left: 10px; /* Alinear la información del autor a la izquierda */
            font-size: 16px; /* Tamaño de letra más grande */
            background-color: rgba(255, 255, 255, 0.7); /* Fondo blanco o gris */
            padding: 5px;
            border-radius: 5px;
        }

        .pin-author img {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .pin-author button {
            background-color: #ff0000;
            color: #ffffff;
            padding: 3px 8px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-left: 10px; /* Ajustar el espacio entre el botón de seguir y el nombre del autor */
           
        }


        .pin-container:hover .pin-author {
            display: block;
        }

        .pin-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            z-index: 9999;
            width:1000px;
            height:500px;
           

        }


        .pin-popup img {
            width: 450px; /* Ancho máximo de la imagen */
            height: 500px; /* Altura máxima de la imagen */
            border-radius: 50px;
         
        }



        .sidebar {
            height:90px;
            padding: 10px;
            margin-left:350px;
        }

        .sidebar-content {
            position: fixed;
    bottom: 20px; /* Ajustar la distancia desde el borde inferior */
    right: 20px; /* Ajustar la distancia desde el borde derecho */
            font-size:15px;
    padding: 10px;
    width:50%;
            

        }

        .sidebar-option {
            margin-bottom: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .sidebar-option:hover {
            background-color: #dcdcdc;
        }

        .comment-input {
            width: 90%;
            height:50px;
            padding: 5px;
            margin-bottom: 10px;
            border-radius:50px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            border-color: #EBEBEB;
  
        }

        .close-popup-button {
        position: absolute;
        top: 10px; 
        right: 10px; 
        width: 30px;
        height: 30px; 
        background-color: rgba(0, 0, 0, 0.5); 
        color: white; 
        border: none; 
        border-radius: 50%; 
        font-size: 20px; 
        cursor: pointer; 
        z-index: 100; 
    }

    .close-popup-button:hover {
        background-color: rgba(0, 0, 0, 0.7); /* Cambiar el color de fondo al pasar el ratón */
    }

      .comments-container{
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            z-index: 9999;
            width:500px;
            height:300px;
            margin-left:50px;
            
            margin-top:-95px;
            margin-left:240px;
            overflow-y: auto;

      }


      .comment-button {
            background-color: #ff0000; /* Color del botón */
            color: #fff; /* Color del texto */
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .comment-button:hover {
            background-color: #8b0202; /* Color del botón al pasar el ratón */
        }


        .comment-card {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
        }

        .comment-card p {
            margin: 0;
            font-size: 16px;
            line-height: 1.6;
        }

        .comment-card .user-name {
            font-size: 14px;
            color: #888;
            margin-right: 16px;
        }


        .fa-user{
           font-size: 20px;
           margin-right:10px;
           color:#888 ;
        }

        /*Para los mensajes tambien*/
        #message-popup {
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
            padding: 10px;
            z-index: 1000;
            margin-left: 1650px;
            margin-top: -50px;
            height: 700px;
            border-radius: 40px;
            width: 230px;
            font-size: 10px;
        }

        .inbox-container {
            margin-top: 20px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .search-bar-mensajes {
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 5px;
            background-color: #F1F1F1;
        }


        .search-bar-mensajes:focus-within {
        outline: none;


        }

        .hidden {
            display: none;
        }

        #user-icon-container {
            position: absolute;
        }

        #message-popup {
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
            padding: 10px;
            z-index: 1000;
            margin-left: 1650px;
            margin-top:-50px;
            height:700px;
            border-radius:40px;
            width:230px;
            font-size:10px;
        }

        .inbox-container {
            margin-top: 20px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .search-bar {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        
        .search-bar-mensajes {
            width:200px;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 5px;
            background-color: #F1F1F1;
        }

        /* Estilos para las imágenes */
        .content section {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 20px;
        }

        #profile-icon {
        background-image: url({{$perfil->perfilUsuario->fotoPerfil}});
        width: 50px; /* Ancho de la imagen */
        height: 50px; /* Altura de la imagen */
        background-size: cover; /* Ajustar la imagen al tamaño del botón */
        }

        
        #logo-perfil {
    background-image: url({{$perfil->perfilUsuario->fotoPerfil}});
    width: 150px; /* Tamaño inicial */
    height: 150px; /* Tamaño inicial */
    background-size: cover;
    border-radius: 80%; /* Hacer la imagen circular */
    transition: width 0.3s, height 0.3s; /* Agregar transición para suavizar cambios */
}


        .content section img {
            max-width: 100%;
            height: auto;
        }
        
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="title-container">
                <img id="logo" src="https://upload.wikimedia.org/wikipedia/commons/0/08/Pinterest-logo.png" alt="Pinterest Logo">
                <a href="{{ route('home-principal') }}" class="btn-header">Inicio</a>
                <a href="{{ route('pin-crear') }}" class="btn-header">Crear</a>
                <div class="search-bar">
                    <input type="text" placeholder="Buscar...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>
        <div class="btn-container">
            <button id="bell-icon" class="button-icon" onmouseover="showTooltip('bell-icon', 'Notificaciones')"><i class="fas fa-bell bell-icon"></i></button>
            <button id="message-icon" class="button-icon" onclick="toggleMessagePopup()" onmouseover="showTooltip('message-icon', 'Mensajes')"><i class="fas fa-envelope message-icon"></i></button>
            <a href="{{route('usuario-perfil', $perfil->perfilUsuario->codigoPerfil)}}"><button id="profile-icon" class="button-icon" onmouseover="showTooltip('arrow-icon', 'Tu Perfil')"></button></a>
            <button id="arrow-icon" class="button-icon" onmouseover="showTooltip('arrow-icon', 'Cuenta y mas opciones')" onclick="toggleDropdown()"><i class="fas fa-solid fa-angle-down"></i></button>
            <div class="arrow-content">
                <a href="{{ route('home-landing') }}">Cerrar Sesion</a>
        </div>
    </header>
   

    <div id="user-icon-container">
        <a href="{{route('usuario-perfil', $perfil->perfilUsuario->codigoPerfil)}}"><button id="logo-perfil" class="button-icon" onmouseover="showTooltip('arrow-icon', 'Tu Perfil')"></button></a>
    </div>

    <div id="logo-correo">
        <h4 id="correo">{{ $perfil->correo }}</h4>
    </div>

    <div class="buttons-container">
        <button class="button">Compartir</button>
        <a href="{{ route('perfil-editar', $perfil->perfilUsuario->codigoPerfil) }}"><button class="button">Editar Perfil</button></a>
    </div>


    <div class="links-container">
        <a href="#" class="link" onclick="mostrarContenido('tableros')">Tableros</a>
        <a href="#" class="link" onclick="mostrarContenido('pines')">Pines Creados/Guardados</a>
    </div>

    <div class="dropdown" id="add-dropdown">
        <button id="add-button" class="button" onclick="toggleDropdown()"><i class="fas fa-plus fa-lg"></i></button>
        <div class="dropdown-content">
            <a href="{{ route('pin-crear') }}">Crear pin</a>
            <a href="{{ route('tablero-crear') }}">Crear Tablero</a>
        </div>
    </div>

    <!-- Div para Tableros -->
    <section id="tableros" class="content hidden">
        <section>
            @foreach ($tableros as $tablero)
            <div class="pin-container">
                <img class="imagenes-landing" src="{{ asset($tablero->fotoPresentacionTablero) }}" alt="Imagen">
                <div class="pin-name">{{ $tablero->nombreTablero }}</div>
                <div class="pin-actions">
                    <a href="{{ route('tablero-ver', $tablero->codigoTablero) }}"><button class="save-button">Ver Tablero</button></a>
                </div>
            </div>
            @endforeach
        </section>
    </section>

    <section id="pines" class="content hidden">
        <section>
            @foreach ($pines as $pin)
            <div class="pin-container">
                <img class="imagenes-landing" src="{{ asset($pin->pin) }}">
                <div class="pin-name">{{ $pin->nombrePin }}</div>
            </div>
            @endforeach
        </section>
    </section>


    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('add-dropdown');
            dropdown.classList.toggle('active');
        }

        function showTooltip(iconId, iconName) {
            const icon = document.getElementById(iconId);
            const tooltip = document.getElementById('icon-tooltip');
            tooltip.textContent = iconName;
            tooltip.style.top = `${icon.offsetTop - tooltip.offsetHeight}px`;
            tooltip.style.left = `${icon.offsetLeft}px`;
            tooltip.style.display = 'block';
        }

        document.querySelectorAll('.button-icon').forEach(icon => {
            icon.addEventListener('mouseleave', () => {
                const tooltip = document.getElementById('icon-tooltip');
                tooltip.style.display = 'none';
            });
        });

        function toggleMessagePopup() {
            const messagePopup = document.getElementById('message-popup');
            messagePopup.classList.toggle('hidden');
        }

        function mostrarContenido(contenidoAMostrar) {
            // Ocultar todos los divs de contenido
            const todosLosDivs = document.querySelectorAll('.content');
            todosLosDivs.forEach(div => div.classList.add('hidden'));
            
            // Mostrar el div correspondiente al enlace clickeado
            const divMostrar = document.getElementById(contenidoAMostrar);
            divMostrar.classList.remove('hidden');
        }
    </script>
</body>
</html>
