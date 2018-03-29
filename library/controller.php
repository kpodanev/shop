<?php
$action = empty($_GET['action']) ? 'home' : $_GET['action'];
$page = null;
$title = null;
switch ($action) {
	case 'home':
		require_once('./actions/home.php');
		break;
	case 'about':
		require_once('./actions/about.php');
		break;
    case 'article':
        require_once('./actions/article.php');
        break;
    case 'edit':
        require_once('./actions/edit.php');
        break;
    case 'store':
        require_once('./actions/store.php');
        break;
    case 'cart':
        require_once('./actions/cart.php');
        break;
	default:
		$page = './views/404.php';
		break;
}