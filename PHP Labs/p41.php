<?php
    $percentage=81;
    switch($percentage)
    {
        case ($percentage<40):
         echo "Fail";
            break;
            
        case ($percentage >40 && $percentage<50):
            echo "Pass Class";
            break;
        
        case ($percentage >50 && $percentage<60):
            echo "Second Class";
            break;
            
        case ($percentage >60 && $percentage<70):
            echo "First Class";
            break;
            
        case ($percentage >70):
            echo "Distination";
            break;
    }
?>
