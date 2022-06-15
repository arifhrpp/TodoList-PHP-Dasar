<?php

require_once "/laragon/www/PHP-Dasar-TodoList/Model/TodoList.php";
require_once "/laragon/www/PHP-Dasar-TodoList/BusinessLogic/AddTodoList.php";
require_once "/laragon/www/PHP-Dasar-TodoList/BusinessLogic/ShowTodoList.php";
require_once "/laragon/www/PHP-Dasar-TodoList/BusinessLogic/RemoveTodoList.php";


addTodoList("Arif");
addTodoList("Budi");
addTodoList("Joko");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();
