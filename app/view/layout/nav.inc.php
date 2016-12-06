<nav>
    <h4 class="cate">Informations</h4>

    <div id='opt_user' class="titre">
        <h3>User list</h3>
    </div>

    <div id='user' class="hidden content_user">
        <?php foreach($users as $user) { ?>
            <div class="user">
                <p>
                    <?php echo $user["display_name"]; ?>
                </p>
            </div>
        <?php } ?>
    </div>
</nav>
