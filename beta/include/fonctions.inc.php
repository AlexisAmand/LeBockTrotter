<?php

/* Cette fonction est un moteur de recherche sans BD */

function explorerChercher($chemin, $mots)
    {

    $PPage = "";
    global $resultat;

        
    // Si $chemin est un dossier => on appelle la fonction explorer() pour chaque élément (fichier ou dossier) du dossier$chemin
    if( is_dir($chemin) )
        {
        $me = opendir($chemin);
        while( $child = readdir($me) )
            {
            if( $child != '.' && $child != '..' )
                {
                explorerChercher( $chemin.DIRECTORY_SEPARATOR.$child, $mots );
                }
            }
        }     
    else
        {
      
        $info = new SplFileInfo($chemin);
        $tab = array("fonctions.inc.php","footer.inc.php", "header.inc.php","matomo.inc.php","top.inc.php");

        if (($info->getExtension() == 'php') and (!in_array($info->getBasename(),$tab))) 
            {
                
            /* Récup le contenu de la meta description */

            $tags = get_meta_tags($chemin);

            /* Récup le contenu de <title> */

            $fichier = nl2br(file_get_contents($chemin)); 
            $posStart = strpos( $fichier, "<title>" ) + strlen("<title>"); 
            $posEnd = strpos( $fichier ,"</title>");  
            $titrePage = substr( $fichier, $posStart, $posEnd - $posStart ); 

            /* Récup le contenu des <p> et on les met dans une seule chaine */

            $fichier = nl2br(file_get_contents($chemin)); 
            $posStart = strpos( $fichier, "<p" ) + strlen("<p"); 
            $posEnd = strpos( $fichier ,"</p>");  
            $PPage = $PPage . substr( $fichier, $posStart, $posEnd - $posStart ); 

            /* On regarde si c'est ce qu'on cherche dans les 3 */

            if((preg_match('#'.$mots.'#', strtolower($tags['description']))) or (preg_match('#'.$mots.'#', strtolower($titrePage))) or (preg_match('#'.$mots.'#', strtolower($PPage))))
                {
                /* On affiche un lien vers la page et sa meta description */    

                $titrePageExploded=explode("·", $titrePage);
                
                array_shift($titrePageExploded);
                $titrePage=implode("·", $titrePageExploded);

                echo "<p class='lead text-muted'><a href='".htmlspecialchars($chemin)."' style='color: #64462e'>".$titrePage."</a><br />";
                echo "<span class='fs-6'>".$tags['description']."</span></p>";
                $resultat++;
                }
            }    
        } 
    }  

/* Cette fonction parcourt le dossier parent pour afficher les images qu'il contient sous la forme d'une galerie */

function afficheCollection() 
    {
    $dir    = './';
    // $cdir = scandir($dir);
    //$i = 0;

    $iteratorAlbum = new DirectoryIterator($dir);
    foreach ($iteratorAlbum as $value) 
        {
                            
        /* On récup les infos sur le fichier */
        $info = new SplFileInfo($value);

        /* On regarde si le fichier n'est pas ., .. ou un fichier php */
        if ((!in_array($value,array(".","..", "thumbs")) and ($info->getExtension() == 'jpg')))
            {
            //$i++; 

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
                <a href="<?php echo $value; ?>"
                    data-fancybox="gallery"
                    data-caption="<?php echo ucwords($nomDuFichier); ?>">
                <img src="thumbs/<?php echo $value; ?>" class="card-img-top" alt=" "></a>
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