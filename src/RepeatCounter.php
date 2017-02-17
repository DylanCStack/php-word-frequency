<?php

    class RepeatCounter{
        function CountPartialRepeats($search_with, $search_through)
        {
            $result = 0;
            $search_with = strtoupper($search_with);
            $search_through = strtoupper($search_through);

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
        function CountRepeats($search_with, $search_through)
        {
            $result = 0;
            $search_with = strtoupper($search_with);
            $search_through = explode(" ",strtoupper($search_through));



            foreach ($search_through as $word) {
                $word = str_replace(".","", $word);
                $word = str_replace('"',"", $word);
                $word = str_replace(",","", $word);
                $word = str_replace("'","", $word);
                $word = str_replace("(","", $word);
                $word = str_replace(")","", $word);
                $word = str_replace("[","", $word);
                $word = str_replace("]","", $word);
                var_dump($word);

                if($word == $search_with){
                    var_dump("MATCH: ".$word);
                    $result ++;
                }
            }
            return $result;
        }
    }
?>
