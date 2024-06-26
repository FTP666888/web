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
      <a class="navegacion__links seleccionado" href="#">Nosotros</a>
      <a class="navegacion__links" href="quizz.php">Quizz</a>
    </nav>
  </header>
  <main class="main">
    <h1>Conoce de nosotros</h1>
    <div class="main__nosotros">
      <p class="nosotros__texto">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
        eligendi, nihil molestiae dignissimos excepturi perferendis, ipsum a
        dolorem voluptatibus itaque ea, totam enim nesciunt? Asperiores nemo
        inventore labore at eos. l
      </p>
      <figure class="nosotros__img">
        <img src="../img/CECyTE.png" alt="" />
      </figure>
    </div>
  </main>
  <footer>
    <p class="centrado">Delgadillo Montoya Jafet Aldahir - 2024</p>
  </footer>
</body>

</html>