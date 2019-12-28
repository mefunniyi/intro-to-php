 <?php


require 'task.php';
require 'functions.php';
require 'database/connection.php';
require 'database/querybuilder.php';


//require 'function.view.php';

$pdo = Connection::make();

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('todos');


require 'index.view.php';