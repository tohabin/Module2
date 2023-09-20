<?php
//------------ Task 3-------------//

// function defination
function fibonacci(){
    $num1 = 0;
    $num2 = 1;
    echo "Fibonacci numbers up to 10: $num1 $num2 ";
    for($i=3; $i<=10; $i++){
        $num3 = $num1 + $num2;
        
        // validation
        if($num3 > 100){
            break;
        }
        
        echo "$num3 ";
        $num1 = $num2;
        $num2 = $num3;    
        
    }
}

// function call
fibonacci();


?>