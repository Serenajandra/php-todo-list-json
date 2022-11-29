<?php
// [
//     {"text":"HTML","done":true},
//     {"text":"CSS","done":true},
//     {"text":"Responsive design","done":true},
//     {"text":"Javascript","done":true},
//     {"text":"PHP","done":true},
//     {"text":"Laravel","done":false}
// ]
//per ottenere il file sottoforma di stringa
$string = file_get_contents("todo.json");
//Per trasformare la stringa in array associativo php
$toDolist = json_decode($string, true);
