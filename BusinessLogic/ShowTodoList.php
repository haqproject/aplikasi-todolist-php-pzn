<?php
//Menampilkan todolist
function showTodoList(){
    global $todoList;
    echo "Todolist" . PHP_EOL;
    foreach($todoList as $number => $value){
        echo "$number . $value" . PHP_EOL;
    }
}