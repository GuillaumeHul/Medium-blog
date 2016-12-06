<?php
/*if (!setcookie("reco","",time()-1000))
{
    die("Problème !");
}*/

session_destroy();
session_unset();
unset($_SESSION['user']);

header("Location:?");
exit;
