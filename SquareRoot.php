<?php

class SquareRoot
{
    protected $num, $dec, $prec, $res;

    /**
     * SquareRoot constructor.
     * @param $number
     * @param $decimal
     * @param $precision
     * @throws Exception
     */
    public function __construct($number, $decimal, $precision) {
        if($number < 0 || is_null($number))
            throw new Exception('Unable to find the root square of a negative number or null');

        if($decimal < 0)
            throw new Exception('Unable to set negative number of decimal places');

        if($precision < 0)
            throw new Exception('Unable to set negative or null precision for calculation');

        $this->num = $number;
        $this->dec = isset($decimal) ? $decimal : 3;
        $this->prec =  isset($precision) ? $precision : 0.01;
    }

    /**
     * toString handler
     * @return string
     */
    public function __toString() {
        return strval( round($this->res, $this->dec) );
    }

    /**
     * Get the result of calculations
     * @return float|int
     */
    public function getResult() {
        if($this->num == 0)
            return 0;

        $this->extract(1);
        return round($this->res, $this->dec);
    }

    /**
     * Extract square root
     * @param $root
     * @return float|int
     */
    public function extract($root) {
        $newRoot = ($root + $this->num / $root) / 2;

        if(abs($root - $newRoot) < $this->prec) {
            $this->res = $newRoot;
            return $this->res;
        }

        $this->extract($newRoot);
    }
}

?>