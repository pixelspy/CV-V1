<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Curriculum vitae</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link media="print" rel="stylesheet" href="print.css">
  <script src="https://use.fontawesome.com/fa834a185b.js"></script>


</head>
<body>

  <main class="page container">
    <header class="header-body row">
      <section class="about row ">
        <img class="photo-portrait col-xs-2" src="picmaa.png" alt="mahana portrait">

        <section class="text-searching col-xs-5">
          <h1 class="nom-logo">MAHANA DELACOUR</h1>
          <h2 class="text-primary titre-nom">Développeuse Web Junior</h2>
          <h2 class="titre-nom">Conceptrice Visuelle</h2>
          <p>Je souhaite apporter mes compétences de graphiste et scénographe aux métiers du numérique. Je suis à la recherche d'un stage et d'un contrat pro en tant que UI/UX et web designer.</p>
        </section>

        <dl class= "coordAll col-xs-5 row ">
          <?php
          $values = array(
            "Adresse : " => "Paris",
            "Tél : " => "0695441314",
            "Email : " => "mahana.delacour@gmail.com",
            "Blog : " => "digitruk.wordpress.com",
            "GitHub : " => "github.com/pixelspy",
            "Linkdln : " => "/mahana-delacour"
          );
          foreach ($values as $key => $value)
          {
            echo '<dt class="title-coord col-xs-6">' . $key . '</dt>';
            echo '<dd class="details-coord col-xs-6">' . $value . '</dd>';
          }?>
        </dl>
      </section>
    </header>

    <section class="experiences row">
      <h1>Experiences</h1>
      <div class="row">
        <img class="icone col-xs-2" src="exp2.png" alt="icone">
        <dl class="col-xs-10 row">
          <?php
          //tableau associatif ou tableau de tableau
          $experiences = array(
            array(
              'date' => '2017',
              'titre' => 'Hackaton, Fondation Orange - Graphiste et développeuse web junior',
              'description' => 'Participation avec deux groupes gagnants.'
            ),
            array(
              'date' => '2016-2017',
              'titre' => 'Ateliers Hour of Code - Animatrice (en cours)',
              'description' => 'Initiation au code et autres outils du numérique.'
            ),
            array(
              'date' => '2016',
              'titre' => 'Opera Orchestre National Montpellier • Conceptrice, créatrice (3mois)',
              'description' => 'Experience intéractive - langage C#.'
            ),
            array(
              'date' => '2016',
              'titre' => 'Futur En Seine, Paris • Conceptrice, créatrice (2mois)',
              'description' => 'Expositions: Experience intéractive - langage C#'
            ),
            array(
              'date' => '2016',
              'titre' => 'Festival d\'Aix • Artiste invitée (1mois)',
              'description' => 'Résidence Création Opéra, European Network Opera Academy'
            ),
            array(
              'date' => '2010-2017',
              'titre' => 'Bénévolat - Tutrice périscolaire',
              'description' => 'Soutien pour enfants avec des difficultés d\'apprentissage et de comportement,
              en groupe et en entretien individuel. (en cours)'
            )
          );
          foreach ($experiences as $key){
            echo '<dt class="col-xs-2">' . $key['date'] . '</dt>';
            echo '<div class="col-xs-10"><dd class="titles">' . $key['titre'] . '</dd>';
            echo '<p>' . $key['description'] . '</p></div>';
          }?>
        </dl>
      </div>


    </section>

    <section class="skills row">
      <h1>Compétences</h1>
      <div class="row">
        <img class="icone col-xs-2" src="skills2.png" alt="icone">
        <dl class="col-xs-10 row">


          <?php
          $skills = array(
            "Conception Design" => '
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>',
            "Graphisme" => '
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>',
            "Production Vidéo" => '
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle-thin" aria-hidden="true"></i>',
            "HTML / CSS" => '
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle-thin" aria-hidden="true"></i>
            <i class="fa fa-circle-thin" aria-hidden="true"></i>',
            "Javascript" => '
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle-thin" aria-hidden="true"></i>
            <i class="fa fa-circle-thin" aria-hidden="true"></i>
            <i class="fa fa-circle-thin" aria-hidden="true"></i>',
            "PHP / MySql" => '
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle-thin" aria-hidden="true"></i>
            <i class="fa fa-circle-thin" aria-hidden="true"></i>
            <i class="fa fa-circle-thin" aria-hidden="true"></i>'
          );
          foreach ($skills as $key => $value){
            echo '<dt class="col-xs-3">' . $key . ': </dt>' ;
            echo '<dd class="col-xs-9">' . $value . '</dd>';
          } ?>
        </dl>
      </div>
    </section>

    <section class="hobbies row">
      <h1>Loisirs</h1>
      <div class="row">
        <img class="icone col-xs-2" src="hobb.png" alt="icone">
        <dl class="contentHobb col-xs-10 row">
          <?php
          $hobbies = array(
            array(
              'hobbie' => '<i class="fa fa-desktop" aria-hidden="true"></i>    Internet',
              'detailsHobb' => 'Blog de veille: digitruk.wordpress.com. <br>
              Sujets d\'intéret: <br>
              astuces de programmation, <br>
              évènements culturels /art numérique.'
            ),
            array(
              'hobbie' => '<i class="fa fa-camera" aria-hidden="true"></i>    Photographie',
              'detailsHobb' => 'Canon D4 <br>
              Objectifs: <br>Zoom 14-24mm, Zoom 70-300mm, <br>Nikkor 105mm, Nikkor 24mm.'
            ),
            array(
              'hobbie' => '<i class="fa fa-pencil" aria-hidden="true"></i>     Animation',
              'detailsHobb' => 'Suite Adobe: Photoshop, Illustrator, InDesign, After Effect - technique 2D et rotoscopie'
            ),
            array(
              'hobbie' => '<i class="fa fa-book" aria-hidden="true"></i>       Sérigraphie',
              'detailsHobb' => 'Impression sur papier et tissus.<br> Atelier partagé, Mairie de Paris'
            )
          );?>

          <?php
          foreach ($hobbies as $key){
            echo '<dt class="col-xs-2">' . $key['hobbie'] . '</dt>';
            echo '<dd class="col-xs-4">' . $key['detailsHobb'] . '</dd>';

          }

          ?>

        </dl>
      </div>

    </section>

    <section class="education row">
      <h1>Formations</h1>
      <div class="row">
        <img class="icone col-xs-2" src="educ1.png" alt="icone">
        <dl class="col-xs-10 row">
          <?php
          $education = array(
            array(
              'date' => '2016 - 2017',
              'titleEd' => 'Simplon.co • Paris 20',
              'detailEd' => 'Formation longue: développeur.se web junior, spéc. PHP'
            ),
            array(
              'date' => '2009 - 2014',
              'titleEd' => 'Central Saint Martin\'s School of Art and Design •  Londres',
              'detailEd' => 'License et Master Arts, mention design, parcours scénographie'
            )
          );
          foreach ($education as $key){
            echo '<dt class="col-xs-2">' . $key['date'] . '</dt>';
            echo '<div  class="col-xs-10"><dd class="titles">' . $key['titleEd'] . '</dd><p>' . $key['detailEd'] . '</p></div>';
          } ?>
        </dl>
      </div>

    </section>

    <footer>
    </footer>
  </main>
</body>
</html>
