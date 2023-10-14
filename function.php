<?php
declare(strict_types=1);

function checkInput($input): bool
{
	return is_numeric($input) && $input>=0 && $input<125;
};

function printFilteredMovies($movies)
{
	foreach ($movies as $index => $movie)
	{
		echo ($index+1).". {$movie["title"]} {$movie["release_year"]}, {$movie["age_restriction"]}+. Rating - {$movie["rating"]}"."\n";
	}
}

function filteringMovies($movies, $age): array
{
	$filteredMovies= [];
	foreach ($movies as $movie)
	{
		if ($movie["age_restriction"]<=$age) {
			$filteredMovies[] = $movie;
		}
	};
	return $filteredMovies;
}
