<?php

require './vendor/autoload.php';

use NealCaffrey\BloomFilterCalculator;

$calc = new BloomFilterCalculator();

//calc size
$size = $calc->calcSize(30000, 0.001);
echo $size;

