<?php

$attributs =[
    "color" => "red",
    "align" => "center",
];


$html = function ($tag, $content) use ($attributs) {
    echo "<".$tag." "."color"." ".$attributs["color"].">".$content."</".$tag.">";
};
$html("p", "bonjour");


?>