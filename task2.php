<?php
//-----------Task 2---------------//

// function defination
function MyFunction(){
    for($i=1; $i<50; $i++){
        if($i%5 == 0){
continue;
        }
        echo "$i ";
    }
}

// function call
MyFunction();

?>