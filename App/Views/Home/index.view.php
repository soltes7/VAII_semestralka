<?php /** @var Array $data */ ?>
<div class="container">
    <div class="row">
        <a href="?c=home&a=add" class ="btn btn-primary" id="pridajClanok">Vytvoriť nový článok</a>
    </div>
        <?php
        /** @var \App\Models\Article $article */
        $number = 0;
        foreach ($data['articles'] as $article) {
            if  ($number%2 == 0) {
                ?>
                <div class="row">
                <?php
                }
                ?>
            <div class="column">
                <div class="card clanok" style="width: 24rem;">
                    <img src="<?= $article->getUrl() ?>" class="card-img-top" alt="...">
                    <div class="card-body" >
                        <h5 class="card-title"><?= $article->getTitle() ?></h5>
                        <a href="?c=home&a=expand&id=<?= $article->getId() ?>" class="btn btn-warning">Zobraziť</a>
                        <a href="?c=home&a=edit&id=<?= $article->getId() ?>" class="btn btn-primary btn-sm" >Upraviť</a>
                        <a href="?c=home&a=delete&id=<?= $article->getId() ?>" class="btn btn-danger btn-sm" >Zmazať</a>
                    </div>
                </div>
            </div>

            <?php
                if ($number%2 == 1) {
            ?>
                </div>
            <?php
                }
            $number++;
            }
            ?>
</div>
