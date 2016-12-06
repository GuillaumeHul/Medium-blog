<?php

    if (!isset($_GET['id']))
        echo"l'article n'existe pas";
    else
        $detail=$_GET['id'];

    //var_dump($detail);
    // Appel du modèle pour obtenir les détails de l'article
    include_once('app/model/article/lire_article.php');
    $article = lire_article($detail);
    //var_dump($article);

    // Appel du modèle pour obtenir la liste des commentaires
    include_once('app/model/commentaire/lire_coms.php');
    $coms = lire_coms($detail);
    //var_dump($coms);
    // Traitement sur les données renvoyées par le modèle
    foreach ($coms as $cle => $com)
    {
        //echo "Article " . $cle . " = ";
        //var_dump($article);
        $coms[$cle]['comment_date'] = $com['comment_date'];
        $coms[$cle]['comment_content'] = htmlspecialchars($com['comment_content']);
    }

    // Appel de la vue correspondante
    define("PAGE_TITLE", "Détail d'un article");
    include_once('app/view/article/detail.php');
