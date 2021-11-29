<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title>Le Bock Trotter ·  Formulaire de contact · Le site d'un cervalobélophile</title>
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
    <?php include "./include/matomo.inc.php"; ?>

</head>

<body>

<?php include "./include/header.inc.php"; ?>

<main>

  <section class="py-2 text-center container">

    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
            <?php

            if (isset($_POST['nom']) and isset($_POST['courriel']) and isset($_POST['message']))
                {
                echo '<h1 class="fw-light">Message envoyé</h1>';
                echo '<p class="lead text-muted">Votre message a bien été envoyé !<br />';
                echo 'Je vous répondrais le plus vite possible</p>';

                $to  = 'alexis.amand@gmail.com, '.$_POST['courriel'];

                // Sujet
                $subject = 'Le Bock Trotter';

                // message
                $message = "Nom : ".$_POST['nom']."<br />"
                ."E-mail : ".$_POST['courriel']."<br />"
                ."Message : "."<br />".$_POST['message']."<br />";

                // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
                $headers = 'MIME-Version: 1.0'."\n";
                $headers .= 'Content-type: text/html; charset=utf-8'."\n";
                $headers .='From: "Message de Histoires de Poilus"<'.$_POST['courriel'].'>'."\n";

                $envoyer = mail($to, $subject, $message, $headers);
                
                if (!$envoyer)
                    {
                    echo '<p class="alert alert-warning" role="alert">erreur !</p>';
                    $errorMessage = error_get_last()['message'];
                    echo $errorMessage;
                    }
                }
            else
                {
                header('Location: http://lebocktrotter.test/index.php');                    
                exit();
                }
            ?>

      </div>
    </div>

  </section>

</main>

<?php include "./include/footer2.inc.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script>
    //  JavaScript will go here
</script>

</body>
</html>


