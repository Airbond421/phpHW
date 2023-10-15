<?php

declare(strict_types=1);

require_once "function.php";
/** @var array $movies */
require_once "movies.php";

$input = readline("Enter your age: ");

if (!checkAgeInput($input))
{
	exit("Not the correct age has been introduced.");
}

$age = (int)$input;

$filteredMovies = filterMovies($movies, $age);

printMovies($filteredMovies);
