<?php
/**
 * Menambah data todolist
 * 
 */

 function addTodoList(string $todo)
 {
    global $todoList; //mengambil variable global todolist
    $number = sizeof($todoList) + 1; //mengetahui todo list terakhir
    $todoList[$number] = $todo;    
 }