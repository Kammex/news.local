<?php

/*Формирование иммени файла, в котором хранится новость, в зависимости от ID новости в базе*/
function File_newsName($num_art)
{
    if(is_string($num_art)) {
        $num = (string)($num_art +1);
        $len = strlen($num);
        switch ($len) {
            case 1:
                $file = '000' . $num . '.txt';
                break;
            case 2:
                $file = '00' . $num . '.txt';
                break;
            case 3:
                $file = '0' . $num . '.txt';
                break;
            case 4:
                $file = $num . '.txt';
                break;
            default:
                $file = false;
        }
        return $file;
    }
    return false;
}

/*Загрузка текста новости на сервер в файл*/
function File_upload($num_art)
{
    if (false == $file_name = File_newsName($num_art)) {
        return false;
    }
    $path = __DIR__ . '/../articles/' . $file_name;
    if (file_put_contents($path, $_POST['article'])) {
        return $file_name;
    }
    return false;
}

/*Получение контента новости*/
function File_getContent($file_name) {
    $path = __DIR__ . '/../articles/' . $file_name;
    $text = file($path);
    $content = implode('<br>', $text);
    return $content;
}