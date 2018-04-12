<div class="row mb-2">
    <?php if(!empty($articles)): ?>
        <?php foreach($articles as $article): ?>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <!--<strong class="d-inline-block mb-2 text-primary">World</strong>-->
                        <h3 class="mb-0">
                            <a class="text-dark" href="/index.php?action=edit&id=<?=$article['id']?>"><?=$article['title']?></a>
                        </h3>
                        <!--<div class="mb-1 text-muted">Nov 12</div>-->
                        <p class="card-text mb-auto"><?=htmlspecialchars($article['content'])?></p>
                        <!--<a href="#">Continue reading</a>-->
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]"
                         style="width: 200px; height: 250px;"
                         src="/upload/<?=$article['image']?>" data-holder-rendered="true">
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
