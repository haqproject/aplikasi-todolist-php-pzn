<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Naufal");
addTodoList("Arinal Haq");
addTodoList("Bisa insya Allah");
addTodoList("Jadi");

showTodoList();
viewRemoveTodoList();
showTodoList();