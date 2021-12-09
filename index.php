<!doctype html>
<html lang="fr" class="h-100">
<?php include 'include/fonctions.inc.php'; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title>Le Bock Trotter · Le site d'un cervalobélophile</title>
    <meta name="description" content="Site d'un collectionneur de sous-bocks, capsules, tapis de bar, décapsuleurs, ramasse-monnaies et autres objets de brasserie.">

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

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/img/favicon.png" />

    <?php include "include/matomo.inc.php"; ?>

    <meta name="google-site-verification" content="CT6-MJGUD82ligpXoIBjdglp4CyBIFXPum0LuBbcsD4" />

</head>

<body class="d-flex flex-column h-100">

<?php include "include/header.inc.php"; ?>

<main class="flex-shrink-0">

  <section class="pt-5 text-center container">

    <div id="definition1"></div>

    <div class="row py-2 py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light mb-5">C'est quoi un sous-bock ?</h1>
        <p class="lead text-muted">Ce site vous présente ma collection de sous-bocks, que certains nomment aussi ronds à bière ou encore sous-verres, et autres objets de brasserie à travers <strong><?php echo countImages(); ?> photos</strong><sup>1</sup>. L'origine des sous-bocks cartonnés que nous connaissons aujourd'hui remonte à la fin du XIXe siècle. Ils furent probablement inventés en Allemagne, terre brassicole par excellence quand en 1880, l'entreprise d'imprimerie et de cartonnage Friederich Horn de Buckau, près de Magdebourg, a découpé des dessous de verre en carton sur lesquels elle imprima divers motifs.</p>
      </div>
    </div>

    <div id="definition2"></div>

    <div class="row py-2 py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light mb-5">Cervalobélophilie</h1>
        <p class="lead text-muted">La cervalobélophilie désigne le fait de collectionner les étiquettes de bière et/ou les sous-bocks. Les différentes catégories de ma collection sont accessibles via le menu (en haut de la page). Les sous-bocks y sont triés par pays et par brasserie/entreprise.</p>
      </div>
    </div>

    <div class="row py-5 py-lg-5">
      <div class="col-10 mx-auto">
        <p class="lead text-muted fs-6" style="text-align:justify;"><sup class="me-1">1</sup>Certaines photos sont en double pour faciliter le classement, par exemple, dans le cas d'une brasserie ou d'une marque de bière qui est le sponsor officiel d'un événement.</p>
      </div>
    </div>

  </section>

</main>

<?php include "include/top.inc.php"; ?>
<?php include "include/footer.inc.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
