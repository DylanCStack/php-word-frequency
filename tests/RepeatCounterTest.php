<?php
    require_once "src/RepeatCounter.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_single_char()
        {
            $counter = new RepeatCounter;
            $input1 = "c";
            $input2 = "catastrophe";

            $result = $counter->CountPartialRepeats($input1, $input2);
            $this->assertEquals(1, $result);

        }

        function test_multiple_of_char()
        {
            $counter = new RepeatCounter;
            $input1 = "n";
            $input2 = "concatenation";

            $result = $counter->CountPartialRepeats($input1, $input2);
            $this->assertEquals(3, $result);
        }
        function test_find_one_word()
        {
            $counter = new RepeatCounter;
            $input1 = "lucky";
            $input2 = "You feelin' lucky, punk?";

            $result = $counter->CountPartialRepeats($input1, $input2);
            $this->assertEquals(1, $result);
        }
        function test_find_multiple_of_word()
        {
            $counter = new RepeatCounter;
            $input1 = "wasted";
            $input2 = "Almost nothing was more annoying than having our wasted time wasted on something not worth wasting it on.";

            $result = $counter->CountPartialRepeats($input1, $input2);
            $this->assertEquals(2, $result);
        }
        function test_find_only_full_words()
        {
            $counter = new RepeatCounter;
            $input1 = "word";
            $input2 = "word word wordy wordy words. word.";
            $input3 = false;

            $result = $counter->CountRepeats($input1, $input2);
            $this->assertEquals(3, $result);
        }
    }
?>
