<?php

/* Fonction qui parcourt le dossier parent pour afficher les images qu'il contient sous la forme d'une galerie */

function afficheCollection()
    {
    $dir    = './';
    $i = 0;
    $row = '<div class="row row-cols-3 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-3 align-items-stretch';
    $iteratorAlbum = new DirectoryIterator($dir);

    /* on compte le nombre d'images présentes dans le dossier et on le met dans $i */    

    foreach ($iteratorAlbum as $value)
        {

        /* On récup les infos sur le fichier */
        $info = new SplFileInfo($value);

        /* On regarde si le fichier n'est pas . ou .. et si c'est bien un jpg */
        if ((!in_array($value,array(".","..", "thumbs")) and ($info->getExtension() == 'jpg')))
            {
            $i++;
            }

        }

    /* Si le nombre d'images est petit, on centre les vignettes */
    if($i<5)
        { 
        echo $row.' justify-content-center">';  
        }
    else
        {
        echo $row.'">';    
        }

    /* on affiche les vignettes */

    foreach ($iteratorAlbum as $value)
        {

        /* On récup les infos sur le fichier */
        $info = new SplFileInfo($value);

        /* On regarde si le fichier n'est pas ., .. ou un fichier php */
        if ((!in_array($value,array(".","..", "thumbs")) and ($info->getExtension() == 'jpg')))
            {
 
            /* Récup du nom de fichier sans son extension pour la légende */
            $info->getBasename('.jpg');
            $nomDuFichier  = str_replace("-", " ", $info->getBasename('.jpg'));

            /* Angle aléatoire pour faire une rotation de l'image */
            $input = array("-16deg", "-12deg", "-8deg","-4deg", "0deg", "4deg","8deg", "12deg", "16deg");
            $rand_keys = array_rand($input, 1);

            /* affichage d'une vignette et sa légende */

            ?>

            <div class="col">

                <div class="card shadow-sm" style="<?php echo 'transform: rotate('.$input[$rand_keys].');' ?>">
                <a href="<?php echo $value; ?>" data-fancybox="gallery" data-caption="<?php echo ucwords($nomDuFichier); ?>">
                <img src="thumbs/<?php echo $value; ?>" class="card-img-top" alt="photo du sous-bock <?php echo $nomDuFichier; ?>"></a>
                <div class="card-body">
                    <p class="card-text text-center"><?php echo $nomDuFichier ; ?></p>
                </div>
                </div>

            </div>

            <?php

            }

        }

    echo "</div>"; /* row */
    
    }
    
/* Fonction qui compte de nombres d'images envoyées dans les albums pour l'afficher tout à l'heure */

function countImages()
    {
    $dir = './albums/';
    $countImage = 0;
    
    $iteratorAlbum = new DirectoryIterator($dir);
    
    foreach ($iteratorAlbum as $fileinfoAlbum)
        {
        if (($fileinfoAlbum->isDir()) && (!in_array($fileinfoAlbum,array(".",".."))))
            {
    
            $iteratorBrasserie = new DirectoryIterator($dir.$fileinfoAlbum);
    
            foreach ($iteratorBrasserie as $fileinfoBrasserie)
                {
                if ($fileinfoBrasserie->getExtension() == "jpg")
                    {
                    $countImage++;
                    }
                }
    
            }
        }

    return $countImage;
    }

/* Fonction qui affiche de la date dans le footer */

function dateFooter()
    {
    if(date('Y') != '2021')
        {
        return "2021-".date('Y');
        }
    else
        {
        return "2021";
        }
    }