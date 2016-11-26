<?php

require_once __DIR__ . '/../functions/sql.php';
require_once __DIR__ . '/../functions/file.php';

/*Функция получения из БД информации обо всех новостях*/
function Article_getAll()
{
    $sql = 'SELECT * FROM articles ORDER BY art_time_add DESC ';

    $rez = Sql_query($sql);
    $content = [];
    foreach ($rez as $key => $arr) {
        $content[$key]['id'] = $arr['id'];
        $content[$key]['title'] = $arr['title'];
        $content[$key]['path'] = $arr['path'];
        $content[$key]['text'] = File_getContent($arr['path']);
        $content[$key]['art_time_add'] = $arr['art_time_add'];
    }
    return $content;
}

/*Фугкция получения одной статьи*/
function Article_getOne($path) {
    $sql = "SELECT * FROM articles WHERE path='" . $path . "'";
    $rez = Sql_query($sql);
    if (!rez) {
        return false;
    }

    $content = [];
    foreach ($rez as $key => $arr) {
        $content[$key]['id'] = $arr['id'];
        $content[$key]['title'] = $arr['title'];
        $content[$key]['path'] = $arr['path'];
        $content[$key]['text'] = File_getContent($arr['path']);
        $content[$key]['art_time_add'] = $arr['art_time_add'];
    }

    return $content;
}