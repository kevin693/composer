<?php

require "../vendor/autoload.php";

$hello = new \App\Wcs\Hello();

echo \App\Wcs\Hello::talk();
echo "<br/>";
echo \HelloWorld\SayHello::world();
