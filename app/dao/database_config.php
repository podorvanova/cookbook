<?php
$db_handle = pg_connect(getenv("DATABASE_URL"));

if (!$db_handle) {
    throw new Exception('Connection attempt failed.');
}
