<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num'])) {
    $n = intval($_GET['num']);
    for ($i = 0; $i < $n; $i++) {
        echo Fibonacci($i) . " ";
    }
}

function Fibonacci(int $n): int
{
    $a = 0;
    $b = 1;

    for ($i = 0; $i <= $n; $i++) {
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }

    return $a;
}

?>
</body>
</html>