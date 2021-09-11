<?php
require_once '../BusinessLogic/RemoveTodoList.php';
require_once '../Model/TodoList.php';
require_once '../BusinessLogic/ShowTodoList.php';
require_once '../BusinessLogic/AddTodoList.php';

addTodoList("Belajar PHP");
addTodoList("Belajar Excel");
addTodoList("Belajar SQL");
addTodoList("Belajar Frontend");

showTodoList();

removeTodoList(4);
showTodoList();

addTodoList("Mengerjakan proyek todolist");
showTodoList();
removeTodoList(1);
showTodoList();
