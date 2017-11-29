<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
    for ($row = 0; $row < 9; $row++) {

        for ($col = 0; $col < 5; $col++) {
            $buttonBlue = 0;

            if ($row == 0 || $row == 4 || $row == 8) {
                $buttonBlue = 1;
            } elseif ($row > 0 && $row < 4 && $col == 0) {
                $buttonBlue = 1;
            } elseif ($row > 4 && $row < 9 && $col == 4) {
                $buttonBlue = 1;
            } else {
                $buttonBlue = 0;
            }

            if ($buttonBlue == 1) {
                echo "<button style='background-color: blue'>$buttonBlue</button>";
            } else {
                echo "<button>$buttonBlue</button>";
            }
        }
        echo "<br/>";
    }
?>
</body>
</html>