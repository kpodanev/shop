<?php
require_once('./library/driver.php');
require_once('./library/fs.php');

$errors = [];
$article = find($_GET['id']);
if ($_FILES['img']['size'] != 0) {
    if ($_FILES['img']['size'] > 61440) {
        $errors['img'] = 'Допустимый размер файла 60Кб';
    }
    if ($_FILES['img']['type'] != 'image/jpeg' && $_FILES['img']['type'] != 'image/png') {
        $errors['img'] = "Недопустимый формат файлов(необходимо jpeg, png)";
    }
}

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
			header("Location: /index.php?action=home");
		}
	}
}


$page = './views/edit.php';
$title = "Редактирование статьи";