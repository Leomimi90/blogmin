<?php
require_once "config/database.php";

$create_post_table_schema = <<<POST_TABLE
CREATE TABLE IF NOT EXISTS posts (
    id INTEGER PRIMARY KEY,
    title VARCHAR(40) NOT NULL,
    img VARCHAR(40) NULL,
    categories VARCHAR(40) NULL,
    content LONGTEXT NULL
)
POST_TABLE;

$users_table_schema = "";

try {
    $db->query($create_post_table_schema);
} catch (\Throwable $th) {
    print_r("Tables not created");
}
