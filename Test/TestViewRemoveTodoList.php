<?php

require_once "/laragon/www/PHP-Dasar-TodoList/Model/TodoList.php";
require_once "/laragon/www/PHP-Dasar-TodoList/View/ViewRemoveTodoList.php";
require_once "/laragon/www/PHP-Dasar-TodoList/BusinessLogic/AddTodoList.php";
require_once "/laragon/www/PHP-Dasar-TodoList/BusinessLogic/ShowTodoList.php";

addTodoList("Muhammad");
addTodoList("Arif");

showTodoList();

viewRemoveTodoList();

showTodoList();
