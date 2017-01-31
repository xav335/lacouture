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
							Notre livre d'or
							
						</h2>
					</div>
					
				</div>
				
			</section>
			
			
			
			
		</main>
		
		<?php include('inc/footer.php'); ?>
		<script>
			$(document).ready(function(){
				$('header nav li:nth-child(5)').addClass('active');
			});
		</script>
	</body>
</html>
