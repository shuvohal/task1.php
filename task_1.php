
<?php
// 1. Create constants for app name and author
define("APP_NAME", "Expense Calculator ");
define("AUTHOR", "Shuvo Halder");

// 2. Print constants
echo APP_NAME . "<br>";
print AUTHOR . "<br>";
printf("Application: %s | Author: %s <br>", APP_NAME, AUTHOR);

// 3. Create variables for expenses
$food = 1000;
$transport = 100;
$other = 200;

// 4. Calculate total & average
$total = $food + $transport + $other;
$average = $total / 3;

echo "Total Expense: $total <br>";
echo "Average Expense: $average <br>";

// 5. Budget check
 if($total>1000){
    echo "budget is over <br>";
 }else{
    echo "everything is ok <br>";
 }

// 6. Switch case for expense range message
switch(true) {
    case ($total > 1500):
        echo "High Expenses<br>";
        break;
    case ($total > 1000):
        echo "Moderate Expenses<br>";
        break;
    default:
        echo "Low Expenses<br>";
}

// 7. Function to calculate total expense
function calcTotal($f, $t, $o){
    return $f + $t + $o;
}

// 8. Function to check budget
function checkBudget($amount){
    return ($amount > 1000) ? "Budget Exceeded" : "Within Budget";
}

echo "Calculated Total: " . calcTotal($food, $transport, $other) . "<br>";
echo "Budget Status: " . checkBudget($total);
?>
