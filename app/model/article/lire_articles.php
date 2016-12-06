<?php
function lire_articles($offset, $limite)
{
    global $connexion;
    try
    {
        $query = $connexion->prepare("SELECT post_ID,post_title,post_date,left(post_content,300) as contenu,
                                            display_name, ID, post_author, post_category, cat_id, cat_descr, user_photo
                                    FROM blog_posts, blog_users, blog_categories
                                    WHERE post_author = ID
                                    AND cat_id = post_category
                                    ORDER BY post_date DESC
                                    LIMIT :offset, :limite");

        $query->bindParam(':offset', $offset, PDO::PARAM_INT);
        $query->bindParam(':limite', $limite, PDO::PARAM_INT);
        $query->execute();
        $articles = $query->fetchAll();

        $query->closeCursor();
        return $articles;
    }
    catch (Exception $e)
    {
        die('Erreur SQL :' .$e->getMessage());
    }
}
