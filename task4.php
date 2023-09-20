<?php
//----------- Task 4-------------//

// function defination
function fibonacci(int $MAX){

    // initialization
    $num1 = 0;
    $num2 = 1;

    // paramter validation
    if($MAX <= 0 ){
        echo "Please insert value  greater than equal 1";
        return;
    }
    
    if($MAX == 1){
        echo "Fibonacci numbers: $num1";
        return;
    }
    
    if($MAX == 2){
        echo "Fibonacci numbers: $num1 $num2";
        return;
    }
    
    
    echo "Fibonacci numbers: $num1 $num2 ";
    for($i=3; $i<=$MAX; $i++){
        $num3 = $num1 + $num2;
        echo "$num3 ";
        $num1 = $num2;
        $num2 = $num3;    

    }
}


// function call
fibonacci(15);

?>


?>