<?php
    include('templates/header.php');
?>

<!-- Home Slider -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="container-fluid">
            <div class="carousel-item active align-middle" data-bs-interval="10000">
                <img src="images/banana-pancakes.jpg" class="d-block w-100" alt="Banana Pancakes">
                <div class="carousel-caption d-none d-sm-block top-50">
                    <span class="recipe-type">Breakfast Recipe</span>
                    <h1 class="carousel-recipe">Banana Pancakes</h1>
                    <button type="button" class="btn-lg btn-info uppercase">
                        <a href="html/recipes/banana-pancakes.php">
                            View Recipe
                        </a>
                    </button>
                </div>
            </div>
            <div class="carousel-item align-middle" data-bs-interval="10000">
                <img src="images/pesto-chicken-linguini.jpeg" class="d-block w-100" alt="Pesto Chicken Linguini">
                <div class="carousel-caption d-none d-sm-block top-50">
                    <span class="recipe-type">Lunch Recipe</span>
                    <h1 class="carousel-recipe">Pesto Chicken Linguini</h1>
                    <button type="button" class="btn-lg btn-info uppercase">
                        <a href="html/recipes/pesto-chicken-linguini.html">
                            View Recipe
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Top Recipe Grid -->
<div id="top-recipe">
    <div class="row col-12 col-md-8 offset-md-2 justify-content-center">
        <div class="container-fluid">
            <div class="row">
                <h2 class="heading">All Recipes</h2>
                <p>Check out the most popular dishes.</p>
            </div>
            <div class="row recipes-grid">
                <div class="col-3">
                    <img src="images/banana-pancakes.jpg" alt="Banana Pancakes" class="image-grid">
                    <span class="recipe-type-grid">Breakfast Recipe</span>
                    <h5><a href="html/recipes/banana-pancakes.php" class="recipe-name-grid">Banana Pancakes</a></h5>
                </div>
                <div class="col-3">
                    <img src="images/banana-pancakes.jpg" alt="Banana Pancakes" class="image-grid">
                    <span class="recipe-type-grid">Breakfast Recipe</span>
                    <h5><a href="html/recipes/banana-pancakes.php" class="recipe-name-grid">Banana Pancakes</a></h5>
                </div>
                <div class="col-3">
                    <img src="images/banana-pancakes.jpg" alt="Banana Pancakes" class="image-grid">
                    <span class="recipe-type-grid">Breakfast Recipe</span>
                    <h5><a href="html/recipes/banana-pancakes.php" class="recipe-name-grid">Banana Pancakes</a></h5>
                </div>
                <div class="col-3">
                    <img src="images/banana-pancakes.jpg" alt="Banana Pancakes" class="image-grid">
                    <span class="recipe-type-grid">Breakfast Recipe</span>
                    <h5><a href="html/recipes/banana-pancakes.php" class="recipe-name-grid">Banana Pancakes</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('templates/footer.php');
?>