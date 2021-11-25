
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title>Le Bock Trotter · Album example · Bootstrap v5.1</title>
    <meta name="description" content="">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<?php include "../include/header.inc.php"; ?>

<main  style="background-color:#fcf8ec;">

  <section class="py-5 text-center container">

    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Rubrique de test</h1>
      </div>
    </div>

  </section>

  <div class="album py-5">
    <div class="container">

    <div class="row row-cols-3 row-cols-sm-4 row-cols-md-4 row-cols-lg-5 g-3 align-items-stretch">

    <?php
    
    $dir    = './';
    $cdir = scandir($dir);
    $i = 0;
                        
    /* On compte le nombre de fichiers dans le dossier et on enléve  3 (. et ..) ainsi que le fichier index.php */
    // $nb = (count($cdir) - 3) / 4;
    // var_dump($nb);

    foreach ($cdir as $key => $value)
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
                
        ?>

                <div class="col">
                    <div class="card shadow-sm">
                    <img src="<?php echo $value; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center" style="font-variant:small-caps;text-transform: capitalize;"><?php echo $nomDuFichier; ?></p>
                    </div>
                    </div>
                </div>
          
          <?php    

                }

            /*
            if ($i == ceil($nb))
                {
                echo '</div>';
                echo '<div class="col-md-4 mt-3 col-lg-3">';
                $i = 0;
                }                              
            */
        }

    echo '</div>';

    ?>

      </div>

    </div>
  </div>

</main>

<?php include "../include/footer.inc.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
