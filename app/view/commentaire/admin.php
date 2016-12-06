<?php include("app/view/layout/header.inc.php"); ?>

<?php
    if (isset($_GET["user"]))
    {
        scroll_list('users', 'dropdown', 'listuser', $users, 'ID', 'display_name',
                    array("selected" => $_GET["user"]));
    }
    else
    {
        scroll_list('users', 'dropdown', 'listuser', $users, 'ID', 'display_name',
                    array("default" => "Tous les users"));
    }
?>

<?php
        //var_dump($nb_coms);
        foreach ($coms as $com)
        {
            var_dump($com);
?>
            <a href="?module=commentaire&action=delete&id=<?= $com['comment_ID']; ?>&page=<?= $page ?>">Supprimer</a>
<?php
        }
?>

<?php
    if(isset($_GET['user']))
    {
        paginate($nb_coms, PAGINATION_COMMENTS, 'commentaire', 'admin', '&user=' . $_GET['user']);
    }
    else
    {
        paginate($nb_coms, PAGINATION_COMMENTS, 'commentaire', 'admin');
    }
?>

<?php //paginate($nb_coms, PAGINATION_COMMENTS, $module, $action); ?>

<script type="text/javascript" src="webroot/js/commentaire_admin.js"></script>
<?php include("app/view/layout/footer.inc.php"); ?>
