<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        X: <input type="text" name="num1" />
		Y: <input type="text" name="num2" />
        Z: <input type="text" name="num3" />
		<input type="submit" />
    </form>
    <?php
        if (isset($_GET['num1']) && isset($_GET['num2']) &&isset($_GET['num3'])) {
            $x = floatval($_GET['num1']);
            $y = floatval($_GET['num2']);
            $z = floatval($_GET['num3']);
            if ($x * $y * $z >= 0) {
                echo "Positive";
            } else {
                echo "Negative";
            }
        }
    ?>
</body>
</html>