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
  <h1>Agregar Pin A Tablero</h1>
  <form action="#">
    <div class="form-group">
        <label for="board-select">Seleccione un Pin</label>
        <div class="custom-select">
          <select id="board-select" name="board-select" required>
            <option value="">Por favor selecciona un Pin</option>
              <option value="1">Pin 1</option>
              <option value="2">Pin 2</option>
          </select>
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
      <button id="Crear-Pin"type="submit">Agregar Pin</button>
      <button id="Volver" type="button" onclick="window.history.back()">Volver</button>
    </div>
  </form>
</div>
</body>
</html>
