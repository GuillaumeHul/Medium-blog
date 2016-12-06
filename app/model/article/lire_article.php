<?php

function lire_article($detail)
{
    global $connexion;
    try
    {
        $query = $connexion->prepare("SELECT *
                                    FROM blog_posts, blog_users, blog_categories
                                    WHERE post_author = ID
            							AND post_category = cat_id
                                        AND post_ID=:detail");

        $query->bindParam(':detail', $detail, PDO::PARAM_INT);
        $query->execute();
        $article = $query->fetch();

        $query->closeCursor();
        return $article;
    }
    catch (Exception $e)
    {
        die('Erreur SQL :' .$e->getMessage());
    }
}
