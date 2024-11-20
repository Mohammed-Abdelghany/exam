
<?php
#(1)
//$n = 5;
//
//for ($i = 1; $i <= $n; $i++) {
//    for ($j = $i; $j < $n; $j++) {
//        echo "&nbsp;";
//    }
//
//    for ($j = 1; $j <= $i; $j++) {
//        echo "*&nbsp;";
//    }
//    echo "<br>";
//}
//for ($i = $n - 1; $i >= 1; $i--) {
//    for ($j = $n; $j > $i; $j--) {
//        echo "&nbsp;";
//    }
//    for ($j = 1; $j <= $i; $j++) {
//        echo "*&nbsp;";
//    }
//    echo "<br>";
//}
//
###############################################################################
#(2)
//$n = 5;
//
//for ($i = 1; $i <= $n; $i++) {
//
//
//    for ($j = 1; $j <= $i; $j++) {
//        echo "*";
//    }
//    echo "<br>";
//}
//for ($i = $n - 1; $i >= 1; $i--) {
//
//    for ($j = 1; $j <= $i; $j++) {
//        echo "*";
//    }
//    echo "<br>";
//}

###############################################################################
#(3)
$n = 5;

for($i = 1; $i <= $n; $i++){
    if(!($i%2==0)) {


        echo str_repeat("*", $i);
        echo "<br>";
    }

}
for($i = $n-1; $i >0; $i--){
    if(!($i%2==0)){

        echo str_repeat("*",$i);
        echo "<br>";
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <style>
    *{

        font-size: 40px;
    }

    </style>
</head>
<body>
<div class="star"



</body>
</html>







