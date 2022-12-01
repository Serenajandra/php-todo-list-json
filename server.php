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
    // Richiamo il doneIndex che ho inviato con metodo post
    $todoIndex = $_POST["doneIndex"];
    // cambiamo il valore del todoIndex in true al click e  torniamo a renderlo false al nuovo click 
    $todos[$todoIndex]["done"] = !$todos[$todoIndex]["done"];
    // rendiamo persistente il cambiamento caricandolo sul file json
    file_put_contents("todo.json", json_encode($todos));
}


header("Content-Type: application/json");
echo json_encode($todos);
