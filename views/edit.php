      <h2 class="mt-5">Редактировать статью</h2>
<div class="row mt-5">
    <div class="col">
        <form method="post" action="index.php?action=edit&id=<?=$article['id']?>">
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Введите название..." name="title" value="<?=$article['title']?>">
            <small id="titleHelp" class="form-text text-muted">Вы должны указать название статьи размером не более 255 символов</small>
            <?php if(empty($errors['title'])): ?>
                <span><?=$errors['title']?></span>
            <?php endif?>
        </div>
        <div class="form-group">
            <label for="content">Содержание</label>
            <textarea class="form-control" placeholder="Содержание..." name="content"><?=$article['content']?></textarea>
            <small id="titleHelp" class="form-text text-muted">
                Введите полный текст статьи
            </small>
            <?php if(empty($errors['content'])): ?>
                <span><?=$errors['content']?></span>
            <?php endif?>
        </div>
        <div class="form-group">
            <input type="file" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
        <button type="button" class="btn btn-danger">Удалить</button>
        </form>
    </div>
</div>