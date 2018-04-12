<?php
require_once ('./library/fs.php');
require_once('./library/driver.php');
$errors = [];
$article = find($_GET['id']);

if (!empty($_POST)) {
    if (empty($_POST['title'])) {
        $errors['title'] = "Поле не может быть пустым";
    }
    if (empty($_POST['content'])) {
        $errors['content'] = "Поле не может быть пустым";
    }
    if (strlen($_POST['title']) > 255) {
        $errors['title'] = "Имя не может быть больше 255 символов";
    }
    if (empty($errors)) {
        $article = $_POST;
    }

    $article['image'] = upload($article['id']);
    if (save($article)) {
        header("Location: /index.php?action=home");
    }
}


$page = './views/edit.php';
$title = "Редактирование статьи";