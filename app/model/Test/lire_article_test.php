<?php
    include '../pdo.inc.php';

    include '../article/lire_article.php';

    echo "<h2> détail de l'article 1 </h2>";
    $data = lire_article(1);
    var_dump($data);

    echo "<h2> détail de l'article 2 </h2>";
    $data = lire_article(2);
    var_dump($data);

    echo "<h2> détail de l'article 3 </h2>";
    $data = lire_article(3);
    var_dump($data);

    echo "<h2> détail de l'article 17 </h2>";
    $data = lire_article(17);
    var_dump($data);

    echo $data['post_content'];

    echo "<h2> détail de l'article 29 </h2>";
    $data = lire_article(29);
    var_dump($data);
