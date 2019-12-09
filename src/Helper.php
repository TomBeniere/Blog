<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function errors($data) {
    if (isset($_SESSION["errors"][$data])) {
        return $_SESSION["errors"][$data];
    } 
}
