<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Actualizar Perfil</title>
<link rel="stylesheet" href="{{ url('css/actualizarPerfil.css') }}">
</head>
<body>
<div class="pin-form">
  <h1>Actualizar Perfil</h1>
  <form action="#">
    <div class="form-group">
      <label for="pin-image">URL IMAGEN</label>
      <input type="text" id="pin-image" name="pin-image" required>
    </div>
    <div class="form-group">
      <label for="pin-description">Pasatiempos:</label>
      <textarea id="pin-description" name="pin-description" required></textarea>
    </div>
    <div class="form-group">
      <div class="custom-select">
        </select>
        </select>
      </div>
    </div>
    <div class="form-group">
      <button id="Crear-Pin"type="submit">Actualizar Perfil</button>
      <button id="Volver" type="button" onclick="window.history.back()">Volver</button>
    </div>
  </form>
</div>
</body>
</html>
