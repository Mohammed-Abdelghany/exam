<?php

$sentence = "Hello 3bghany";
$strings = "3bghanyy";

if (preg_match("/$strings/", $sentence)) {
    echo "The string contains the word '$strings'.";
} else {
    echo "The string does not contain the word '$strings'.";
}

