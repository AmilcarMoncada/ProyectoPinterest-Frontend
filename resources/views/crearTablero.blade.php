<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crear Tablero</title>
<link rel="stylesheet" href="../resources/css/crearTablero.css">
</head>
<body>
<div class="pin-form">
  <h1>Crear Tablero</h1>
  <form action="#">
    <div class="form-group">
      <label for="pin-image">URL IMAGEN</label>
      <div>
        <input type="file" id="pin-image" name="pin-image" accept="image/*" onchange="loadFile(event)" required>
        <img id="preview" src="#" alt="Vista previa" style="max-width: 200px; max-height: 200px; display: none;">
      </div>
    </div>
    <div class="form-group">
      <label for="pin-description">Descripción:</label>
      <textarea id="pin-description" name="pin-description" required></textarea>
    </div>
    <div class="form-group">
      <div class="custom-select">
      </div>
    </div>
    <div class="form-group">
      <button id="Crear-Pin" type="submit">Crear Tablero</button>
      <button id="Volver" type="button" onclick="window.history.back(); return false;">Volver</button>
    </div>
  </form>
</div>

<script>
  function loadFile(event) {
    var image = document.getElementById('preview');
    image.src = URL.createObjectURL(event.target.files[0]);
    image.style.display = 'block';
  }
</script>
</body>
</html>
