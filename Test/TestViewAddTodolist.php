<?php

require_once '../View/ViewAddTodoList.php';
require_once '../BusinessLogic/AddTodoList.php';
require_once '../BusinessLogic/ShowTodoList.php';

addTodoList("Working Japan");
addTodoList("Umrah");
addTodoList("Study in Aussie");

showTodoList();
viewAddTodoList();
showTodoList();
viewAddTodoList();
showTodoList();
viewAddTodoList();
showTodoList();