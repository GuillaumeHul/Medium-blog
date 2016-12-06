<?php include_once("app/view/layout/header.inc.php"); ?>

<div class="detail article">
    <h1> <?php echo $article["post_title"]; ?> </h1>

    <div class="tete detail">
        <h3> By <span class="auteur"><?php echo $article["display_name"]; ?></span> </h3>
        <h2> In : <span class="green"><?php echo $article["cat_descr"]; ?></span> </h2>
    </div>

    <p class="contenu"> <?php echo $article["post_content"]; ?> </p>
</div>

<?php include("app/view/commentaire/coms.php"); ?>

<?php include_once("app/view/layout/footer.inc.php"); ?>

<?php //var_dump($articles); ?>
