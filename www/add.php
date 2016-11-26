<?php

require __DIR__ . '/functions/file.php';
require __DIR__ . '/functions/sql.php';

if (!empty($_POST)) {
    $data = [];
    $sql = 'SELECT * FROM articles ORDER BY art_time_add DESC';
    $num_art = Sql_query($sql);
    if (!is_bool($num_art)) {
        $num_art = $num_art[0]['id'];
    }
    $file_name = File_upload($num_art);
    if ($file_name) {
        $sql = "INSERT INTO `articles`(`title`, `path`, `art_time_add`) VALUES ('" . $_POST['title'] . "','" . $file_name . "',CURRENT_TIMESTAMP)";
        $mes = Sql_exec($sql);
    }
    var_dump($file_name);
}

include __DIR__ . '/views/add.php';

if ($mes) {
    echo '<br>Новость успешно добавлена!';
} else {
    echo '<br>Произошла ошибка!';
}

?>