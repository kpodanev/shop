<?php
require_once ('./library/fs.php');
require_once('./library/driver.php');
$article = $_POST;
$errors = [];


if(!empty($_POST)){
    if (empty($article['title'])) {
        $errors['title'] = "Поле не может быть пустым";
    }
    if (empty($article['content'])) {
        $errors['content'] = "Поле не может быть пустым";
    }
    if (strlen($article['title']) > 255) {
        $errors['title'] = "Имя не может быть больше 255 символов";
    }
    if (empty($errors)) {
        $article = $_POST;
        $article['id'] = uniqid();
        $article['image'] = upload($article['id']);
        $article['created_at'] = time();
        if (save($article)) {
            header("Location: /");
        }
    }
}

$title = "Добавление статьи";
render('form', ['article' => $article]);