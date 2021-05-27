<?php

$a = 1;
$b = 2;

echo json_encode([
	"code" => "200",
	"message" => "how are you?",
    "sum" => $a + $b,
]);