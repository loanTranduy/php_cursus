<?php include("header.php");?>
<?php 
	if (isset($_GET['page'])):
	// switch teste la valeur d'une variable
		switch($_GET['page']):
			case 'about':
				include("about.php");
				break;
			case 'contact':
				include("contact.php");
				break;
			default: include("home.php");
		endswitch;
	else: 
		include("home.php");
	endif;
?>
<?php include("footer.php");?>