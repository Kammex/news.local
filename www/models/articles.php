<?php

require_once __DIR__ . '/../functions/sql.php';

/*Функция получения из БД информации обо всех новостях*/
function Article_getAll()
{
    $sql = 'SELECT * FROM articles ORDER BY art_time_add DESC ';

    return Sql_query($sql);
}