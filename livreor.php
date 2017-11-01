<?php require_once 'inc/inc.config.php';?>
<?php 
require 'admin/classes/Goldbook.php';
require 'admin/classes/utils.php';
session_start();
$goldbook = new Goldbook();
$result = $goldbook->goldbookValidGet();
$goldbook = null;
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
			
				
				<div class="row">
					<div class="columns large-12">
						<h2>
							Château Lacouture<br/>
							Notre livre d'or
							
						</h2>
					</div>
					
				</div>
<section class="presentation">			
   <div class="row">
	<!-- Livre d'or -->
	<div class="large-5 medium-5 small-12 columns">
		<br>
		<h2 style="text-align: center;">Signez le livre d'or</h2>
		<div id="resultat">
		
    	</div>
    	<form data-abide id="formulaire">
    		<input type="hidden" name="datepicker" id="datepicker"  value="<?php echo date("d/m/Y")?>">
			<div class="row">
				<div class="large-12 columns">
					<label>Nom
						<input name="name" id="nom" type="text" placeholder="Nom" required />
					</label>
					<small class="error">Votre nom est obligatoire</small>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<label>e-mail
						<input name="email" id="email" type="email" placeholder="e-mail" required />
					</label>
					<small class="error">Votre e-mail est obligatoire</small>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<label>Message
						<textarea name="message" id="message" placeholder="Votre message" required></textarea>
					</label>
					<small class="error">Merci de saisir votre message</small>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<input type="checkbox" id="newsletter" name="newsletter"  checked/> J'accepte de recevoir notre newsletter.
				</div>
			</div>
			<div style="text-align: center;"><input class="envoi" type="submit" value="Laissez nous votre témoignage"/></div>
		</form>
	</div>
	<div class="large-7 medium-7 small-12 columns livredor">
		
			<?php 
				if (!empty($result)) {
					$i=0;
					foreach ($result as $value) { 
					$i++;
					?>
					<div class="row">
						<div class="large-12 columns">
							<h2 style="text-align: left;"><?php echo $value['nom']?></h2>
							<p>
								<?php echo nl2br($value['message'])?>
							</p>
						</div>
					</div>
					<hr>
				<?php } ?>
			<?php } ?>	
		</div>
	</div>	
	<!-- Fin Actualités -->
	
	
<script type="text/javascript">

	$(document).on('submit','#formulaire',function(e) {
	  e.preventDefault();
	  data = $(this).serializeArray();

	  data.push({
	   		name: 'action',
	    	value: 'sendMail'
	  	})

	  console.log(data);

	    /* I put the above code for check data before send to ajax*/
	    $.ajax({
		        url: '/ajax/goldbook.php',
		        type: 'post',
		        data: data,
		        success: function (data) {
		            $("#resultat").html("<div class=\"vert\">Merci pour votre message</div>");
		        	$("#nom").val("");
		           	$("#email").val("");
		           	$("#message").val("");
		        },
		        error: function() {
		        	 $("#resultat").html("<div class=\"vert\">Une erreur s'est produite !</div>");
		        }
		   	});
	return false;
	})

</script>
				
				
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
