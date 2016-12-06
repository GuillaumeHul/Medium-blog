<?php include_once("app/view/layout/header.inc.php"); ?>

<form action="?module=article&action=new" method="post">
    <label for="post_title">Titre</label>
    <input id="post_title" type="text" name="post_title">

    <?php
        scroll_list('post_category', 'dropdown', 'listcat', $categories, 'cat_id', 'cat_descr');
    ?>

    <label for="post_content">Article</label>
    <textarea id='post_content' name="post_content" rows="10" cols="100"></textarea>

    <input type="submit" name="name" value="Publier l'article">
</form>

<?php include_once("app/view/layout/footer.inc.php"); ?>
