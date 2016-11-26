<?php

require __DIR__ . '/models/articles.php';

$file = File_newsName((string)($_GET['art'] - 1));
$item = Article_getOne($file);

include __DIR__ . '/views/article.php';



