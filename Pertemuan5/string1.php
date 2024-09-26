<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt perspiciatis temporibus iste exercitationem omnis optio rem laudantium non, sint saepe quas unde nulla illum, facere ullam, nisi voluptates reiciendis praesentium!";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
