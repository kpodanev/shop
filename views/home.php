<h1 class="mt-5">Наши статьи</h1>
<?php if (empty($articles)) : ?>
<h2>Нет новых статей</h2>
<? else : ?>
 <?php foreach ($articles as $article): ?>
 <h3><a href="index.php?action=edit&id=<?=$article['id']?>"><?=$article['title']?></a></h3>
 <p><?=$article['content']?></p>
 <?php endforeach ?>
<?php endif ?>