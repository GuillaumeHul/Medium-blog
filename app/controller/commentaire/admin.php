<?php
    protection("user", "user", "login", USER_ADMIN);

    $users = select_table('blog_users',
                        array('orderby' => 'display_name'));


    // Traitement du paramètre de numéro de page
    if (!isset($_GET['page']))
        $page=1;
    else
        $page=$_GET['page'];

    $offset = ($page - 1) * PAGINATION_COMMENTS;

    $options = array('orderby' => 'comment_date',
                     'order' => 'DESC',
                     'limit' => PAGINATION_COMMENTS,
                     'offset' => $offset);

    if (isset($_GET['user']))
    {
        $options["wherecolumn"] = "comment_author";
        $options["wherevalue"] = $_GET["user"];
    }
    
    $coms = select_table('blog_comments', $options);

    if (isset($_GET["user"]))
    {
        $options = array("wherecolumn" => "comment_author",
                         "wherevalue"   => $_GET["user"]);
    }
    else
    {
        $option = array();
    }
    $nb_coms = count_table("blog_comments", $options);


    define("PAGE_TITLE", "Admin des commentaires");
    include_once 'app/view/commentaire/admin.php';
    /*
    ++ protection

    ++ CM lire users
    ++ Créer la vue
    ++ CV afficher liste users

    ++ CM lires les commentaires
    ++ CM compter les commentaires
    ++ Afficher les commentaires (var dump)
    ++ CV paginate

    ++ Ajouter les boutons delete

    ++ Créer un controller commentaire/delete
    ++ Créer un modèle commentaire/delete --> core_model

    Traiter le filtre user
        Améliorer le CM select_table
        Améliorer le CM count_table
    */
