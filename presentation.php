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
			
			<section class="presentation">
				
				<div class="row" data-equalizer>
					<div class="columns large-12 medium-12 small-12" data-equalizer-watch>
						<div class="swiper-container">
							<div class="titre">Le Château en Photos</div>
							<div class="swiper-wrapper">
								<div class="swiper-slide" style="background-image:url('img/photo-01.jpg');"></div>
								<div class="swiper-slide" style="background-image:url('img/photo-01.jpg');"></div>
								<div class="swiper-slide" style="background-image:url('img/photo-01.jpg');"></div>
								<div class="swiper-slide" style="background-image:url('img/photo-01.jpg');"></div>
							</div>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
					
				</div>
				
			</section>
			
			
			
		</main>
		
		<?php include('inc/footer.php'); ?>
		<script>
			$(document).ready(function(){
				$('header nav li:nth-child(2)').addClass('active');
			});
		</script>
	</body>
</html>
