<?php
$error = "";
$x = "";
$y = "";
$result = "";
if (isset($_GET['operation'])) {
    $x = $_GET['num1'];
    $y = $_GET['num2'];
    $op = $_GET['operation'];

    if (is_numeric($x) && is_numeric($y)) {

        switch ($op) {
            case 'add':
                $result = $x + $y;
                break;
            case 'sub':
                $result = $x - $y;
                break;
            case 'mul':
                $result = $x * $y;
                break;
            case 'div':
                $result = $x / $y;
                break;
        }
    } else {
        $error = "Enter Number First";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CALCULATOR</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
    <h3<?= $error ?> </h3>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <!-- Number 1-->

        <div>
            <label for="num1"> Enter the First Number </label>
            <input type="number" name="num1" id="num1" value="<?= $x ?>">
        </div>

        <!-- Number 2-->
        <div>
            <label for="num2"> Enter the Second Number </label>
            <input type="number" name="num2" id="num2" value="<?= $y ?>">
        </div>

        <!-- Result-->

        <div>
            <label for="result"> Result </label>
            <input type="text" id="result" value="<?= $result ?>" disabled>
        </div>

        <!--operation-->

        <div>

            <input type="submit" value="add" name="operation">
            <input type="submit" value="sub" name="operation">
            <input type="submit" value="mul" name="operation">
            <input type="submit" value="div" name="operation">
        </div>
        </form>

</body>

</html>