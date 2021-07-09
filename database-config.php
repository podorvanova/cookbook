<?php
$db_handle = pg_connect(getenv("DATABASE_URL"));

if (!$db_handle) {
    throw new Exception('Connection attempt failed.');
}

class Recipe
{
    public $id;
    public $name;
    public $description;
    public $image_path;
}

function find_recipe($id) {
    global $db_handle;

    $query = "SELECT id, name, description, image_path FROM recipes WHERE id = $id";

    $result = pg_exec($db_handle, $query);

    if ($result) {
        $answer = pg_num_rows($result);
        if ($answer == 1) {
            return pg_fetch_object($result, 0, 'Recipe');
        } elseif ($answer == 0) {
            return null;
        } else {
            throw new Exception('The query executed unsuccessfully. Found more than 1 rows.');
        }
    } else {
        throw new Exception('Could not connect to database.');
    }
}
