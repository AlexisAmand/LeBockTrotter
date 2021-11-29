<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title>Le Bock Trotter · Le site d'un cervalobélophile</title>
    <meta name="description" content=" ">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Coming+Soon&family=Unkempt&display=swap" rel="stylesheet">

    <!-- CSS perso -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
     
    <!-- CSS de Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/img/favicon.png" />

    <!-- Matomo -->                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    <?php include "../../include/matomo.inc.php"; ?>

</head>
                                                                                                                                                                                           
<body>
    
<?php include "../../include/header.inc.php"; ?>

<main>

  <section class="py-2 text-center container">

    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Brasserie Kronenbourg</h1>
        <p class="lead text-muted">&nbsp;&nbsp;&nbsp;</p>
      </div>
    </div>

  </section>

  <div class="album py-5">
    <div class="container">

      <div class="row row-cols-3 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-3 align-items-stretch">

      <?php
      
      $dir    = './';
      $cdir = scandir($dir);
      $i = 0;

      $iteratorAlbum = new DirectoryIterator($dir);
      foreach ($iteratorAlbum as $value) 
        {
                            
        /* On récup les infos sur le fichier */
        $info = new SplFileInfo($value);

        /* On regarde si le fichier n'est pas ., .. ou un fichier php */
        if ((!in_array($value,array(".","..")) and ($info->getExtension() != 'php')))
          {
          $i++; 

          /* Récup du nom de fichier sans son extension pour la légende */
          $info->getBasename('.jpg'); 
          $nomDuFichier  = str_replace("-", " ", $info->getBasename('.jpg'));
          
          /* Angle aléatoire pour faire une rotation de l'image */
          $input = array("-16deg", "-12deg", "-8deg","-4deg", "4deg","8deg", "12deg", "16deg");
          $rand_keys = array_rand($input, 1);
          
          /* affichage d'une vignette */
      ?>

      <div class="col">
          <div class="card shadow-sm" style="<?php echo 'transform: rotate('.$input[$rand_keys].');' ?>">
          <a href="<?php echo $value; ?>"
              data-fancybox="gallery"
              data-caption="<?php echo ucwords($nomDuFichier); ?>">
          <img src="<?php echo $value; ?>" class="card-img-top" alt=" "></a>
          <div class="card-body">
              <p class="card-text text-center"><?php echo $nomDuFichier ; ?></p>
          </div>
          </div>
      </div>
            
      <?php    

          }

        }

      echo '</div>';

      ?>

      </div>
    </div>
  </div>

</main>

<?php include "../../include/footer.inc.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script>
    //  JavaScript will go here
</script>

</body>
</html>
