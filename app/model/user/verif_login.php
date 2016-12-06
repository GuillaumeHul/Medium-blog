<?php
function verif_login($form)
{
    global $connexion;
    try
    {
        $req = "SELECT *
                FROM blog_users
                WHERE user_login = :login
                AND user_pass= :mdp";

        $query = $connexion->prepare($req);

        $query->bindValue(':login', $form['login'], PDO::PARAM_STR);
        $query->bindValue(':mdp', $form['mdp'], PDO::PARAM_STR);
        $query->execute();

        $users = $query->fetchAll();

        if ((empty($users)) || (sizeof($users) > 1))
            return false;
        else
            return $users[0];
        $query->closeCursor();
    }
    catch (Exception $e)
    {
        return false;
    }
}
