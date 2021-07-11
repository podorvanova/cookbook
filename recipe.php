<?php
    require_once(dirname(__FILE__).'/app/dao/recipe_dao.php');

    require_once(dirname(__FILE__).'/templates/header.php');
?>

<?php
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $recipe = find_recipe($id);
} else {
    throw new Exception('You need to specify recipe number.');
}
?>

<hr style="margin: 0;">
<div class="main-content row col-12 col-md-8 offset-md-2">
    <div class="breadcrumb-navigation">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php" class="breadcrumb-link">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#" class="breadcrumb-link"><?= $recipe->type ?></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?= $recipe->name ?></li>
            </ol>
        </nav>
    </div>

    <div class="recipe">
        <h2 class="recipe-name"><?= $recipe->name ?></h2>
        <div class="row">
            <div class="col-md-8">
                <img src="/public/images/<?= $recipe->image_path ?>" class="recipe-image" alt="Banana Pancakes">
            </div>
            <div class="col-md-4">
                <div class="icon-container">
                    <i class="bi bi-person-fill">
                        <span class="text">1 serve(s)</span>
                    </i>
                    &emsp;
                    <i class="bi bi-clock-fill">
                        <span class="text">10 minutes</span>
                    </i>
                </div>
                <br>
                <div class="ingredient-container">
                    <h4>Ingredients</h4>
                    <ul class="ingredient-list">
                        <?php
                        for ($i = 0; $i < count($recipe->ingredients); $i++) {
                            echo "<li><span class=\"ingredient-text\">{$recipe->ingredients[$i]-> ingredient_measure}{$recipe->ingredients[$i]-> ingredient_name}</span></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="main-text">
                    <p class="recipe-description"><?= $recipe->description ?></p>
                    <br>
                    <h4>Instructions</h4>
                    <ol class="instructions">
                        <?php
                            for ($i = 0; $i < count($recipe->instructions); $i++) {
                                echo "<li><span class=\"instruction-text\">{$recipe->instructions[$i]->instruction_description}</span></li>";
                            }
                        ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once(dirname(__FILE__).'/templates/footer.php');
?>