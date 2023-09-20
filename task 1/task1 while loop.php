<?php
//-------- task 1--------------//

// function defination
function PrintCustomNumbers(int $start, int $end, int $step)
{
    // intialization
    $outputString = "";


    //parameter validation
    $isValid = false;
    if ($start < $end) {
        if ($step > 0) {
            $isValid = true;
        } else {
            $isValid = false;
            $outputString = "Step number must be greater than 0";;
        }
    } else {
        $isValid = false;
        $outputString = "Start number must be smaller than end number";;
    }



    if ($isValid) {
        // initialize
        $outputString = "Start: $start, End: $end, step: $step, Result: ";

        // calculation
        $stepCounter = 0;
        $isFirstStep = true;
        $i = $start-1;
        while ($i <= $end) {
            $stepCounter++;
            $i++;
            // odd validation
            if ($i % 2 != 0) {
                continue;
            }

            //step validation
            if ($stepCounter <= $step && !$isFirstStep) {
                continue;
            } else {
                // ok ! geting number
                $outputString .= "$i ";
                $stepCounter = 1;
                $isFirstStep = false;
            }

            
        }
    }
    // output
    echo $outputString;
}

// function call
PrintCustomNumbers(1, 20, 2);
