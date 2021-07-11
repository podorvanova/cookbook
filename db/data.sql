DROP SCHEMA public CASCADE;
CREATE SCHEMA public;

CREATE TABLE recipes (
        id serial PRIMARY KEY,
        name VARCHAR UNIQUE NOT NULL,
        type VARCHAR NOT NULL,
        description VARCHAR NOT NULL,
        image_path VARCHAR NOT NULL
);

INSERT INTO recipes (id, name, type, description, image_path) VALUES
(1, 'Banana Pancakes', 'Breakfast Recipe', 'It’s true, the WORLD loves pancakes.
                        No more so than on Tuesday before lent, commonly referred to as Shrove Tuesday or Pancake Tuesday here in Australia.
                        This is not your traditional pancake recipe, but instead a recipe that is high in fibre, protein, vitamins and minerals.', 'banana-pancakes.jpg'),
(2, 'Pesto Chicken Linguini', 'Lunch Recipe', 'This delicious pesto & chicken linguini will warm you up on these Winter nights!', 'pesto-chicken-linguini.jpeg');

CREATE TABLE instructions (
        recipe_id INT NOT NULL,
        instruction_number INT NOT NULL,
        instruction_description VARCHAR NOT NULL,
        PRIMARY KEY (recipe_id, instruction_number),
        FOREIGN KEY (recipe_id) REFERENCES recipes (id)
);

INSERT INTO instructions (recipe_id, instruction_number, instruction_description) VALUES
(1, 1, 'Preheat a medium non-stick frying pan over a medium heat.'),
(1, 2, 'In a blender, blend together all the ingredients until nice and smooth.'),
(1, 3, 'Pour 2 x ¼ cup mixture into the pan, forming small pancake circles.'),
(1, 4, 'After two minutes or when just golden, flip.'),
(1, 5, 'Cook for another 2 minutes or until done.'),
(1, 6, 'Set aside on a plate and repeat with the remaining pancake batter.'),
(1, 7, 'Serve with your favourite toppings.'),
(2, 1, 'In a large pot of boiling, salted water cook the linguini according to packet directions.'),
(2, 2, 'Meanwhile, in a nonstick frying pan, sauté the chicken until golden, 4 to 6 minutes.'),
(2, 3, 'Add the cream and reduce heat, add basil pesto and simmer for 5 minutes.'),
(2, 4, 'Add the linguini and toss to coat in the yummy sauce.');

CREATE TABLE ingredients (
        recipe_id INT NOT NULL,
        ingredient_number INT NOT NULL,
        ingredient_measure DOUBLE PRECISION NOT NULL,
        ingredient_name VARCHAR NOT NULL,
        PRIMARY KEY (recipe_id, ingredient_number),
        FOREIGN KEY (recipe_id) REFERENCES recipes (id)
);

INSERT INTO ingredients (recipe_id, ingredient_number, ingredient_measure, ingredient_name) VALUES
(1, 1, 0.5, ' ripe banana'),
(1, 2, 1, ' large eggs'),
(1, 3, 0.25, ' baking powder'),
(1, 4, 0.25, ' cup quick rolled oats'),
(2, 1, 100, 'g linguini'),
(2, 2, 125, 'g chicken breasts, chopped or chicken stir fry strips'),
(2, 3, 75, 'ml tub cream'),
(2, 4, 20, 'g basil pesto');