<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 23.01.2019
 * Time: 20:55
 */
require_once dirname(__DIR__) . '/config/init.php';

echo "Это фронт контроллер<br>";

//Распечатываем запросы
var_dump($_SERVER['QUERY_STRING']);