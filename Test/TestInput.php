<?php

require_once "/laragon/www/PHP-Dasar-TodoList/Helper/Input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL;

$channel = input("Channel");
echo $channel . PHP_EOL;
