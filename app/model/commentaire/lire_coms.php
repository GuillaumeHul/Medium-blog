<?php
function lire_coms($detail)
{
    global $connexion;
    try
    {
        $query = $connexion->prepare("SELECT comment_post_ID, comment_author, comment_date, comment_content, ID, display_name, user_photo
                                    FROM blog_comments, blog_users
                                        WHERE comment_author = ID
        							    AND comment_post_ID=:detail");

        $query->bindParam(':detail', $detail, PDO::PARAM_INT);
        $query->execute();
        $coms = $query->fetchAll();

        $query->closeCursor();
        return $coms;
    }
    catch (Exception $e)
    {
        die('Erreur SQL :' .$e->getMessage());
    }
}
