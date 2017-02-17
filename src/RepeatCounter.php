<?php

    class RepeatCounter{
        function CountRepeats($search_with, $search_through)
        {
            $result = 0;
            var_dump($search_with);
            for($i=0; $i<strlen($search_through) - strlen($search_with) + 1; $i++)
            {
                $potential_match = "";
                var_dump( $search_with." at "."i: ". $i ." ".$search_through[$i]);
                if ($search_with[0]==$search_through[$i])
                {
                    for($j = 0; $j<strlen($search_with); $j ++)
                    {
                        if($search_with[$j]==$search_through[$i + $j])
                        {
                            $potential_match .= $search_through[$i + $j];
                            var_dump( "i: ". $i . "j: ". $j." ".$search_through[$i + $j]  );
                        } else {
                            $potential_match = "";
                        }
                        var_dump($potential_match." | ".$search_with);
                        if($potential_match == $search_with)
                        {
                            var_dump("match Once: ". $search_with." at ".$i);
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
