<?php 
declare(strict_types=1);

// Simulating raw user input
$rawAge = "25"; // comes from $_GET['age'] or $_POST['age']

// safe conversion: explicit cast + validation
$age = filter_var($rawAge, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 120]]);

if ($age === false) {
	echo "Provided age value is invalid.";
	exit(1); //Stop execution and return error status
}

echo "Validated age: $age";