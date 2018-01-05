<? 
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
	require 'admin/classes/Contact.php';
	require 'admin/classes/utils.php';
	session_start();
	
	$debug = false;
	
	$contact = new Contact();
	
	$mon_action = $_POST[ "mon_action" ];
	$anti_spam = $_POST[ "as" ];
	//print_pre( $_POST );
	
	$affichage_success = "wait";
	$affichage_erreur = "wait";
	
	// ---- Post du formulaire ------------------------------- //
	if ( $mon_action == "poster" && $anti_spam == '' ) {
		if ( $debug ) echo "On poste...<br>";
		
		// ---- Enregistrement dans "contact" -------- //
		if ( 1 == 1 ) {
			$num_contact = $contact->isContact( $_POST[ "email" ], $debug );
			
			unset( $val );
			$val[ "id"] = $num_contact;
			$val[ "firstname"] = $_POST[ "prenom" ];
			$val[ "name"] = $_POST[ "nom" ];
			$val[ "adresse"] = $_POST[ "adresse" ];
			$val[ "cp"] = $_POST[ "cp" ];
			$val[ "ville"] = $_POST[ "ville" ];
			$val[ "email"] = $_POST[ "email" ];
			$val[ "tel"] = $_POST[ "tel" ];
			$val[ "message"] = $_POST[ "message" ];
			$val[ "newsletter"] = $_POST[ "newsletter" ];
			$val[ "fromcontact"] = "on";
			if ( $num_contact <= 0 ) $contact->contactAdd( $val, $debug );
			else $contact->contactModify( $val, $debug );
		}
		// ------------------------------------------- //
		
		// ---- Envoi du mail à l'admin -------------- //
		if ( 1 == 1 ) {
			$entete = "From:" . MAILNAMECUSTOMER . " <" . MAILCUSTOMER . ">\n";
			$entete .= "MIME-version: 1.0\n";
			$entete .= "Content-type: text/html; charset= iso-8859-1\n";
			$entete .= "Bcc:" . MAIL_BCC . "\n";
			//echo "Entete :<br>" . $entete . "<br><br>";
			
			$sujet = utf8_decode( "Prise de contact" );
			
			//$_to = "franck_langleron@hotmail.com";
			$_to = ( MAIL_TEST != '' )
		    	? MAIL_TEST
		    	: MAIL_CONTACT;
			//echo "Envoi du message à : " . $_to . "<br><br>";
			
			$message = "Bonjour,<br><br>";
			$message .= "La personne suivante a rempli le formulaire de contact de votre site :<br>";
			$message .= "Nom : <b>" . $_POST[ "nom" ] . " " . $_POST[ "prenom" ] . "</b><br>";
			$message .= "E-mail / Téléphone : <b>" . $_POST[ "email" ] . " / " . $_POST[ "tel" ] . "</b><br>";
			$message .= "Adresse postale : <b>" . $_POST[ "adresse" ] . ", " . $_POST[ "cp" ] . " " . $_POST[ "ville" ] . "</b><br>";
			$message .= "Message : <br><i>" . nl2br( $_POST[ "message" ] ) . "</i><br><br>";
			$message .= "Cordialement.";
			$message = utf8_decode( $message );
			if ( $debug ) echo $message;
			
			if ( !$debug ) $retour = mail( $_to, $sujet, stripslashes( $message ), $entete );
			//exit();
			
			$affichage_success = ( $retour ) ? "" : "wait";
			$affichage_erreur = ( $retour ) ? "wait" : "";
		}
		// ------------------------------------------- //
		//exit();
		
	}
	// ------------------------------------------------------- //
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
						<h1>
							Château Lacouture<br/>
							Contactez nous
							
						</h1>
        			</div>
				</div>
		<section class="presentation">				
				<div class="row">	
        			<div class="large-4 medium-6 small-12 columns">
        				
        				<p>Romain SOU</p>
        				<p>3 route du Fronton <br/>33710 GAURIAC</p>
        				<p>Tél. +33 6 62 10 82 31 </p>
        				<p>contact@chateaulacouture.com</a></p>
        				
        				<p>Visite des chais et du vignoble chaque jour de 10h à 18h.</p>
        				
						<a href="img/sou-senior.jpg" class="fancybox" data-fancybox-group="qsn"><img src="img/sou-senior.jpg"  alt="" /></a>    
        			</div>
        			
        			
        			
        			<div class="large-8 medium-6 small-12 columns">
        				        <div class="large-12 columns">
                        			<div class="large-8 medium-8 small-8 columns" >
                        				
                        			</div>
                        		<div id="resultat"></div>
                        		<form data-abide id="formulaire">
                        			<div class="row">
                        				<div class="large-6 columns">
                        					<label>Nom
                        						<input type="text" id="nom" name="name" placeholder="Nom" required  />
                        					</label>
                        					<small class="error">Votre nom est obligatoire</small>
                        				</div>
                        				<div class="large-6 columns">
                        					<label>Prénom
                        						<input id="prenom" type="text" name="firstname" placeholder="Prénom" />
                        					</label>
                        				</div>
                        			</div>
                        			<div class="row">
                        				<div class="large-6 columns">
                        					<label>Téléphone
                        						<input type="text" id="tel" name="tel" placeholder="Téléphone" />
                        					</label>
                        					<small class="error">Votre téléphone est obligatoire</small>
                        				</div>
                        				<div class="large-6 columns">
                        					<label>e-mail
                        						<input type="text" id="email" name="email" placeholder="e-mail" required />
                        					</label>
                        					<small class="error">Votre e-mail est obligatoire</small>
                        				</div>
                        			</div>
                        			
                        			<div class="row">
                        				<div class="large-12 columns">
                        					<label>Message
                        						<textarea id="message" name="message" placeholder="Votre message" required></textarea>
                        					</label>
                        					<small class="error">Merci de saisir votre message</small>
                        				</div>
                        			</div>
                        			<div class="row">
                        				<div class="large-12 columns">
                        					<input type="checkbox" id="newsletter" name="newsletter"  checked/> J'accepte de recevoir la newsletter.
                        				</div>
                        			</div>
                        			<div class="row">
                        					<div class="large-12 columns" style="text-align: center;">
                        						<button type="submit">Envoyer votre message</button>
                        					</div>
                        				</div>
                        			
                        		</form>
                        	</div>
        				     <div class="large-12 columns">
        				        <a href="https://www.google.fr/maps/place/Ch%C3%A2teau+Lacouture/@44.9855345,-0.8705377,10z/data=!4m5!3m4!1s0x4801d4ab5cf0664d:0xac8897f8c574d583!8m2!3d45.0692487!4d-0.6051492" target="_BLANK"><img src="img/plan2.jpg"  alt="" /></a>  
        				     </div>
        				
        				
					</div>
				</div>
				
			</section>
			
			
	<!-- /Content -->
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
    		        url: '/ajax/contact.php',
    		        type: 'post',
    		        data: data,
    		        success: function (data) {
    		            $("#resultat").html("<div class=\"vert\">Merci pour votre message - Nous allons y donner suite rapidement</div>");
    		        	$("#nom").val("");
    		        	$("#prenom").val("");
    		        	$("#email").val("");
    		        	$("#tel").val("");
    		           	$("#message").val("");
    		        },
    		        error: function() {
    		        	 $("#resultat").html("<div class=\"vert\">Une erreur s'est produite !</div>");
    		        }
    		   	});
    	return false;
    	})
    
    </script>
			
			
			
			
			
		</main>
		
		<?php include('inc/footer.php'); ?>
		
		
		
		<script>
			$(document).ready(function(){
				$('header nav li:nth-child(6)').addClass('active');
			});
		</script>
	</body>
</html>
