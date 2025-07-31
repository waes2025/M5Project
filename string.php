<?php

function countVow($strings) {
    // Convert the string to lowercase to handle case-insensitivity
    $strings = strtolower($strings);
    
    // Use count_chars() to get the frequency of each character
    $charCounts = count_chars($strings, 1);
    
    // List of vowels
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    
    // Initialize vowel count
    $vowelCount = 0;
    
    // Iterate through the list of vowels and sum their counts
    foreach ($vowels as $vowel) {
        $ascii = ord($vowel);
        if (isset($charCounts[$ascii])) {
            $vowelCount += $charCounts[$ascii];
        }
    }
    
    return $vowelCount;
}

// Define the original string
$strings = ["Hello", "World", "PHP", "Programming"];

for ($i=0; $i < 4; $i++) { 
    $str = $strings[$index=$i];
    $strr = strrev($strings[$index=$i]);
    $strv = countVow($strings[$index=$i]);
    print_r("Original String: ". $str ." Vowel Count: " . $strv . " Reversed String: ". $strr . "\n");
}