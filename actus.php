<?php require_once 'inc/inc.config.php';?>
<?php 
require './admin/classes/Catproduct.php';
require 'admin/classes/News.php';
require 'admin/classes/utils.php';
session_start();
$news = new News();
if (!empty($_GET)){
	$result = $news->newsGet($_GET['id']);
} else {
	$result = $news->newsGet(null);
}	
	//print_r($result);
	if (empty($result)) {
		$titre=  		'';
		$date_news= 	'';
		$accroche= 		'Pas de news pour le moment.';
		$contenu= 		'';
	} else {
		$titre=  		$result[0]['titre'];
		$date_news= 	traitement_datetime_affiche($result[0]['date_news']);
		$accroche= 		$result[0]['accroche'];
		$contenu= 		$result[0]['contenu'];
	}
?>
<!doctype html>
<html class="no-js" lang="fr" dir="ltr">
	<head>
		<title>Château Lacouture</title>
		
		<?php include('inc/meta.php'); ?>
	</head>
	<body>
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		
		<?php include('inc/header.php'); ?>
		
		<main>
			
			<section class="actualites">
				
				<div class="row">
					<div class="columns large-12">
						<h2>
							Château Lacouture<br/>
							Actualités - Agenda
							
						</h2>
					</div>
				</div>
				
		<?php if (!empty($result)) : ?>
		    <?php $i=0; ?>
			<?php foreach ($result as $value) : ?>
				<?php $i++;  ?>
				?>
				<div class="row">
					<div class="large-3 medium-3 small-3 columns">
						<a href="photos/news<?php echo $value['image1']?>" class="fancybox"><img src="/photos/news/thumbs<?php echo $value['image1']?>" alt="" /></a>
					</div>
					<div class="large-9 medium-9 small-9 columns">
						<h2 style="text-align: left;"><?php echo $value['titre']?>( <?php echo traitement_datetime_affiche($value['date_news'])?> )</h2>
						<p>
							<?php echo nl2br($value['contenu'])?>
						</p>
						<?php if (!empty($value['accroche'])) :?>
						  <a href="<?php echo $value['accroche']?>" class="bt-plus">en savoir +</a>
						<?php endif; ?>
					</div>
					<hr style="padding-top: 12px;">
				</div>
			<?php endforeach ?>
		<?php endif ?>			
				
			</section>
			
			
			
			
		</main>
		
		<?php include('inc/footer.php'); ?>
		<script>
			$(document).ready(function(){
				$('header nav li:nth-child(4)').addClass('active');
			});
		</script>
	</body>
</html>
