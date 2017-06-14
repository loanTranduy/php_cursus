<?php
// Constante en majuscule
define("DEBUG", true);

// Ne pas afficher les notices
error_reporting (E_ALL & ~E_NOTICE);

if (DEBUG == true):
    error_reporting (E_ALL);
endif;

function debug(){
    if (DEBUG == true):
        echo "<pre>";
            echo'<strong>$_GET :</strong><br>';
            print_r($_GET);
            echo'<strong>$_POST :</strong><br>';
            print_r($_POST);
        echo"</pre>";
    endif;
}

//gestion nav active class="current"

function myActive($page){
    if(isset($_GET['page'])):
        echo ($_GET['page'] == $page)? 'class="current"' : '';
    endif;
}
?>