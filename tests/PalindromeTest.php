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

        function test_string_true()
        {
            $check_Palindrome = new Palindrome;
            $input = "hello olleh";

            $result = $check_Palindrome->test_Palindrome($input);

            $this->assertEquals(true, $result);
        }

        function test_string_false()
        {
            $check_Palindrome = new Palindrome;
            $input = "i want tacos";

            $result = $check_Palindrome->test_Palindrome($input);

            $this->assertEquals(false, $result);
        }

        function test_uppercase_true()
        {
            $check_Palindrome = new Palindrome;
            $input = "Hello olleH";

            $result = $check_Palindrome->test_Palindrome($input);

            $this->assertEquals(true, $result);
        }

        function test_uppercase_false()
        {
            $check_Palindrome = new Palindrome;
            $input = "Hello olleh";

            $result = $check_Palindrome->test_Palindrome($input);

            $this->assertEquals(false, $result);
        }

        function test_number_true()
        {
            $check_Palindrome = new Palindrome;
            $input = 101;

            $result = $check_Palindrome->test_Palindrome($input);

            $this->assertEquals(true, $result);
        }

        function test_number_false()
        {
            $check_Palindrome = new Palindrome;
            $input = 452;

            $result = $check_Palindrome->test_Palindrome($input);

            $this->assertEquals(false, $result);
        }

        function test_special_chars_true()
        {
            $check_Palindrome = new Palindrome;
            $input = "#$%%$#";

            $result = $check_Palindrome->test_Palindrome($input);

            $this->assertEquals(true, $result);
        }

        function test_special_chars_false()
        {
            $check_Palindrome = new Palindrome;
            $input = "!@#$";

            $result = $check_Palindrome->test_Palindrome($input);

            $this->assertEquals(false, $result);
        }

        function test_complex_string_true()
        {
            $check_Palindrome = new Palindrome;
            $input = "!Hello #42.24# olleH!";

            $result = $check_Palindrome->test_Palindrome($input);

            $this->assertEquals(true, $result);
        }

        function test_complex_string_false()
        {
            $check_Palindrome = new Palindrome;
            $input = "#@$ LKJSD sf3123";

            $result = $check_Palindrome->test_Palindrome($input);

            $this->assertEquals(false, $result);
        }

    }
?>
