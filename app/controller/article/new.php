<?php
    protection("user", "user", "login", USER_LAMBDA);

    if (!isset($_POST['post_title']))
    {
        // Appel du modèle pour obtenir les catégories
        $categories = select_table('blog_categories',
                                    array('orderby' => 'cat_descr', 'order' => 'DESC'));

        // Appel de la vue correspondante
        define("PAGE_TITLE", "Ajouter un article");
        include_once('app/view/article/new.php');
    }
    else
    {
        include_once('app/model/article/insert_article.php');
        $retour = insert_article($_POST, $_SESSION["user"]["ID"]);
        //var_dump($retour);

        if ($retour)
        {
            //header('Location: ?module=article&action=detail&id=' . $retour . '&notif=ok');
            location("article", "new", "id=" . $retour . "&notif=ok");
        }
        else
        {
            //header('Location: ?module=article&action=new&notif=nok');
            location("article", "new", "notif=nok");
        }
    }
