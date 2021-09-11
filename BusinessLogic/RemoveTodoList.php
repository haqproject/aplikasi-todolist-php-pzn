<?php
/**
 * Menghapus item todolist
 */

function removeTodoList(int $number): bool
{
    global $todoList;
    if($number > sizeof($todoList)){
        return false;
    }

    for($i = $number; $i < sizeof($todoList); $i++){
        $todoList[$number] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);
    return true;
}