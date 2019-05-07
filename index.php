<?php 
// Fichier exemple pour l'intégration d'iGalerie à un site,
// qu'il faudra renommer en 'index.php'.
// La ligne suivante correspond à l'inclusion du fichier 'index.php'
// d'iGalerie, renommé ici en 'index.inc'.

require_once(dirname(__FILE__) . '/index.inc');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">

<head>

<title><?php echo $tpl->getGallery('page_title'); ?></title>

<!-- <iGalerie:header> -->
<?php require_once(dirname(__FILE__) . '/template/'
	. $tpl->getGallery('template_name') . '/head.tpl.php'); ?>

<!-- </iGalerie:header> -->

<link href="https://fonts.googleapis.com/css?family=Unkempt" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Coming+Soon" rel="stylesheet"> 

<!-- Bootstrap CSS -->

<link rel="stylesheet" href="template/perso/style/white/bootstrap/css/bootstrap.css">

</head>

<body>

<div class="container">

<div id="gallery">

	<header class="row">
		<div class="col col-md-12 text-center">
		<h1><a accesskey="1" href="<?php echo $tpl->getGallery('gallery_path'); ?>/"><?php echo "Le Bock Trotter";// $tpl->getGallery('gallery_title_banner'); ?></a></h1>
		</div>
		<div class="col col-md-12">	
		<p>Ce site vous présente ma collection de sous-bocks que certains nomment aussi ronds à bière ou encore sous-verres. L'origine des sous-bocks cartonnés que nous connaissons aujourd'hui remonte à la fin du XIXe siècle. Ils furent probablement inventés en Allemagne, terre brassicole par excellence quand en 1880, l'entreprise d'imprimerie et de cartonnage Friederich Horn de Buckau, près de Magdebourg, a découpé des dessous de verre en carton sur lesquels elle imprima divers motifs.</p>
		</div>
	</header>
	
	<div class="row" style="background-color:#fce5cd;">
		<div class="col col-md-9">	
		<!-- <iGalerie:content> -->
		<?php require_once(dirname(__FILE__) . '/template/'
			. $tpl->getGallery('template_name') . '/index.tpl.php'); ?>

		<!-- </iGalerie:content> -->
		</div>

		<div class="col col-md-3 mt-2">
			<div class="card">
			<div class="card-header">
				Les pays
			</div>
			<ul class="list-group">
		

				<li class="list-group-item">Allemagne (2)</li>
				<li class="list-group-item">Angleterre (1)</li>
				<li class="list-group-item">Autriche (1)</li>
				<li class="list-group-item">Belgique (66)</li>
				<li class="list-group-item">Danemark (1)</li>
				<li class="list-group-item">États-Unis (1)</li>
				<li class="list-group-item">France (40)</li>
				<li class="list-group-item">Irlande (4)</li>
				<li class="list-group-item">Kenya (1)</li>
				<li class="list-group-item">Pays-Bas (5)</li>
				<li class="list-group-item">Royaume-Uni (3)</li>
				<li class="list-group-item">Suisse (1)</li>

			</ul>
			</div>
		</div>
	</div>

</div>

</div>

<!-- Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
