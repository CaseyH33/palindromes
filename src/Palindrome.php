<?php

    class Palindrome
    {
        function test_Palindrome($input)
        {
            if($input == strrev($input)) {
                return true;
            }
        }
    }
?>
