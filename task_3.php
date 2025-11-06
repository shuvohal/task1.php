<?php
session_start();

// 1. Form inputs
if(isset($_POST['submit'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['budget'] = $_POST['budget'];
}

if(isset($_POST['delete'])) {
    session_destroy();
    header("Location: task3.php");
}

// 2. Show session data
if(isset($_SESSION['name'])) {
    echo "Welcome, {$_SESSION['name']}! Your budget is {$_SESSION['budget']}<br>";
}
?>

<form method="post">
    Name: <input type="text" name="name" required><br>
    Budget: <input type="number" name="budget" required><br>
    <button name="submit">Submit</button>
</form>

<form method="post">
    <button name="delete">Delete Session</button>
</form>

<?php
// 3. Recursive function
function sumRecursive($arr, $i = 0){
    if($i == count($arr)) return 0;
    return $arr[$i] + sumRecursive($arr, $i + 1);
}
echo "Recursive Sum: " . sumRecursive([10,20,30,40]) . "<br>";

// 4. Callback discount function
function applyDiscount($amount, $discountCallback){
    return $discountCallback($amount);
}

$finalAmount = applyDiscount(1000, function($value){
    return $value * 0.90;
});
echo "After Discount: $finalAmount<br>";

// 5. Division with try-catch
function divide($a, $b){
    try {
        if($b == 0) throw new Exception("Cannot divide by zero!");
        return $a / $b;
    } catch (Exception $e) {
        return $e->getMessage();
    } finally {
        echo "<br>Operation Completed<br>";
    }
}
echo divide(10, 2);
?>
