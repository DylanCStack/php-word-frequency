<?php

    class RepeatCounter{
        function CountRepeats($search_with, $search_through)
        {
            $result = 0;
            
            for($i=0; $i<strlen($search_through) - strlen($search_with) + 1; $i++)
            {
                $potential_match = "";
                
                if ($search_with[0]==$search_through[$i])
                {
                    for($j = 0; $j<strlen($search_with); $j ++)
                    {
                        if($search_with[$j]==$search_through[$i + $j])
                        {
                            $potential_match .= $search_through[$i + $j];
                            
                        } else {
                            $potential_match = "";
                        }
                        
                        if($potential_match == $search_with)
                        {
                            
                            $result ++;
                            $potential_match = "";
                        }

                    }

                } else {
                    $potential_match = "";
                }
            }

            return $result;
        }
    }
?>
