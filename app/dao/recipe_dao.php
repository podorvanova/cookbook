<?php

require_once(dirname(__FILE__).'/database_config.php');

require_once(dirname(__FILE__).'/../models/Instruction.php');
require_once(dirname(__FILE__).'/../models/Ingredient.php');
require_once(dirname(__FILE__).'/../models/Recipe.php');

function find_recipe($id) {
    global $db_handle;

    $result =
        pg_query_params(
            $db_handle,
            "SELECT id, name, type, description, image_path FROM recipes WHERE id = $1",
            array($id)
        );

    if ($result) {
        $answer = pg_num_rows($result);
        if ($answer == 1) {
            $result_instructions =
                pg_query_params(
                    $db_handle,
                    "SELECT instruction_number, instruction_description FROM instructions WHERE recipe_id = $1 
                     ORDER BY instruction_number",
                    array($id)
                );
            $instructions = array();

            for ($i = 0; $i < pg_num_rows($result_instructions); $i++) {
                $instructions[$i] = pg_fetch_object($result_instructions, $i, 'Instruction');
            }

            $result_ingredients =
                pg_query_params(
                    $db_handle,
                    "SELECT ingredient_number, ingredient_measure, ingredient_name FROM ingredients 
                     WHERE recipe_id = $1 ORDER BY ingredient_number",
                    array($id)
                );
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
