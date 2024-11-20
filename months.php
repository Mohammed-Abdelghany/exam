<?php

$current = date('n');
$previous = $current - 1;
if ($previous == 0) {
    $previous = 12;
}
echo $previous;


