<?php
    if (isset($_POST['post_id']))
    {
        //var_dump($_POST);
        include_once('app/model/commentaire/insert_com.php');
        $result = insert_com($_POST, $_SESSION["user"]["ID"]);

    if ($result)
    {
        header("Location:?module=article&action=detail&id=". $_POST["post_id"] . "&notif=ok");
    }
    else
    {
        header("Location:?module=article&action=detail=id=". $_POST["post_id"] . "&notif=nok");

}
    }
    else
    {
        die("POST absent !");
    }
