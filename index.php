<?php
declare(strict_types=1); // Blocks silent type coercion; enforces exact matches
$start = microtime(true); // Captures timestamp (simulates request arrival)
echo "1. Request initiated.\n";

function process(?string $payload): string {
    return "2. Processed: " . strtoupper($payload); // Returns data, doesn't print
}

echo process(null); // Prints the returned string
echo "\n3. Response sent. All variables destroyed.";