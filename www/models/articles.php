<?php

require_once __DIR__ . '/../functions/sql.php';

/*Функция получения из БД информации обо всех новостях*/
function Article_getAll()
{
    $sql = 'SELECT * FROM articles';

    return Sql_query($sql);
}