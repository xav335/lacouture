		<footer>
			<form id="form_news" action="#" method="post">
				<input type="hidden" name="as" value="" />
				<input type="email" name="email_news" id="email_news" value="" placeholder="Inscrivez-vous à notre newsletter - Saisissez votre e-mail" required /><button>OK</button>
			</form>
			<div class="logo">Château Lacouture</div>
			<p>
				3 route du fronton, 33710 Gauriac, France<br/>
				+33 5 57 64 82 31
			</p>
			<p class="social"><a href="<?php echo FACEBOOK_LINK?>" target="_blank" title="Facebook">0</a></p>
			<p><a href="mentions.php">mentions légales</a> | conception &amp; réalisation © 2016 - <a href="http://www.iconeo.fr" target="_blank">iconeo.fr</a></p>
		</footer>
		
		<script src="../js/vendor/what-input.js"></script>
		<script src="../js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
		<script src="../js/vendor/swiper/js/swiper.min.js"></script>
		<script src="../js/app.js"></script>
		<script>
    		$(document).ready(function() {
    			$('.fancybox').fancybox({
    				  padding: 0,
    				  helpers: {
    				    overlay: {
    				      locked: false
    				    }
    				  }
    			});


    			// ---- Validation du formulaire de newsletter -------------- //
    			if ( 1 == 1 ) {
    				
    				$( "#form_news" ).submit(function() {
    					//alert( "validation..." );
    					var erreur = 0;
    					
    					$.ajax({
    						type: "POST",
    						cache: false,
    						url: '/ajax/ajax_newsletter.php?task=inscrire',
    						data: $( "#form_news" ).serialize(),
    						error: function() { alert( "Une erreur s'est produite..." ); },
    						success: function( data ){
    							var obj = $.parseJSON( data );
    							
    							// Tout s'est bien passé!
    							if ( !obj.error ) {
    								$( "#form_news #email_news" ).val( '' );
    								alert( "Votre e-mail a été correctement ajouté à notre base de données." );
    							}
    							else {
    								
    							}
    							
    						}
    					});
    					
    					return false;
    				});
    			}
    			// ---------------------------------------------------------- //

    			
    		});
		 </script>