<?php
require_once('./library/driver.php');
$errors = [];
$article = find($_GET['id']);

if (!empty($article)) {
    $articleTitle = $article['title'];
    $articleContent = $article['content'];
    $articleID = $article['id'];
}

if(!empty($article)){
	if(empty($_POST['title'])){
		$errors['title'] = "Поле не может быть пустым";
	}
	if(empty($_POST['content'])){
		$errors['content'] = "Поле не может быть пустым";
	}
	if(strlen($_POST['title']) > 255){
		$errors['title'] = "Имя не может быть больше 255 символов";
	}
	if(empty($errors)){
		$article = $_POST;
		$article['id'] = uniqid();
		if(save($article)){
			header("Location: http://web.loc/");
		}
	}
}


$page = './views/edit.php';
$title = "Добавление статьи";