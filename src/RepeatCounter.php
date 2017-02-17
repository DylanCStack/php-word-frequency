<?php

    class RepeatCounter{
        function CountRepeats($search_with, $search_through)
        {
            $result = 0;
            for($i=0; $i<strlen($search_through); $i++)
            {
                if($search_with[0]==$search_through[$i])
                {
                    $result += 1;
                    var_dump("match Once: ". $search_with." at ".$i);
                }
            }

            return $result;
        }
    }
?>
