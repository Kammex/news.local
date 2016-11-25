<?php

function File_newsName($num_art)
{
    if(is_string($num_art)) {
        $len = strlen($num_art);
        switch ($len) {
            case 1:
                $file = '000' . $num_art . '.txt';
                break;
            case 2:
                $file = '00' . $num_art . '.txt';
                break;
            case 3:
                $file = '0' . $num_art . '.txt';
                break;
            case 4:
                $file = $num_art . '.txt';
                break;
            default:
                $file = false;
        }
        return $file;
    }
    return false;
}

function File_upload($num_art)
{
    if (false == $file_name = File_newsName($num_art)) {
        return false;
    }
    $path = __DIR__ . '/../articles/' . $file_name;
    return file_put_contents($path, $_POST['article']);
}
