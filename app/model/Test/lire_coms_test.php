<?php
    include '../pdo.inc.php';

    include '../commentaire/lire_coms.php';

    echo "<h2> Commentaire de l'article 1 </h2>";
    $data = lire_coms(1);
    var_dump($data);

    echo "<h2> Commentaire de l'article 2 </h2>";
    $data = lire_coms(2);
    var_dump($data);

    var_dump($data[0]);
    echo $data[0]['comment_content'];

    echo "<h2> Commentaire de l'article 3 </h2>";
    $data = lire_coms(3);
    var_dump($data);

    echo "<h2> Commentaire de l'article 17 </h2>";
    $data = lire_coms(17);
    var_dump($data);

    echo "<h2> Commentaire de l'article 29 </h2>";
    $data = lire_coms(29);
    var_dump($data);
