<?php
    include('../../templates/header.php');
?>

<hr style="margin: 0;">
<div class="main-content row col-12 col-md-8 offset-md-2">
    <div class="breadcrumb-navigation">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../../index.php" class="breadcrumb-link">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#" class="breadcrumb-link">Breakfast Recipes</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Banana Pancakes</li>
            </ol>
        </nav>
    </div>

    <div class="recipe">
        <h2 class="recipe-name">Banana Pancakes</h2>
        <div class="row">
            <div class="col-md-8">
                <img src="../../images/banana-pancakes.jpg" class="recipe-image" alt="Banana Pancakes">
            </div>
            <div class="col-md-4">
                <div class="icon-container">
                    <i class="bi bi-person-fill">
                        <span class="text">2 serves</span>
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
                        <li><span class="ingredient-text">1 ripe banana (200g)</span></li>
                        <li><span class="ingredient-text">2 large eggs</span></li>
                        <li><span class="ingredient-text">½ tsp baking powder </span></li>
                        <li><span class="ingredient-text">½ cup quick rolled oats</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="main-text">
                    <p class="recipe-description">It’s true, the WORLD loves pancakes.
                        No more so than on Tuesday before lent, commonly referred to as Shrove Tuesday or Pancake Tuesday here in Australia.
                        This is not your traditional pancake recipe, but instead a recipe that is high in fibre, protein, vitamins and minerals.
                    </p>
                    <br>
                    <h4>Instructions</h4>
                    <ol class="instructions">
                        <li><span class="instruction-text">Preheat a medium non-stick frying pan over a medium heat.</span></li>
                        <li><span class="instruction-text">In a blender, blend together all the ingredients until nice and smooth.</span></li>
                        <li><span class="instruction-text">Pour 2 x ¼ cup mixture into the pan, forming small pancake circles.</span></li>
                        <li><span class="instruction-text">After two minutes or when just golden, flip.</span></li>
                        <li><span class="instruction-text">Cook for another 2 minutes or until done.</span></li>
                        <li><span class="instruction-text">Set aside on a plate and repeat with the remaining pancake batter.</span></li>
                        <li><span class="instruction-text">Serve with your favourite toppings.</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('../../templates/footer.php');
?>