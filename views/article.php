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
                <input type="file" name="image" class="form-control">
                <small id="contentHelp" class="form-text text-muted">
                    Размер изображения не должен привышать 2MB. Принимаются файлы jpg, png
                </small>
                <?php if(isset($errors['image'])): ?>
                    <div class="form-control-feedback"><?=$errors['content'];?></div>
                <?php endif?>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
            <button type="button" class="btn btn-danger">Удалить</button>
        </form>
    </div>
    <div class="col">
        <div class="form-group">
            <img src="/upload/<?=$article['image']?>">
        </div>
    </div>
</div>
