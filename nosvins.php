<?php require_once 'inc/inc.config.php';?>
<?php 
require 'admin/classes/Planning.php';
require 'admin/classes/utils.php';
session_start();
$planning = new Planning();
$result = $planning->planningGet();
$planning = null;

$titre= null;
$url= null;
$pdf= null;
if (!empty($result)) {
	$titre= $result[0]['titre'];
	$url= $result[0]['url'];
	$pdf= $result[0]['pdf'];
}
//print_r($result);
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
						<h1>
							Château Lacouture<br/>
							Nos Vins
							
						</h1>
						<a href="img/chateau-lacouture-6.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/chateau-lacouture-6.jpg"  alt="" /></a> 
					</div>
				</div>	
				
				<div class="row" style="text-align: center;">
				    <br>
					<a class="rouge" href="photos/bdc<?php echo $pdf?>" target="_BLANK">Télécharger notre plaquette</a>
				</div>
					
				<div class="row" style="margin-top: 100px;">
						
					<div class="columns large-12">
					   <h2>
					       Château Lacouture<br/>
							Côtes de Bourg Rouge
						</h2>
					   <div class="columns large-6 medium-6 small-12" data-equalizer-watch>
					   <h2>
							Cuvée Carpe Diem
						</h2>
						<a href="img/chateau-lacouture-carpediem-1.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/chateau-lacouture-carpediem-1.jpg"  alt="" /></a>  
					   </div>
					   <div class="columns large-6 medium-6 small-12" data-equalizer-watch>
					   <h2>
							Cuvée Adrien
						</h2>
    						<a href="img/chateau-lacouture-adrien-1.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/chateau-lacouture-adrien-1.jpg"  alt="" /></a>  
    					</div>
					</div>
				</div>	
				
				<div class="row" style="margin-top: 100px;">
					<div class="columns large-8 medium-8 small-12" data-equalizer-watch>
						<h2>
						  Château Lacouture<br/>
							Côtes de Bourg Blanc
						</h2>
						<br><br><br>
						<h2>
							Cuvée Noémie
						</h2>
					</div>
					<div class="columns large-4 medium-4 small-12" data-equalizer-watch>
						<a href="img/chateau-lacouture-blanc-1.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/chateau-lacouture-blanc-1.jpg"  alt="" /></a> 
						
					</div>
				</div>	
				
				<div class="row" style="margin-top: 100px;">
				    <div class="columns large-4 medium-4 small-12" data-equalizer-watch>
						<a href="img/chateau-lacouture-rose.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/chateau-lacouture-rose.jpg"  alt="" /></a> 
						 
					</div>
					<div class="columns large-8 medium-8 small-12" data-equalizer-watch>
						<h2>
							 Château Lacouture<br/>
							Bordeaux Rosé
						</h2>
						<br><br><br>
						<h2>
							Cuvée Cupidon
						</h2>
					</div>
					
				</div>	
				
				<div class="row" style="margin-top: 100px;">
						
					<div class="columns large-12">
					   <h2>
					       Château Lacouture<br/>
							Méthodes Traditionnelles
						</h2>
					   <div class="columns large-4 medium-4 small-12" data-equalizer-watch>
					   <h2>
							Suki Rosé
						</h2>
						<a href="img/chateau-lacouture-tradrose.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/chateau-lacouture-tradrose.jpg"  alt="" /></a>  
					   </div>
					   <div class="columns large-4 medium-4 small-12" data-equalizer-watch>
					   <h2>
							Suki Rouge
						</h2>
    						<a href="img/chateau-lacouture-tradrouge.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/chateau-lacouture-tradrouge.jpg"  alt="" /></a>  
    					</div>
    					<div class="columns large-4 medium-4 small-12" data-equalizer-watch>
					   <h2>
							Blanc de Noir
						</h2>
    						<a href="img/chateau-lacouture-trad.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/chateau-lacouture-trad.jpg"  alt="" /></a>  
    					</div>
					</div>
				</div>	
				
				<div class="row" style="margin-top: 100px;">
				    <div class="columns large-12">
					   <h2>
					       Château Lacouture<br/>
							Jus de raisin
						</h2>
				    <div class="columns large-6 medium-6 small-12" data-equalizer-watch>
					   <h2>
							Pur jus de raisin 
						</h2>
						<a href="img/chateau-lacouture-jus.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/chateau-lacouture-jus.jpg"  alt="" /></a>  
			         </div>
			         <div class="columns large-6 medium-6 small-12" data-equalizer-watch>
					   <h2>
							Jus de raisin pétillant
						</h2>
    						<a href="img/chateau-lacouture-juspet.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/chateau-lacouture-juspet.jpg"  alt="" /></a>  
    		          </div>
    		          </div>
                </div>
				
			</section>
			
			
			
			
		</main>
		
		<?php include('inc/footer.php'); ?>
		<script>
			$(document).ready(function(){
				$('header nav li:nth-child(3)').addClass('active');
			});
		</script>
	</body>
</html>
