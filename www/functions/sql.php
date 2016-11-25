<?php

/*Соединение с базой данных*/
function Sql_connect()
{
    $link = mysqli_connect('localhost', 'root', '', 'test');
    return $link;
}

/*Выполнение запроса выборки из базы*/
function Sql_query($sql)
{
    $link = Sql_connect();

    $res = mysqli_query($link, $sql);

    $ret = [];
    while (false != ($row = mysqli_fetch_assoc($res))) {
        $ret[] = $row;
    }

    return $ret;
}

/*Выполнение прочих запросов*/
function Sql_exec($sql)
{
    $link = Sql_connect();
    return mysqli_query($link, $sql);
}