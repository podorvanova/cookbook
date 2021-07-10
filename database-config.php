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
    public $instructions;
}

class Instruction
{
    public $instruction_number;
    public $instruction_description;
}

function find_recipe($id) {
    global $db_handle;

    $query_recipe = "SELECT id, name, description, image_path FROM recipes WHERE id = $id";

    $result = pg_exec($db_handle, $query_recipe);

    if ($result) {
        $answer = pg_num_rows($result);
        if ($answer == 1) {
            $query_instructions = "SELECT instruction_number, instruction_description FROM instructions WHERE recipe_id = $id ORDER BY instruction_number";
            $result_instructions = pg_exec($db_handle, $query_instructions);
            $instructions = array();
            for ($i = 0; $i < pg_num_rows($result_instructions); $i++) {
                $instructions[$i] = pg_fetch_object($result_instructions, $i, 'Instruction');
            }
            $recipe = pg_fetch_object($result, 0, 'Recipe');
            $recipe->instructions = $instructions;
            return $recipe;
        } elseif ($answer == 0) {
            return null;
        } else {
            throw new Exception('The query executed unsuccessfully. Found more than 1 rows.');
        }
    } else {
        throw new Exception('Could not connect to database.');
    }
}
