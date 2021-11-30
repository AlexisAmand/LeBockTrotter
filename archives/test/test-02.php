<!DOCTYPE html>
<html lang="fr" class="h-100">
<?php include '../../include/fonctions.inc.php'; ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap 5 Responsive Image Gallery Example</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Coming+Soon&family=Unkempt&display=swap" rel="stylesheet">

           <style> 

            header h1 {
                font: normal normal 60px Unkempt;
                color: #b5cb31;
                text-shadow: 1px 2px 3px rgba(0, 0, 0, .2);
            }

            h2, .card-title {
                font: normal bold 20px Coming Soon;
                color: #737f41;
            }

            h2 {
                font: normal normal 40px Unkempt;
            }

            footer {
                background-color: #94992d;
                text-align: center;
            }

            ul {
                color: #64462e;
            }

            </style>

    </head>

    <body style="background-image:url('beer.jpg');background-size:cover">

        <div class="container" style="background-color:#64462e">

            <header>
                <h1 class="text-center">Le Bock Trotter</h1>
            </header>

            <div class="row">
                <div class="col-12">
                    <p style="text-align:justify;color:#fce5cd;">Ce site vous présente ma collection de sous-bocks que certains nomment aussi ronds à bière ou encore sous-verres. L'origine des sous-bocks cartonnés que nous connaissons aujourd'hui remonte à la fin du XIXe siècle. Ils furent probablement inventés en Allemagne, terre brassicole par excellence quand en 1880, l'entreprise d'imprimerie et de cartonnage Friederich Horn de Buckau, près de Magdebourg, a découpé des dessous de verre en carton sur lesquels elle imprima divers motifs.</p>
                </div>
            </div>

        </div>

        <div class="container" style="background-color:#fce5cd">

            <div class="row">

                <h2 class="my-3">Lorem ipsum</h2>

                <div class="col-10">

                    <div class="row">

                        <div class="col-md-4 mt-3 col-lg-3">
                            <img src="img/belzebuth.jpg" class="img-fluid  m-2 rounded" alt="image">
                            <img src="img/bete-des-vosges.jpg" class="img-fluid  m-2 rounded" alt="image">
                            <img src="img/bitburger__recto_.jpg" class="img-fluid  m-2 rounded" alt="image">
                            <img src="img/douwe-egbert.jpg" class="img-fluid  m-2 rounded" alt="image">
                        </div>

                        <div class="col-md-4 mt-3 col-lg-3">
                            <img src="img/bitburger__verso_.jpg" class="img-fluid m-2 rounded" alt="image">
                            <img src="img/blanche-de-namur.jpg" class="img-fluid m-2 rounded" alt="image">
                            <img src="img/blanche-des-neiges.jpg" class="img-fluid m-2 rounded" alt="image">
                            <img src="img/gini.jpg" class="img-fluid m-2 rounded" alt="image">
                        </div>

                        <div class="col-md-4 mt-3 col-lg-3">
                            <img src="img/brugse-tripel.jpg" class="img-fluid m-2 rounded" alt="image">
                            <img src="img/bush.jpg" class="img-fluid m-2 rounded" alt="image">
                            <img src="img/ciney.jpg" class="img-fluid m-2 rounded" alt="image">
                        </div>

                        <div class="col-md-4 mt-3 col-lg-3">
                            <img src="img/corsendonk.jpg" class="img-fluid m-2 rounded" alt="image">
                            <img src="img/desperados.jpg" class="img-fluid m-2 rounded" alt="image">
                        </div>

                    </div>

                </div>

                <div class="col-2">

                    <div class="card mt-3 bg-transparent">
                        <div class="card-body">
                            <h5 class="card-title">Dolor sit amet</h5>
                            <p class="card-text">
                                <ul>
                                    <li>rubrique</li>
                                    <li>rubrique</li>
                                    <li>rubrique</li>
                                    <li>rubrique</li>
                                </li>
                            </p>
                        </div>
                    </div>

                    <div class="card mt-3 bg-transparent">
                        <div class="card-body">
                            <h5 class="card-title">Dolor sit amet</h5>
                            <p class="card-text">
                                <ul>
                                    <li>rubrique</li>
                                    <li>rubrique</li>
                                    <li>rubrique</li>
                                    <li>rubrique</li>
                                </li>
                            </p>
                        </div>
                    </div>

                    <div class="card my-3 bg-transparent">
                        <div class="card-body">
                            <h5 class="card-title">Dolor sit amet</h5>
                            <p class="card-text">
                                <ul>
                                    <li>rubrique</li>
                                    <li>rubrique</li>
                                    <li>rubrique</li>
                                    <li>rubrique</li>
                                </li>
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <footer class="row">

                <div class="col-12 my-5">

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                </div>

            </div>

        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    </body>
</html>