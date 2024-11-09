<?php
    $n=121;
    $m=0;
    $rev=0;
    $temp=$n;
    
    while($n>0)
    {
        $m=$n%10;
        $rev=($rev*10)+$m;
        $n=(int)($n/10);
    }
        
        if($temp==$rev)
        {
            echo "Number is pelindrom";
        }
        else 
        {
            echo "Number is not pelindrom";
        }
    
?>
