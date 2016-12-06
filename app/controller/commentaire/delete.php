<?php


$coms = delete_table('blog_comments',
                    array('id' => $_GET["id"],
                       'id_column' => 'comment_ID'));

if ($retour)
    location("commentaire", "admin", "notif=ok&page=" . $_GET["page"]);
else
    location("commentaire", "admin", "notif=nok&page=" . $_GET["page"]);
