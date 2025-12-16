<?php
$connection = new mysqli("localhost", "root", "", "toDoList"); //no password,and yeas usernasme, + save it on a variable
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['add-task'])) {
    $task = $_POST['text'];
    echo $task;
}
?>