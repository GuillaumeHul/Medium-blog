<?php include("app/view/layout/header.inc.php"); ?>

<h1>Connexion</h1>

<form class="" action="?module=user&action=login" method="post">
    <label for="identifiant">Login :</label>
    <input type="text" name="login" id="identifiant">
    <label for="mdp">Password :</label>
    <input type="password" name="mdp" id="mdp">
    <input type="submit" name="connection">
    <input type="checkbox" id="rc" name="rc" value="Restez connecté">
    <label for="rc"> Restez connecté</label>
</form>

<?php include("app/view/layout/footer.inc.php"); ?>
