<?php
/**
 * @author NealCaffrey <https://github.com/NealCaffrey/BloomFilterCalculator>
 */

namespace NealCaffrey;

class BloomFilterCalculator
{
    /**
     * calculator number of items in the filter
     * @param float $probability
     * @param float $functions
     * @param int $size
     * @return false|float
     */
    public function calcCount($probability = 0.00, $functions = 0.00, $size = 0)
    {
        return ceil($size / (-$functions / log(1 - exp(log($probability) / $functions))));
    }

    /**
     * calculator probability of false positives
     * @param $count
     * @param $functions
     * @param $size
     * @return float|int
     */
    public function calcError($count, $functions, $size)
    {
        return pow(1 - exp(-$functions / ($size / $count)), $functions);
    }

    /**
     * calculator number of hash functions
     * @param int $number
     * @param float $probability
     * @param int $precision
     * @return float
     */
    public function calcFunctions($number = 0, $probability = 0.00, $precision = 2)
    {
        $size = $this->calcSize($number, $probability);
        return round(($size / $number) * log(2), $precision);
    }

    /**
     * calculator number of bits
     * @param int $number
     * @param float $probability
     * @return false|float
     */
    public function calcSize($number = 0, $probability = 0.00)
    {
        return ceil(($number * log($probability)) / log(1 / pow(2, log(2))));
    }
}