DROP SCHEMA public CASCADE;
CREATE SCHEMA public;

CREATE TABLE recipes (
        id serial PRIMARY KEY,
        name VARCHAR UNIQUE NOT NULL,
        description VARCHAR NOT NULL,
        image_path VARCHAR NOT NULL
);

INSERT INTO recipes (id, name, description, image_path) VALUES
(1, 'Banana Pancakes', 'It’s true, the WORLD loves pancakes.
                        No more so than on Tuesday before lent, commonly referred to as Shrove Tuesday or Pancake Tuesday here in Australia.
                        This is not your traditional pancake recipe, but instead a recipe that is high in fibre, protein, vitamins and minerals.', 'banana-pancakes.jpg'),
(2, 'Pesto Chicken Linguini', 'This delicious pesto & chicken linguini will warm you up on these Winter nights!', 'pesto-chicken-linguini.jpeg');
