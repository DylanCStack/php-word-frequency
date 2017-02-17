<?php
    require_once "src/RepeatCounter.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_single_char()
        {
            $counter = new RepeatCounter;
            $input1 = "c";
            $input2 = "catastrophe";

            $result = $counter->CountRepeats($input1, $input2);
            $this->assertEquals(1, $result);

        }

        function test_multiple_of_char()
        {
            $counter = new RepeatCounter;
            $input1 = "n";
            $input2 = "concatenation";

            $result = $counter->CountRepeats($input1, $input2);
            $this->assertEquals(3, $result);
        }
    }
?>
