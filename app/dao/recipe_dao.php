<?php

require_once(dirname(__FILE__).'/database_config.php');

require_once(dirname(__FILE__).'/../models/Instruction.php');
require_once(dirname(__FILE__).'/../models/Ingredient.php');
require_once(dirname(__FILE__).'/../models/Recipe.php');

function find_recipe($id) {
    global $db_handle;

    $query_recipe = "SELECT id, name, type, description, image_path FROM recipes WHERE id = $id";

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

            $query_ingredients = "SELECT ingredient_number, ingredient_measure, ingredient_name FROM ingredients WHERE recipe_id = $id ORDER BY ingredient_number";
            $result_ingredients = pg_exec($db_handle, $query_ingredients);
            $ingredients = array();

            for ($i = 0; $i < pg_num_rows($result_ingredients); $i++) {
                $ingredients[$i] = pg_fetch_object($result_ingredients, $i, 'Ingredient');
            }

            $recipe = pg_fetch_object($result, 0, 'Recipe');
            $recipe->instructions = $instructions;
            $recipe->ingredients = $ingredients;
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
