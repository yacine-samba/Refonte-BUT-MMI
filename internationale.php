<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BUT MMI - IUT de Champs sur Marne</title>
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css" />


</head>

<body>
  <?php require("header.php"); ?>
  <main class="international">
    <div class="d-flex-column">
      <h1>BUT <span class="colorgrad">MMI</span></h1>
      <h2>Multimedia and Internet professions</h2>
      <a href="#start" class="btn">
        <p>Discover</p>
      </a>
      <p>A public post-baccalaureate course that combines digital marketing, development and design.</p>
    </div>

    <div id="start">
      <div class="d-flex-row">
      <img class="imgil" src="img/3d-characters/brainstorm-3025718-2526916.png" alt="Image d'illustration">
      <div>
      <h2>Presentation of the course
      </h2>
      <p>The aim of the Communication program (BUT MMI) programme at the Université Gustave Eiffel is to train professionals and make them capable of designing, producing and managing digital communication projects. Students learn the different stages of project creation, from design to implementation, including needs analysis and project management.
      </p><br>
      <p>Subjects taught include programming, graphic design, web design, ergonomics, digital communication and project management. Students also have the opportunity to complete professional internships to put into practice the skills they have learned in class. The course is in 3 years (licence)
      </p><br>
      </div>
      </div>
      <h2>Procedure for foreign students wishing to study in the BUT MMI programme at Gustave Eiffel :
      </h2>
      <div class="d-flex-row">
      <img class="imgil" src="img/vecteezy_3d-graduation-of-university-college-for-student-concept_10838864-[Converted].png" alt="Logo 3D diplome">
      <div>
      <ul>
        <li>Prepare your application documents: to apply for the BUT MMI course at Gustave Eiffel, you will need to fill in an online application form and provide documents such as your high school diploma, a copy of your passport, proof of your French language level (TOEFL or DELF/DALF) and a CV.
        </li><br>
        <li>Apply for your student visa: If you are selected for the course, you will need to apply for a student visa at the French embassy in your home country. Make sure you complete all the required documents and provide evidence of your financial situation (for example, a letter of financial support from your parents or sponsors).
        </li><br>
        <li>You can find accommodation using the services offered by the Crous for students.
          <a href="https://trouverunlogement.lescrous.fr/ ">trouverunlogement.lescrous.fr/ </a>
        </li><br>
        <li>You will need to register with the school by providing all the required documents (your high school diploma, student visa, etc.). You will also have to pay the registration and tuition fees.
        </li><br>
        <li>After the procedure is completed, the teaching staff will take care of you and inform you about the procedures.
        </li><br>
      </ul>
      </div>
      </div>
    </div>

    <a class="btn" href="./">
      <p>
        Return to the home page</p>
    </a>



  </main>

  <?php require("footer.php"); ?>
  <!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> -->

  <script src="js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</body>

</html>