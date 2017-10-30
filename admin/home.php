<?php 
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
	require $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Authentication.php";
	require $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Goldbook.php";
	session_start();
	
	$authentication = new Authentication();
	if (!isset($_SESSION['accessGranted']) || !$_SESSION['accessGranted']) {
		$result = $authentication->grantAccess($_POST['login'], $_POST['mdp']);
		if (!$result){
			header('Location: /admin/?action=error');
		} else {
			$_SESSION['accessGranted'] = true;
		}
	}
	$goldbook = new Goldbook();
	$result = $goldbook->goldbookUnvalidateGet();
	if (empty($result)) {
		$message = 'Tous les messages sont validés';
	} else {
		$message = 'Vous avez '. $result[0]['nb'] .' message(s) à valider';
	}
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<?php include_once 'inc-meta.php';?>
	</head>
	
	<body>	
		<?php require_once 'inc-menu.php';?>
	  	
		<div class="row">
			<div class="col-md-8">
				<h3>Statistiques</h3>
				<iframe id="laframe" src="http://www.iconeo.fr/awstats/awstats.pl?config=www.escalinox.fr&framename=mainright" style="width:720px;height:500px;" frameborder="1" ></iframe>
			</div>
			<div class="col-md-4">
			</div>
		</div>	
			
	</body>
</html>

