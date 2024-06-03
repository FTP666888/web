<?php include '../php/auth.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/normalize.css" />
  <link rel="stylesheet" href="../css/styles.css" />
  <meta charset="UTF-8" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CECyTEQ</title>
</head>

<body>
  <header class="contenedor">
    <nav class="contenedor__navegacion">
      <a href="../index.php">
        <img class="navegacion__logo" src="../img/logocecyteq.png" alt="logo CECyTEQ" />
      </a>
      <a class="navegacion__links" href="carreras.php">Carreras</a>
      <a class="navegacion__links" href="planteles.php">Planteles</a>
      <a class="navegacion__links" href="profesores.php">Profesores</a>
      <a class="navegacion__links" href="nosotros.php">Nosotros</a>
      <a class="navegacion__links seleccionado" href="quizz.php">Quizz</a>
    </nav>
    <h1 class="tiempo centrado" id="time">Tiempo restante: 00:00</h1>
  </header>
  <main class="main">
    <div class="quiz" id="quiz"></div>
    <div class="quiz__buttons">
      <button id="prev" onclick="prevQuestion()" disabled>Anterior</button>
      <button id="next" onclick="nextQuestion()">Siguiente</button>
    </div>
    <div class="results" id="results"></div>
  </main>
  <footer>
    <p class="centrado">Delgadillo Montoya Jafet Aldahir - 2024</p>
  </footer>
  <script src="../javascript/quizz.js"></script>
</body>

</html>