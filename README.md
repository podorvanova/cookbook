# Cookbook Project

Cookbook is a simple website for food recipes. It consists of two web-pages: index.php and recipe.php. The recipe.php is a dynamic page which changes its
content depending on the content of the database. At the moment only two recipes are available, but more can be added by inserting them into the database.
Most links (Collections, Privacy Policy, Terms and Conditions etc.) are mock ups.

## Technologies

A list of technologies used within the project: HTML, CSS, Bootstrap for the frontend and PHP, PostgreSQL for the backend.

## Running

For your convinience you can find the deployed website on heroku: https://cookbook-maria.herokuapp.com/ (it might take a little while to load). Another option is to run
the project locally but following instructions below.

## Installation

1. Install PostgreSQL and create a separate database called `cookbook`.
2. Execute `data.sql` in the `cookbook` database in order to create the necessary tables and to populate them with sample data.
3. Make sure that `DATABASE_URL` environment variable points to `cookbook` database (e.g. `DATABASE_URL=postgresql://cookbook:cookbook@localhost:5432/cookbook` if you are running with local PostgreSQL).
4. Run PHP server in the project root (where `index.php` is).

## Resources

Images and text sources were taken from https://www.iga.com.au/recipes/.
