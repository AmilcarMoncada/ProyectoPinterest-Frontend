<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crear Pin</title>
<link rel="stylesheet" href="../resources/css/crearPin.css">
</head>
<body>
<div class="pin-form">
  <h1>Crear Pin</h1>
  <form action="#">
    <div class="form-group">
      <label for="pin-image">URL IMAGEN</label>
      <input type="text" id="pin-image" name="pin-image" required>
    </div>
    <div class="form-group">
      <label for="pin-description">Descripcion:</label>
      <textarea id="pin-description" name="pin-description" required></textarea>
    </div>
    <div class="form-group">
      <label for="board-select">Seleccione un tablero:</label>
      <div class="custom-select">
        <select id="board-select" name="board-select" required>
          <option value="">Por favor selecciona un tablero</option>
            <option value="1">Tablero</option>
            <option value="2">Tablero 2</option>
        </select>
        </select>
      </div>
    </div>
    <div class="form-group">
      <button id="Crear-Pin"type="submit">Crear Pin</button>
      <button id="Volver" type="button" onclick="window.history.back()">Volver</button>
    </div>
  </form>
</div>
</body>
</html>
