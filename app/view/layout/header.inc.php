<!DOCTYPE html>
<html lang="<?= PAGE_LANG ?>">
    <head>
        <meta charset="<?= PAGE_CHARSET ?>">
        <link rel="stylesheet" href="webroot/css/global.css" media="screen" title="no title">
        <link href="https://fonts.googleapis.com/css?family=Oxygen+Mono" rel="stylesheet">
        <title> <?php echo PAGE_TITLE ?> </title>
    </head>
    <body>
        <header>
            <div>
                <div id="logo_t">
                    <div id="logo"></div>
                    <a href="./"><h2><span class="green">William</span>'s blog</h2></a>
                </div>
                <div class="horizon">
                    <?php
                        if (!isset($_SESSION['user'])) { ?>
                            <a href="?module=user&action=login" class="green">Sign in</a>
                    <?php  } else {?>
                        <a href="?module=user&action=logout" class="green">Sign out</a>
                    <?php  }?>
                    <p>
                        <a href="?module=article&action=new" class="green">Write an article</a>
                    </p>
                    <div class="user_photo" id="guillaume"></div>
                </div>
            </div>
        </header>

        <div class="thumbnail">
            <img src="./webroot/images/do_while.jpg" alt="" />
        </div>

        <div class="contener">
            <?php include_once("app/view/layout/nav.inc.php"); ?>

            <main>
