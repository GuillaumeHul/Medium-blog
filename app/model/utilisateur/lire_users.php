<?php
function lire_users()
{
    global $connexion;
    try
    {
        $query = $connexion->prepare("SELECT display_name
                                    FROM blog_users
                                    ORDER BY display_name");

        $query->execute();
        $users = $query->fetchAll();

        $query->closeCursor();
        return $users;
    }
    catch (Exception $e)
    {
        die('Erreur SQL :' .$e->getMessage());
    }
}
