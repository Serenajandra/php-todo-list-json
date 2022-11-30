<?php


$todos_str = file_get_contents("todo.json");
$todos = json_decode($todos_str, true);

if (isset($_POST["newToDo"])) {
    //Inserisco il new todo
    $todos[] = [
        "text" => $_POST["newToDo"],
        "done" => false
    ];
    //lo inserisco nel file json
    file_put_contents("todo.json", json_encode($todos));
} elseif (isset($_POST["doneIndex"])) {
    // mettiamo done ad un todo
    $todoIndex = $_post["doneIndex"];
    $todos[$todoIndex]["done"] = true;
    file_put_contents("todo.json", json_encode($todos));
}


header("Content-Type: application/json");
echo json_encode($todos);
