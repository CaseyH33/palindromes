<?php

    require_once "src/Palindrome.php";

    class PalindromeTest extends PHPUnit_Framework_TestCase
    {

        function test_one_letter()
        {
            $test_Palindrome = new Palindrome;
            $input = "a";

            $result = $test_RockPaperScissors->play_rockPaperScissors($input);

            $this->assertEquals(true, $result);
        }
    }
