# TestTasks
This repository contains the small training programs. Created for shows the my skills of PHP programing.

## Usage SquareRoot

#### First include class SquareRoot:
```php
include 'SquareRoot.php';
```

#### Use try...catch block for checking the errors:
```php
try {
    $sqrt = new SquareRoot(132, 5); //Create new object for using SquareRoot and give 2 parametrs:
    //number for root(132) and
    //number of decimal places(5)

    echo $sqrt->getResult(); //Return the result of calculations
} catch (Exception $exc) {
    echo $exc->getMessage(); //Shows the message of error
}
```

## Usage FridayCounter

#### First include class FridayCounter:
```php
include 'FridayCounter.php';
```

#### Use try...catch block for checking the errors:
```php
try {
    $friday = new FridayCounter(2015,2017); //Create new object for using FridayCounter and give 2 parametrs:
    //begin year(2015) and
    //end year(2017)
    
    echo $friday->getCountOfFriday(); //Return the result of searching Friday 13 in leap year
} catch (Exception $exc) {
    echo $exc->getMessage(); //Shows the message of error
}
```

