<?php
function lire_cats()
{
    global $connexion;
    try
    {
        $query = $connexion->query("SELECT * FROM blog_categories");
        $categories = $query->fetchAll();
        $query->closeCursor();
        return $categories;
    }
    catch (Exception $e)
    {
        die('Erreur SQL :' .$e->getMessage());
    }
}
