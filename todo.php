<?php

session_start();
require('functions/todo.php');

if (isset($_GET) && isset($_GET['action']) && $_GET['action'] == 'todo') {
    echo json_encode(getAllTodos());
}

if (isset($_POST) && isset($_POST['name']) && isset($_POST['description'])) {
    createTodo($_POST['name'], $_POST['description']);
}

if (isset($_POST) && isset($_POST['action']) && $_POST['action'] == 'finish' && isset($_POST['id_todo'])) {
    finishTodo($_POST['id_todo']);
}