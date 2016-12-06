<?php
    //if (isset($_SESSION['user']))
        //header('Location:?module=article&action=admin');

    if (!isset($_POST['login']))
    {
        define("PAGE_TITLE","Identification");
        include("app/view/user/login.php");
    }
    else
    {
        var_dump($_POST);

        // Appel du model pour cherhcer un user
        include_once('app/model/user/verif_login.php');
        $retour = verif_login($_POST);

        if (!$retour)
        {
            header('Location:?module=user&action=login&notif=nok');
            exit;
        }
        else
        {
            $_SESSION["user"] = $retour;
            if (($retour['ID'] == 1))
            {
                $_SESSION["level"] = USER_ADMIN;
                header('Location:?module=article&action=admin');
            }
            else
            {
                $_SESSION["level"] = USER_LAMBDA;
                header('Location:?');
            }
        }
    }
