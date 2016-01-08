<?php

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "465213");
define("DATABASE", "controle_estoque");

$pdo = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
