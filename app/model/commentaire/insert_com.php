<?php
function insert_com($commentaire, $user_id)
{
    global $connexion;
    try
    {
        $req = "INSERT INTO blog_comments (comment_post_ID, comment_author, comment_content)
                  VALUES (:post_id, :comment_author, :contenu)";

        $query = $connexion->prepare($req);

        $query->bindValue(':post_id', $commentaire['post_id'], PDO::PARAM_INT);
        $query->bindValue(':comment_author', $user_id, PDO::PARAM_INT);
        $query->bindValue(':contenu', $commentaire['contenu'], PDO::PARAM_STR);

        $query->execute();

        return true;
    }
    catch (Exception $e)
    {
        return false;
    }
}
