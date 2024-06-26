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
      <a class="navegacion__links seleccionado" href="#">Planteles</a>
      <a class="navegacion__links" href="profesores.php">Profesores</a>
      <a class="navegacion__links" href="nosotros.php">Nosotros</a>
      <a class="navegacion__links" href="quizz.php">Quizz</a>
    </nav>
  </header>
  <main class="main">
    <div class="ubicacion">
      <h1 class="ubicacion__plantel">
        Estado
        <p class="plantel__desc">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique,
          laudantium! Ducimus fugiat adipisci eum numquam? Officia itaque
          animi tempora dolores neque distinctio maiores illo voluptas aliquam
          voluptatibus, delectus doloremque at.
        </p>
      </h1>
      <iframe class="plantel__ubicacion" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.9858170065495!2d-100.39675782557902!3d20.547761204127028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d3450616090309%3A0x44309b910751f6f6!2sCECYTEQ%20CORREGIDORA!5e0!3m2!1ses-419!2smx!4v1710300284445!5m2!1ses-419!2smx" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="ubicacion">
      <h1 class="ubicacion__plantel">
        Estado
        <p class="plantel__desc">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique,
          laudantium! Ducimus fugiat adipisci eum numquam? Officia itaque
          animi tempora dolores neque distinctio maiores illo voluptas aliquam
          voluptatibus, delectus doloremque at.
        </p>
      </h1>
      <iframe class="plantel__ubicacion" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.4772119717004!2d-100.3767874549371!3d20.650155465981314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b2d2e7fc5e3%3A0x7f27c78bac2612d8!2sCECYTEQ%20plantel%20Menchaca%2008!5e0!3m2!1ses-419!2smx!4v1710304064225!5m2!1ses-419!2smx" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </main>
  <footer>
    <p class="centrado">Delgadillo Montoya Jafet Aldahir - 2024</p>
  </footer>
</body>

</html>