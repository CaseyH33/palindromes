<?php

    require_once "src/Palindrome.php";

    class PalindromeTest extends PHPUnit_Framework_TestCase
    {

        function test_one_letter()
        {
            $check_Palindrome = new Palindrome;
            $input = "a";

            $result = $check_Palindrome->test_Palindrome($input);

            $this->assertEquals(true, $result);
        }

        function test_one_word_true()
        {
            $check_Palindrome = new Palindrome;
            $input = "racecar";

            $result = $check_Palindrome->test_Palindrome($input);

            $this->assertEquals(true, $result);
        }

        function test_one_word_false()
        {
            $check_Palindrome = new Palindrome;
            $input = "taco";

            $result = $check_Palindrome->test_Palindrome($input);

            $this->assertEquals(false, $result);
        }
    }
