<?php include("app/view/layout/header.inc.php"); ?>

            <div>
                <h1><span class="green">William</span>'s last articles</h1>
                <?php foreach($articles as $article) { ?>
                    <div class="article">
                        <div class="tete">
                            <div class="user_photo"><img src="<?php echo $article['user_photo']; ?>" alt="<?php echo str_replace( '/', '', strrchr($article['user_photo'], '/')); ?>" /></div>
                            <div>
                                <p>
                                    <span class="green"><?php echo $article["display_name"]; ?></span> in <span class="green"><?php echo $article["cat_descr"]; ?></span>
                                </p>

                                <p class="date">
                                    <?php echo $article["post_date"]; ?>
                                </p>
                            </div>
                        </div>
                        <div>
                            <a href="?module=article&action=detail&id=<?php echo $article['post_ID'];?>">
                                <h3 class="title"><?php echo $article["post_title"];?></h3>
                            </a>

                            <a href="?module=article&action=detail&id=<?php echo $article['post_ID'];?>">
                                <p class="contenu">
                                    <?php echo strstr($article["contenu"], '.', true); ?>.
                                </p>
                            </a>

                            <a href="?module=article&action=detail&id=<?php echo $article['post_ID'];?>">
                                <p class="more">
                                    Read more...
                                </p>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
<?php
    paginate($nb_articles, PAGINATION_ARTICLES, $module, $action);
?>
<?php include("app/view/layout/footer.inc.php"); ?>

<?php //var_dump($articles); ?>
