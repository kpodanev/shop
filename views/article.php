      <h2 class="mt-5">Добавить новую статью</h2>
<div class="row mt-5">
    <div class="col">
        <form method="post" action="index.php?action=article" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Введите название..." name="title" value="<?=$_POST['title']?>">
            <small id="titleHelp" class="form-text text-muted">Вы должны указать название статьи размером не более 255 символов</small>
            <?php if(!empty($errors['title'])): ?>
                <span><?=$errors['title']?></span>
            <?php endif?>
        </div>
        <div class="form-group">
            <label for="content">Содержание</label>
            <textarea class="form-control" placeholder="Содержание..." name="content"><?=$_POST['content']?></textarea>
            <small id="titleHelp" class="form-text text-muted">
                Введите полный текст статьи
            </small>
            <?php if(!empty($errors['content'])): ?>
                <span><?=$errors['content']?></span>
            <?php endif?>
        </div>
        <div class="form-group">
            <label for="file">Choose file to upload</label>
            <input type="file" id="file" name="file" multiple>
        <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
</div>