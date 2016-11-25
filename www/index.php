<?php

require __DIR__ . '/models/articles.php';

$items = Article_getAll();

include __DIR__ . '/views/index.php';