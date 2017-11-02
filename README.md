# TestTasks
This repository contains the small training programs. Created for shows the my skills of PHP programing.

# Usage
First include class SquareRoot:
include 'SquareRoot.php';

Use try...catch block for checking the errors:

try {

    $sqrt = new SquareRoot(132, 5); //Create new object for using SquareRoot and give 2 parametrs:
    //number for root(132) and
    //number of decimal places(5)

    echo $sqrt->getResult(); //Return the result of calculations
    
} catch (Exception $exc) {
    echo $exc->getMessage();
}
