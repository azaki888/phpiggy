<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
$myapps = include __DIR__ . '/../src/App/bootstrap.php';


$myapps->run();