<?php include_once("app/view/layout/header.inc.php"); ?>
    <?php if(isset($_SESSION["user"])) { ?>
    <form ction="?module=commentaire&action=insert" method="post">
        <table>
            <caption> Ecrire un commentaire </caption>

            <tr>
                <th>
                    <label for="contenu"> Contenu </label>
                </th>
                <td>
                    <textarea type="text" name="contenu" rows="3" cols="100" required></textarea>
                    <input type="hidden" name="post_id" value="<?php echo $_GET['id'] ?>">
                </td>
            </tr>

            <tr>
                <th></th>
                <td>
                    <input type="submit" value="enregistrer" /> <input type="reset" name="Effacer" value="Effacer" />
                </td>
            </tr>
        </table>
    </form>
    <?php } else{ ?>
        <div><p> Connectez vous pour pouvoir commenter. </p></div>
    <?php } ?>
    <h3 class="response"> Responses </h3>

    <?php foreach($coms as $com) { ?>
        <div class="article">
            <div class="tete">
                <div class="user_photo"><img src="<?php echo $com['user_photo']; ?>" alt="<?php echo str_replace( '/', '', strrchr($com['user_photo'], '/')); ?>" /></div>

                <div>
                    <p>
                        Writed by <span class="green"><?php echo $com["display_name"]; ?></span>
                    </p>

                    <p>
                        Published on <span class="green"><?php echo $com["comment_date"]; ?></span>
                    </p>
                </div>
            </div>

            <div class="com">
                <p>
                    <?php echo $com["comment_content"]; ?>
                </p>
            </div>
        </div>
    <?php } ?>
