<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=blogmin", "fenn", "secret");
} catch (\Exception $err) {
    die("Could not connnect due to $err");
}
