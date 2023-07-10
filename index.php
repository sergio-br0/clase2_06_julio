<!doctype html>
<html lang="en">

<head>
  <title>Información Personal</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Font Awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    select {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background-repeat: no-repeat;
      background-position: right center;
      background-size: 10px;
    }

    button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .social-icons {
      text-align: center;
      margin-top: 20px;
    }

    .social-icons a {
      display: inline-block;
      margin-right: 10px;
      color: #333;
      font-size: 20px;
    }

  </style>
</head>

<body>
  <h1 id="titulo">Información Personal</h1>

  <form class="formulario">
    <label for="nombres">Nombres</label>
    <input type="text" id="nombres" placeholder="Nombres" required>

    <label for="apellidos">Apellidos</label>
    <input type="text" id="apellidos" placeholder="Apellidos" required>

    <label for="telefono">Número de Teléfono</label>
    <input type="text" id="telefono" placeholder="Teléfono" required>

    <label for="correo">Correo Electrónico</label>
    <input type="email" id="correo" placeholder="Correo Electrónico" required>

    <label for="sexo">Sexo</label>
    <select id="sexo" required>
      <option value="">Selecciona sexo</option>
      <option value="Femenino">Femenino</option>
      <option value="Masculino">Masculino</option>
      <option value="Otro">Otro</option>
    </select>

    <button id="botonEnviar">Enviar</button>
  </form>

<div id="cajaTexto">
  <p class="text-primary" id="parrafo1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, eligendi obcaecati. Natus assumenda eius quos quasi veniam saepe praesentium quaerat beatae! Esse ipsum nihil dolorem eligendi quasi possimus atque praesentium.</p>
  <p id="parrofo2" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, eligendi obcaecati. Natus assumenda eius quos quasi veniam saepe praesentium quaerat beatae! Esse ipsum nihil dolorem eligendi quasi possimus atque praesentium.</p>
  <p id="parrafo3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, eligendi obcaecati. Natus assumenda eius quos quasi veniam saepe praesentium quaerat beatae! Esse ipsum nihil dolorem eligendi quasi possimus atque praesentium.</p>
  <p class="parrafo4" class="text-success">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, eligendi obcaecati. Natus assumenda eius quos quasi veniam saepe praesentium quaerat beatae! Esse ipsum nihil dolorem eligendi quasi possimus atque praesentium.</p>
</div>
 

  <div class="social-icons">
    <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
    <a id="enlace2" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
    <a href="http://www.youtube.com"><i class="fab fa-youtube"></i></a>
  </div>

  <!-- Font Awesome script -->
  <script src="scripts.js"></script>
</body>

</html>
