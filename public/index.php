<?php

define('ROOT', dirname(__DIR__)); // константа, которая будет указываться на корень приложения
define('PUBLIC', ROOT . '/public'); // константа, которая будет указывать на папку public
define('CORE', ROOT . '/core');
define('APP', ROOT . '/app');
define('CONTROLLERS', APP . '/controllers');
define('VIEWS', APP . '/views');
define('PATH', 'http://phpproject'); // Переменная, указывающая на главную страницу проекта

require CORE . '/funcs.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/' );

if($uri === ''){
    require CONTROLLERS . '/index.php';
}
elseif($uri == 'about'){
    require  CONTROLLERS . '/about.php';
}
else{
    abort();
}


