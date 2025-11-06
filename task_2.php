<?php
// 1. Create array
$expenses = [
    "food" => 400,
    "transport" => 300,
    "other" => 500
];

// 2. Array functions
array_push($expenses, 200); // add expense
$last = array_pop($expenses); // remove last value
$extra = ["entertainment" => 250];
$merged = array_merge($expenses, $extra);

echo "Array Sum: " . array_sum($expenses) . "<br>";

// 3. explode & implode
$expString = "100,200,300";
$expArray = explode(",", $expString);
$newString = implode(" - ", $expArray);

echo "Exploded Array: ";
print_r($expArray);
echo "<br>Imploded String: $newString<br>";

// 4. String functions
$text = "expense report";
echo strtoupper($text) . "<br>";
echo strlen($text) . "<br>";
echo substr($text, 0, 7) . "<br>";
echo str_replace("report", "details", $text) . "<br>";

// 5. Write file
$file = "expenses.txt";
file_put_contents($file, "Food: 400\nTransport: 300\nOther: 500\n");

// 6. Append & read
file_put_contents($file, "New Expense: 200\n", FILE_APPEND);

echo "<pre>" . file_get_contents($file) . "</pre>";
?>
