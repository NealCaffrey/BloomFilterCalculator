# BloomFilterCalculator

[![Latest Stable Version](http://poser.pugx.org/nealcaffrey/bloomfiltercalculator/v)](https://packagist.org/packages/nealcaffrey/bloomfiltercalculator) 
[![Total Downloads](http://poser.pugx.org/nealcaffrey/bloomfiltercalculator/downloads)](https://packagist.org/packages/nealcaffrey/bloomfiltercalculator) 
[![Latest Unstable Version](http://poser.pugx.org/nealcaffrey/bloomfiltercalculator/v/unstable)](https://packagist.org/packages/nealcaffrey/bloomfiltercalculator) 
[![License](http://poser.pugx.org/nealcaffrey/bloomfiltercalculator/license)](https://packagist.org/packages/nealcaffrey/bloomfiltercalculator) 
[![PHP Version Require](http://poser.pugx.org/nealcaffrey/bloomfiltercalculator/require/php)](https://packagist.org/packages/nealcaffrey/bloomfiltercalculator)

# Installation

```
composer require nealcaffrey/bloomfiltercalculator
```

# Examples

```
use Nealcaffrey\BloomFilterCalculator;

$bloom = new BloomFilterCalculator();
$res = $bloom->calcFunctions(1000000, 0.01, 2);
echo $res;

```