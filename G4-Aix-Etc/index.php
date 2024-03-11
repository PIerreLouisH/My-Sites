<?php
$nombre = filter_input(INPUT_GET, "action");

switch ($nombre) {
    default:
        require_once './views/include/header.php';
        require_once './views/accueil.php';
        require_once './views/include/footer.php';
        break;
    case 2:
        require_once './views/include/header2.php';
        require_once './views/lieuxAVisiter.php';
        require_once './views/include/footer.php';
        break;
    case 3:
        require_once './views/include/header2.php';
        require_once './views/bars.php';
        require_once './views/include/footer.php';
        break;
    case 4:
        require_once './views/include/header2.php';
        require_once './views/restaurants.php';
        require_once './views/include/footer.php';
        break;
    case 5:
        require_once './views/include/header2.php';
        require_once './controller/laBDD.php';
        require_once './controller/parametres.php';
        require_once './views/evenements.php';
        require_once './views/include/footer.php';
        break;
    case 6:
        require_once './views/include/header2.php';
        require_once './views/contact.php';
        require_once './views/include/footer.php';
        break;
    case 7:
        require_once './views/include/header2.php';
        require_once './views/mention-legales.php';
        require_once './views/include/footer.php';
        break;

}
?>