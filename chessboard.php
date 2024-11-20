<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <style>
        .chess {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            grid-template-rows: repeat(8, 50px);
            border: 2px solid black;
            width: 400px;

        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
<div class="chess">
    <?php
    for ($row = 0; $row < 8; $row++) {
        for ($col = 0; $col < 8; $col++) {
            if ( ($row+$col) % 2 == 0) {
                echo "<div class='white'></div>";
            }
            else{
                echo "<div class='black'></div>";
            }

        }
    }
    ?>
</body>
</html>
