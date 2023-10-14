<?php

declare(strict_types=1);

require "function.php";
/** @var array $movies */
require "movies.php";

$input = readline("Enter your age: ");

if (!checkInput($input))
{
	exit("Not the correct age has been introduced.");
}

$age = $input;

$filteredMovies = filteringMovies($movies, $age);

printFilteredMovies($filteredMovies);
