<!doctype html>
<html lang="fr" class="h-100">
<?php include '../../include/fonctions.inc.php'; ?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexis AMAND and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title>Le Bock Trotter · Brasserie Hoegaarden</title>
    <meta name="description" content="Le site d'un cervalobélophile. Collection de sous-bocks et d'objets de brasserie liés à la Brasserie Hoegaarden">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Coming+Soon&family=Unkempt&display=swap" rel="stylesheet">

    <!-- CSS perso -->
    <link href="/css/style.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
     
    <!-- CSS de Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/img/favicon.png" />

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
    <?php include "../../include/matomo.inc.php"; ?>

</head>
                                                                                                                                                                                           
<body class="d-flex flex-column h-100">
    
<?php include "../../include/header.inc.php"; ?>

<main class="flex-shrink-0">

  <section class="py-2 text-center container">

    <div class="row py-2 py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light mb-5">Brasserie Hoegaarden</h1>
        <p class="lead text-muted">La Hoegaarden est une bière blanche originaire de Hoegaarden en Belgique. Elle est disponible dans plus de 70 pays. C'est une marque du groupe AB InBev, le plus gros brasseur du monde. Elle est produite à la Brasserie Hoegaarden (ex Brasserie De Kluis).</p>
      </div>
    </div>

  </section>

  <div class="album py-5">
    <div class="container">

      <?php afficheCollection(); ?>
    </div>
  </div>

</main>

<?php include "../../include/top.inc.php"; ?>
<?php include "../../include/footer.inc.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

</body>
</html>
