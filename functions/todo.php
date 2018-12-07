<?php

include(dirname(__DIR__) . "/db_connect.php");

function getAllTodos() {
    global $DB;
    $sql = "SELECT * FROM todo";

    $result=$DB->query($sql);

    if (mysqli_num_rows($result)== 0) return null;

    return $result->fetch_array(MYSQLI_ASSOC);
}

function createTodo($name, $description) {
    global $DB;
    $sql = "INSERT INTO todo (name, description, status, date) VALUES (" . $name . ", " . $description .  ", 0, ". time() . ")";

    $result=$DB->query($sql);
    return $DB->insert_id;
}

function finishTodo($id) {
    global $DB;
    $sql = "UPDATE todo SET status = 1 WHERE id_todo = " . $id;

    $result=$DB->query($sql);
}