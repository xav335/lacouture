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
					<div class="columns large-6 medium-6 small-12" data-equalizer-watch>
						<div class="swiper-container">
							<div class="titre">Le Château en Photos</div>
							<div class="swiper-wrapper">
								<div class="swiper-slide" style="background-image:url('img/chateau-lacouture-1.jpg');"></div>
								<div class="swiper-slide" style="background-image:url('img/chateau-lacouture-2.jpg');"></div>
								<div class="swiper-slide" style="background-image:url('img/chateau-lacouture-3.jpg');"></div>
								<div class="swiper-slide" style="background-image:url('img/chateau-lacouture-4.jpg');"></div>
								<div class="swiper-slide" style="background-image:url('img/chateau-lacouture-5.jpg');"></div>
							</div>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
					<div class="columns large-6 medium-6 small-12" data-equalizer-watch>
						<div>
							<h1>
								Présentation du<br/>
								Château Lacouture
							</h1>
							<p>Dans un respect environnemental, les vignes du Château Lacouture sont travaillées de manière raisonnée, sans apport de désherbant chimique.<br><br>
                                Certification AREA Environnementale de Niveau 2<br><br>
                                    La maîtrise des rendements apporte à nos vins une richesse qui se communique de père en fils depuis quatre générations de vignerons passionnés.</p>

<br><br>

                                    <p><strong>Visite des chais et du vignoble chaque jour de 10h à 18h, sur rendez-vous de préférence.</strong></p>
							</div>
					</div>
				</div>
				
			</section>
			
			<section class="actualites">
				
				<div class="row">
					<div class="columns large-12">
						<h2>
							En ce moment au<br/>
							Château Lacouture
						</h2>
					</div>
					<div class="columns large-6 medium-6 small-12">
						<span class="bulle-top"></span>
						<span class="bulle-bottom"></span>
						<img src="img/bd.jpg" alt="" />
					</div>
					<div class="columns large-6 medium-6 small-12">
						<div class="fb-page" data-href="https://www.facebook.com/ChateauLacouture" data-tabs="timeline" data-width="500" data-height="417" data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/ChateauLacouture"><a href="https://www.facebook.com/ChateauLacouture">Château Lacouture</a></blockquote></div></div>
					</div>
				</div>
				
			</section>
			
		</main>
		
		<?php include('inc/footer.php'); ?>
		<script>
			$(document).ready(function(){
				$('header nav li:nth-child(1)').addClass('active');
			});

			var swiper = new Swiper('.swiper-container', {
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				autoplay: 4000,
				slidesPerView: 1,
				paginationClickable: true,
				spaceBetween: 0,
				loop: true
			});
		</script>
	</body>
</html>
