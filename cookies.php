<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color=$_POST['color'];
    setcookie('color', $color, time() + (10));
    if(isset($_COOKIE['color'])){
        $color=$_COOKIE['color'];
        echo "<style> body{background-color: $color} </style>";
    }
}
?>
<!DOCTYPE>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cookie Cookie</title>
    </head>
<body>
<div>
    <form method="POST" action="">
        <label>select color
    <input name="color" type="color" >
        </label>
        <input type="submit">submit
    </form>

</div>
</body>
</html>