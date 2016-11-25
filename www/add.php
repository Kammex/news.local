<?php

require __DIR__ . '/models/articles.php';
require __DIR__ . '/functions/file.php';

if (!empty($_POST)) {
    $data = [];
    $sql = 'SELECT * FROM articles ORDER BY art_time_add DESC';
    $num_art = Sql_query($sql);
    if (!is_bool($num_art)) {
        $num_art = $num_art[0]['id'];
    }
    $file_name = File_upload($num_art);
    var_dump($file_name);
}

include __DIR__ . '/views/add.php';

?>