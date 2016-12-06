<?php
    session_start();

    include_once ("app/config/config.inc.php");
    include_once('core/core_model.php');
    include_once('core/core_view.php');
    include_once('core/core_controller.php');
    include_once('app/model/pdo.inc.php');

    // Appel du modèle pour obtenir les utilisateurs existant
    include_once('app/model/utilisateur/lire_users.php');
    $users = lire_users();

    if (!isset($_GET['module']))
    {
        $module = DEFAULT_MODULE;
    }
    else
    {
        $module = $_GET['module'];
    }
    if (!isset($_GET['action']))
    {
        $action = DEFAULT_ACTION;
    }
    else
    {
        $action = $_GET['action'];
    }


    $url='app/controller/'. $module .'/'. $action .'.php';

    if (file_exists($url))
    {
        include_once($url);
    }
    else
    {
        include_once("app/view/404.php");
    }


    //Chargement des librairies
    include_once('lib/cogi.inc.php');
