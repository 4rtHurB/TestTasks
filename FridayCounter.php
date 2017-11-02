<?php

class FridayCounter
{
    protected $countFriday13 = 0;

    protected $beginYear, $endYear;

    /**
     * FridayCounter constructor.
     * @param $beginYear
     * @param $endYear
     * @throws Exception
     */
    public function __construct($beginYear, $endYear) {
        if($beginYear <= 0 || $endYear <= 0)
            throw new Exception('The year could not be negative or null');
        if($beginYear > $endYear)
            throw new Exception('Begin year could not be bigger than end year');

        $this->beginYear = $beginYear;
        $this->endYear = $endYear;
    }

    /**
     * toString handler
     * @return string
     */
    public function __toString() {
        return strval($this->countFriday13);
    }

    /**
     *  Searches and counts all fridays 13 in leap years
     */
    private function searchFriday13() {
        for($year = $this->beginYear; $year <= $this->endYear; $year++) {
            for($month = 1; $month <= 12; $month++) {
                $date = mktime(0, 0, 0, $month, 13, $year);

                $this->countFriday13 += ( 5 == date('w', $date) &&
                    ( !($year % 4)  || !($year % 400) )) ? 1 : 0;
            }
        }
    }

    /**
     * Return the count of all fridays 13 in leap year
     * @return int
     */
    public function getCountOfFriday() {
        $this->searchFriday13();
        return $this->countFriday13;
    }
}

?>