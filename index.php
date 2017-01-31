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
								<div class="swiper-slide" style="background-image:url('img/photo-01.jpg');"></div>
								<div class="swiper-slide" style="background-image:url('img/photo-01.jpg');"></div>
								<div class="swiper-slide" style="background-image:url('img/photo-01.jpg');"></div>
								<div class="swiper-slide" style="background-image:url('img/photo-01.jpg');"></div>
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
							<p>Nulla non luctus lacus, ac feugiat nulla. Pellentesque laoreet nibh vel gravida auctor. Aliquam in scelerisque nulla, eget condimentum dui. Quisque erat dui, lobortis nec consequat eget, porta id nunc. Vestibulum dictum justo a varius maximus. Nunc venenatis maximus turpis. Nulla facilisi. Praesent cursus arcu elit, sed imperdiet massa dictum id. Nam et pretium risus. Suspendisse augue eros, ultricies vitae rhoncus finibus, hendrerit ut felis. Duis interdum non enim eu semper. Donec venenatis non turpis in consequat.</p>
							<p>Maecenas volutpat risus eu tempus lacinia. Curabitur tincidunt leo ligula, ac interdum felis fringilla ut. Aenean vel varius velit. Pellentesque leo augue, dignissim vel auctor a, finibus sit amet leo. Integer euismod sem et porttitor convallis. Pellentesque varius tempor neque, sit amet consectetur magna vehicula et. Mauris ut nisl quis lectus sollicitudin dignissim viverra et augue.</p>
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
		</script>
	</body>
</html>
