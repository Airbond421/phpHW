<?php

declare(strict_types=1);

function checkAgeInput(string $input): bool
{
	define("MAX_LIFE_SPAN", 125);
	return is_numeric($input) && $input >= 0 && $input < MAX_LIFE_SPAN;
}

function printMovies(array $movies): void
{
	foreach ($movies as $index => $movie)
	{
		echo ($index + 1)
			. ". {$movie["title"]} {$movie["release_year"]}, {$movie["age_restriction"]}+. Rating - {$movie["rating"]}"
			. "\n";
	}
}

function filterMovies(array $movies, int $age): array
{
	$filteredMovies = [];
	foreach ($movies as $movie)
	{
		if ($movie["age_restriction"] <= $age)
		{
			$filteredMovies[] = $movie;
		}
	}

	return $filteredMovies;
}
