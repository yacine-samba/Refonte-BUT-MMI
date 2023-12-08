<?php
session_start();
phpinfo();
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
  
<?php require("header.php");?>

  <!-- Fin du Header -->



  <main>

    <!-- Section Home -->
    <div class="home d-flex-row">
      <div class="d-flex-column">
      <h1>BUT <span class="colorgrad">MMI</span></h1>
      <h2>Métiers du Multimédia et de l'Internet</h2>
      <a href="#start" class="btn">
        <p>Découvrir</p>
      </a>
      <p>Une formation publique postbac qui allie marketing digital, développement et design.</p>
      </div>
      <div class="d-flex-column imghome">
        <img src="img/bghome.png" alt="Image d'illustration">
      </div>
    </div>


    <!-- Chiffres clés de la formation -->

    <div id="start" class="number-counters d-flex-column m-spacing">
      <h1>MMI : les chiffres clé de la formation</h1>
      <div class="d-flex-row">
      <div class="d-flex-row">
        <div class="number d-flex-column"><i class="fa-solid fa-users"></i>
          <h1 class="colorgrad">56</h1>
          <h2>PLACES</h2>
        </div>
        <div class="number d-flex-column"><i class="fa-solid fa-file-user"></i>
          <h1 class="colorgrad">2500</h1>
          <h2>CANDIDATS CHAQUE ANNÉE</h2>
        </div>
      </div>
      <div class="d-flex-row">
        <div class="number d-flex-column"><i class="fa-solid fa-graduation-cap"></i>
          <h1 class="colorgrad">1600</h1>
          <h2>DIPLÔMÉS</h2>
        </div>
        <div class="number d-flex-column"><i class="fa-solid fa-school"></i>
          <h1 class="colorgrad">28</h1>
          <h2>ANS D'ÉXISTANCE</h2>
        </div>
      </div>
      </div>
    </div>


    <!-- Explication MMI -->
    <div class="focused bglight d-flex-column">
    <h2>Vos rêves d'avenir prennent vie !</h2>
      <div class="d-flex-row">
      <img class="img-character" src="img/3d-characters/startup-3025714-2526912.png" alt="Image reves MMI">
      <div class="d-flex-column">
        <h3>UN PARCOURS EN <span class="colorgrad">3 ANS</span></h3>
        <p>Choisissez entre le parcours <strong><span class="colordev">développement web</span></strong> et <strong><span class="colorcrea">création numérique</span></strong>.</p>
        <p>La possibilité de faire la dernière année en <strong>alternance</strong>.</p>
        <div class="d-flex-column">
          <h3>IUT DE <span class="colorgrad">CHAMPS SUR MARNE</span></h3>
          <p>Situé sur le campus de <strong>cité Descartes</strong>, l’IUT est <strong>proche des transports</strong>. (RER A)</p>
        </div>
      </div>
      </div>
      
    </div>

    <!-- Explication MMI-2 -->

    <div class="d-flex-column explain">
      <h1>
        LA FORMATION DES MÉTIERS DU <span class="colordev">WEB</span> ET DU <span class="colorcrea">MULTIMÉDIA</span>
      </h1>

      <div class="d-flex-column formation">
        <h2>UNE FORMATION UNIVERSITAIRE</h2>
        <div class="d-flex-row">
        <img class="fimg" src="img/3.jpg" alt="Image qui represente la formation mmi">
        <p>Le BUT MMI facilite l'intégration de plusieurs méthodes de formation, y compris un cursus national commun menant à un diplôme reconnu par l'état. L'enseignement est désormais proposé dans plus de 30 universités à travers la France, cela permet de poursuivre vers une autre université accessible via Bac+4 ou une école spécialisée.
        </p>
        </div>
        
      </div>

      <div class="d-flex-column formation">
        <h2>UNE FORMATION PLURIDISCIPLINAIRE</h2>
        <div class="d-flex-row">
        <img  class="fimg" src="img/Infographie-2.jpg" alt="Image qui represente la formation mmi">
        <p>Intégrer le BUT MMI, c'est s'assurer d'acquérir une expertise globale dans le domaine du multimédia et Internet, ainsi que des compétences techniques polyvalentes. La formation couvre tous les domaines du numérique, de la création de site web à la création de vidéos et la conception de contenus.</p>
        </div>
      </div>

      <div class="d-flex-column formation">
        <h2>UNE FORMATION PROFESSIONNALISANTE</h2>
        <div class="d-flex-row">
        <img class="fimg" src="img/cours2.jpg" alt="Image qui represente la formation mmi">
        <p>L'intégration BUT MMI aboutit à une formation qui permet aux étudiants de mettre en pratique leurs compétences dans un projet de mentorat, de réfléchir à leurs aspirations à travers un Projet Personnel et Professionnel (PPP), et de se confronter à l'emploi lors d'un stage en entreprise.</p>
        </div>
      </div>
    </div>
    <!-- Modules MMI -->

    <a href="enseignements.php">
      <div class="d-flex-column h-modules">
        <h2 class="colorgrad">VOIR LES MODULES D'ENSEIGNEMENTS</h2>
        <img class="img-character" src="img/3d-characters/login-3025715-2526913.png" alt="Image d'illustration">
      </div>
    </a>
    <!-- Projets MMI -->

    <div class="d-flex-column home-projet">
      <h1>
        Les projets des étudiants en <span class="colorgrad">BUT MMI</span>
      </h1>
      <h3>MMI, c'est aussi crée et entreprendre de nouveaux projets.</h3>

      <?php
      // Récupération des 8 derniers projets
      $query = "SELECT projets.*, images.file_name FROM projets LEFT JOIN images ON projets.id_projet = images.id_projet GROUP BY projets.id_projet ORDER BY projets.date_creation DESC LIMIT 8";
      $result = $db->prepare($query);
      $result->execute();
      $projets = $result->fetchAll(); ?>
      <div class="projets">

        <?php
        foreach ($projets as $projet) : ?>
          <div class="card" style="background-image: url(uploaded_images/<?php echo $projet['file_name']; ?>)">
            <div class="content">
              <h2 class="titre"><?php echo $projet['titre']; ?></h2>
              <p class="auteur"><?php echo $projet['auteur']; ?></p>
              <p><?php echo $projet['date_creation'] ?></p>
              <a href="projet.php?id=<?php echo $projet['id_projet']; ?>" class="btn-projet">voir le projet</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <a href="projets.php" class="btn">Voir tous les projets</a>
    </div>

    



    <!-- Témoignages MMI -->


    <div class="d-flex-column testimonials">
      <h1>
        Témoignages
      </h1>

      <div class="d-flex-row">
        <h2 class="colordev">Esprit d'équipe</h2>
        <h2 class="colorgrad">Créativité</h2>
        <h2 class="colorcrea">Innovation</h2>
      </div>


      <div class="d-flex-column testimonial">
        <p class="bglight d-flex-row">"Une très belle formation qui met bien en évidence la polyvalence des étudiants !"</p>
        <div class="d-flex-row">
          <div class="d-flex column">
            <h3>FARIA SANTOS Rui</h3>
            <p class="colordev">Développement web et dispositifs interactifs</p>
          </div>
        </div>
      </div>

      <div class="d-flex-column testimonial">
        <p class="bglight d-flex-row">"Incroyable, une expérience folle ! Parfois compliqué mais je n'en reste pas moins plus que satisfait !" </p>
        <div class="d-flex-row">
          <div class="d-flex column">
            <h3>Noam Sebahoun</h3>
            <p class="colordev">Développement web et dispositifs interactifs</p>
          </div>
        </div>
      </div>

      <a href="temoignages.php">
        <p class="btn">Voir Plus de témoignages</p>
      </a>

    </div>

    <div class="d-flex-column">
    <h3>Comment nous rejoindre ?</h3>
    <p>L'IUT de Gustave Eiffel est accessible par transport avec la ligne du RER A à 20 min de Paris.</p>
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2224.2821242546747!2d2.5847756004331544!3d48.83718891317353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60e33dd9a3fdd%3A0x7e5ced48ab7fc8df!2sIUT%20de%20Marne-la-Vall%C3%A9e%20-%20Universit%C3%A9%20Gustave%20Eiffel!5e0!3m2!1sfr!2sfr!4v1674058238264!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </main>

  <?php require("footer.php"); ?>
  <!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> -->

  <script src="js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</body>

</html>
