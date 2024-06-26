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
      <a class="navegacion__links seleccionado" href="#">Profesores</a>
      <a class="navegacion__links" href="nosotros.php">Nosotros</a>
      <a class="navegacion__links" href="quizz.php">Quizz</a>
    </nav>
  </header>
  <main class="main">
    <div class="info">
      <h1 class="info__profesor">
        Adrián Valdez Guerrero | Programación
        <p class="profesor__desc">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus
          magni, esse architecto reiciendis, rerum earum doloribus qui harum,
          odit eligendi aliquam natus! Asperiores praesentium ipsa suscipit
          assumenda, repudiandae recusandae a?
        </p>
      </h1>
      <figure class="profesor__photo">
        <img src="../img/profesor.jfif" alt="" />
      </figure>
    </div>
  </main>
  <footer>
    <p class="centrado">Delgadillo Montoya Jafet Aldahir - 2024</p>
  </footer>
</body>

</html>