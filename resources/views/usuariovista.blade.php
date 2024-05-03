<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="{{ url('css/usuariovista.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>

        .pin-container {
            position: relative;
            display: inline-block;
            margin-right: 20px; /* Ajustar el espacio entre los pines */
            margin-bottom: 20px; /* Ajustar el espacio entre las filas de pines */
            background-color: red;
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

        #profile-icon {
        background-image: url({{ $perfil->fotoPerfil }});
        width: 50px; /* Ancho de la imagen */
        height: 50px; /* Altura de la imagen */
        background-size: cover; /* Ajustar la imagen al tamaño del botón */
        }

        .search-bar-mensajes:focus-within {
        outline: none;


        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            
            <div class="title-container">
                <img id="logo" src="https://upload.wikimedia.org/wikipedia/commons/0/08/Pinterest-logo.png" alt="Pinterest Logo">
                <a href="#" class="btn-header">Inicio</a>
                <a href="{{route('pin-crear')}}" class="btn-header">Crear</a>

                <div class="search-bar">
                    <input type="text" placeholder="Buscar...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>
        <div class="btn-container">
            <button id="bell-icon" class="button-icon" onmouseover="showTooltip('bell-icon', 'Notificaciones')"><i class="fas fa-bell bell-icon"></i></button>
            <button id="message-icon" class="button-icon" onclick="toggleMessagePopup()" onmouseover="showTooltip('message-icon', 'Mensajes')"><i class="fas fa-envelope message-icon"></i></button>
            <a href="{{route('usuario-perfil', $perfil->codigoPerfil)}}"><button id="profile-icon" class="button-icon" onmouseover="showTooltip('arrow-icon', 'Tu Perfil')"></button></a>
            <button id="arrow-icon" class="button-icon" onmouseover="showTooltip('arrow-icon', 'Cuenta y mas opciones')" onclick="toggleDropdown()"><i class="fas fa-solid fa-angle-down"></i></button>
            <div class="arrow-content">
                <a href="{{ route('home-landing') }}">Cerrar Sesion</a>
            </div>
        </div>
    </header>
    

    <div id="message-popup" class="hidden">
        <div class="inbox-container">
            <h2>Bandeja de entrada</h2>
            <div class="search-bar-mensajes">
                <input id="buscarmensajes" type="text" placeholder="Buscar mensajes...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            <button id="new-message-btn" onclick="mostrarNuevoMensaje()">><i class="fas fa-pencil-alt"></i>Mensaje Nuevo</button>
        </div>
    </div>


    <section class="hero">
        @foreach ($pines as $pin)
        <div class="pin-container">
            <img class="imagenes-landing" src="{{ asset($pin->pin) }}" alt="Imagen">
            <div class="pin-name">{{ $pin->nombrePin }}</div>
            <div class="pin-actions">
                <button class="save-button">Guardar</button>
            </div>
            <div class="pin-author">
                <img src="{{ asset($pin->usuarioPin->perfilUsuario->fotoPerfil) }}" alt="Avatar">
                <span>{{ $pin->usuarioPin->nombres }}</span>
                <button class="follow-button">Seguir</button>
            </div>
        </div>
        @endforeach
    </section>

    
 <div id="pin-popup" class="pin-popup hidden">
        <button id="close-popup-button" class="close-popup-button">×</button>

        
        <img id="pin-image" src="" alt="Imagen del Pin">
        <div class="sidebar">
           
            <div class="comments-container">
                <h2></h2>
                
                <div class="comment-card">
                    <span class="user-name">Amílcar Moncada:</span>
                    <p>Proyecto</p>
                </div>
                <div class="comment-card">
                    <span class="user-name">David Meza:</span>
                    <p>Pinterest</p>
                </div>
                <div class="comment-card">
                    <span class="user-name">Alejandro Zeron:</span>
                    <p>Base de Datos I</p>
                </div>     
            </div>
            
            <div class="sidebar-content">
                <h2> ## Comentarios</h2>
                <input type="text" class="comment-input" placeholder="Añade un comentario...">
                <button class="comment-button">Enviar Comentario</button>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
             const saveButtons = document.querySelectorAll('.save-button');
             const followButtons = document.querySelectorAll('.follow-button');
             const pinContainers = document.querySelectorAll('.pin-container');
             const pinPopup = document.getElementById('pin-popup');
             const closePopupButton = document.getElementById('close-popup-button');
             const pinImage = document.getElementById('pin-image');
             const commentInput = document.querySelector('.comment-input');
             const messageIcon = document.getElementById('message-icon');
             const messagePopup = document.getElementById('message-popup');
     
             // Agregar evento de clic al botón de cierre del pin emergente
             closePopupButton.addEventListener('click', () => {
                 pinPopup.classList.add('hidden');
             });
     
             // Agregar evento de clic a cada botón "Guardar"
             saveButtons.forEach(button => {
                 button.addEventListener('click', (event) => {
                     event.stopPropagation();
                     button.textContent = 'Guardado';
                     button.style.backgroundColor = 'black';
                 });
             });
     
             // Agregar evento de clic a cada botón "Seguir"
             followButtons.forEach(button => {
                 button.addEventListener('click', (event) => {
                     event.stopPropagation();
                     button.textContent = 'Seguido';
                 });
             });
     
             // Agregar evento de clic a cada contenedor de pin
             pinContainers.forEach(container => {
                 container.addEventListener('click', (event) => {
                     event.stopPropagation();
                     const pinImageSrc = container.querySelector('img').src;
                     pinImage.src = pinImageSrc;
                     pinPopup.classList.remove('hidden');
                 });
             });
     
             // Agregar evento de clic al botón de cerrar el pin emergente
             closePopupButton.addEventListener('click', () => {
                 pinPopup.classList.add('hidden');
             });
     
             // Agregar evento de clic al cuerpo para cerrar el pin emergente al hacer clic fuera de él
             document.body.addEventListener('click', (event) => {
                 const isClickInsidePopup = pinPopup.contains(event.target);
                 if (!isClickInsidePopup) {
                     pinPopup.classList.add('hidden');
                 }
             });
     
             // Agregar evento de clic al botón "Enviar Comentario"
             const sendButton = document.querySelector('.comment-button');
             sendButton.addEventListener('click', () => {
                 commentInput.value = '';
             });
     
             // Agregar evento de clic al icono de mensajes
             messageIcon.addEventListener('click', (event) => {
                 event.stopPropagation();
                 messagePopup.classList.toggle('hidden');
             });
     
             // Agregar evento de clic al cuerpo para cerrar la ventana emergente al hacer clic fuera de ella
             document.body.addEventListener('click', (event) => {
                 const isClickInsidePopup = messagePopup.contains(event.target);
                 if (!isClickInsidePopup) {
                     messagePopup.classList.add('hidden');
                 }
             });
         });
         </script>
</body>
</html>








