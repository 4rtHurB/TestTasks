<?php

/*

//первая "пятница 13" в 21 веке: 13.04.2001, от неё и пляшем

//число дней в текущем месяце
const pp: array [1..12] of byte = (31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

var m, y, n, k: integer;

begin
  n := 0; //счётчик дней
  k := 0; //пока нет пятниц 13
  m := 4; //начинаем от 04 месяца 2001 года
  for y := 2001 to 3000 do //цикл по годам
    begin
      while m <= 12 do //цикл по месяцам
        begin
          n := n mod 7;
          if n = 0 then k := k + 1; //если счётчик дней делится нацело на 7, то это одна из пятниц 13
          n := n + pp[m]; //прибавляем к счётчику число дней в текущем месяце
          if (m = 2) and (y mod 4 = 0) then n := n + 1; //если текущий месяц февраль и год високосный, добавляем ещё один день
          m := m + 1 //следующий месяц
        end;
      m := 1 //январь следующего года
    end;
  writeln('Count of "Friday 13" in 2001..3000: ', k);
  readln
end.
 * */
class FridayCounter
{
    static protected $daysOfMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    protected $countFr13 = 0;

    protected $beginYear, $endYear;

    public function __construct($beginYear, $endYear) {
        $this->beginYear = $beginYear;
        $this->endYear = $endYear;
    }

    private function funk() {
        $day = 0;

        for($year = $this->beginYear; $year <= $this->endYear; $year++) {
            for($month = 1; $month <= 12; $month++) {
                $this->countFr13 += !($day % 7) ? 1 : 0;

                $day += ( $month == 2 && !($year % 4) )
                    ? self::$daysOfMonth[$month] + 1
                    : self::$daysOfMonth[$month];
            }
        }
    }

    public function getCountOfFriday() {
        $this->funk();
        return $this->countFr13;
    }

}

?>