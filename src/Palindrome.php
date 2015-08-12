<?php

    class Palindrome
    {
        function test_Palindrome($input)
        {

            //Below is the code to have this work the easy way
        /*    if($input == strrev($input)) {
                return true;
            } */

            //This is considered to be the hard way for this function to work without using strrev
            $input_array = str_split($input);
            $reversed_array = array();
            
            for($i = sizeof($input_array)-1; $i >= 0; $i--) {
                array_push($reversed_array, $input_array[$i]);
            }

            if($input_array == $reversed_array) {
                return true;
            }
        }
    }
?>
