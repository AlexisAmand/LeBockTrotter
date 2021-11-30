<?php

/* Cette fonction parcours le dossier parent pour afficher les images qu'il contient sous la forme d'une galerie */

function afficheCollection() 
    {
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
    }

?>