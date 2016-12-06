<?php
    include '../pdo.inc.php';

    include '../article/lire_nb_articles.php';

    echo "<h2> Page 1 </h2>";
    $data = lire_nb_articles();
    var_dump($data);


?>
