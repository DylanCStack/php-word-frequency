<?php

    class RepeatCounter{
        function CountRepeats($search_with, $search_through)
        {
            for($i=0; $i<strlen($search_through); $i++)
            {
                if($search_with[0]==$search_through[$i])
                {
                    return 1;
                }
            }
        }
    }
?>
