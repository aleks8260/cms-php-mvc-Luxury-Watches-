<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 23.01.2019
 * Time: 21:05
 */
define("DEBUG", 1); // Константа DEBUG: режим 0 - режим продакшен, 1 - режим разработки (показывает ошибки)
define("ROOT", dirname(__DIR__)); // Указывает корень нашего сайта ishop2.loc
define("WWW", ROOT . '/public'); // Указывает на публичную папку
define("APP", ROOT . '/app'); // Ведет на контроллеры, модели
define("CORE", ROOT . '/vendor/ishop/core'); // Ведет к ядру
define("LIBS", ROOT . '/vendor/ishop/core/libs'); // Ведет к ядру
define("CACHE", ROOT . '/tmp/cache'); // Ведет на папку кэша
define("CONF", ROOT . '/config'); // Ведет на конфигурационные файлы
define("LAYOUT", 'default'); // Шаблон сайта по умолчанию (default)

//Делаем константу
//http://ishop2.loc/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
//http://ishop2.loc/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
//http://ishop2.loc/
echo $app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path); //Контанта отвечающая за url страницу
define("ADMIN", PATH . '/admin'); // Константа ведет на админку сайта /admin (можно поменять на свое)
//Автозагрузчик композера подключаем
require_once ROOT . '/vendor/autoload.php';