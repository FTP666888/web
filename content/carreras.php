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
      <a class="navegacion__links seleccionado" href="#">Carreras</a>
      <a class="navegacion__links" href="planteles.php">Planteles</a>
      <a class="navegacion__links" href="profesores.php">Profesores</a>
      <a class="navegacion__links" href="nosotros.php">Nosotros</a>
      <a class="navegacion__links" href="quizz.php">Quizz</a>
    </nav>
  </header>
  <main class="main carreras">
    <div class="main__carrera">
      <div class="carrera__title-icon">
        <img src="../img/btnbiote.png" alt="biotecnologia" class="icon" />
        <h2>Biotecnología</h2>
      </div>
      <div class="carrera__descripcion">
        <p class="centrado">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Repellendus nam assumenda, corporis voluptatem distinctio sit illum
          recusandae dolore porro! Cupiditate nesciunt, reprehenderit
          provident accusantium voluptates nostrum omnis rerum officia. Sequi!
        </p>
      </div>
    </div>
    <div class="main__carrera">
      <div class="carrera__title-icon">
        <img src="../img/btnprogramacion.png" alt="biotecnologia" class="icon" />
        <h2>Programación</h2>
      </div>
      <div class="carrera__descripcion">
        <p class="centrado">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Repellendus nam assumenda, corporis voluptatem distinctio sit illum
          recusandae dolore porro! Cupiditate nesciunt, reprehenderit
          provident accusantium voluptates nostrum omnis rerum officia. Sequi!
        </p>
      </div>
    </div>
    <div class="main__carrera">
      <div class="carrera__title-icon">
        <img src="../img/btnmecatronica.png" alt="biotecnologia" class="icon" />
        <h2>Mecatrónica</h2>
      </div>
      <div class="carrera__descripcion">
        <p class="centrado">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Repellendus nam assumenda, corporis voluptatem distinctio sit illum
          recusandae dolore porro! Cupiditate nesciunt, reprehenderit
          provident accusantium voluptates nostrum omnis rerum officia. Sequi!
        </p>
      </div>
    </div>
    <div class="main__carrera">
      <div class="carrera__title-icon">
        <img src="../img/btnlogisticaverde.png" alt="biotecnologia" class="icon" />
        <h2>Logística</h2>
      </div>
      <div class="carrera__descripcion">
        <p class="centrado">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Repellendus nam assumenda, corporis voluptatem distinctio sit illum
          recusandae dolore porro! Cupiditate nesciunt, reprehenderit
          provident accusantium voluptates nostrum omnis rerum officia. Sequi!
        </p>
      </div>
    </div>
    <div class="main__carrera">
      <div class="carrera__title-icon">
        <img src="../img/btnpga.png" alt="biotecnologia" class="icon" />
        <h2>Procesos de gestión administrativa</h2>
      </div>
      <div class="carrera__descripcion">
        <p class="centrado">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Repellendus nam assumenda, corporis voluptatem distinctio sit illum
          recusandae dolore porro! Cupiditate nesciunt, reprehenderit
          provident accusantium voluptates nostrum omnis rerum officia. Sequi!
        </p>
      </div>
    </div>
  </main>
  <footer>
    <p class="centrado">Delgadillo Montoya Jafet Aldahir - 2024</p>
  </footer>
</body>

</html>