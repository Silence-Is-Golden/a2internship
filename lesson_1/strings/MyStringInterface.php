<?php

namespace MyString;

/**
 *
 */
interface MyStringInterface
{
    /**
     * Uppercase each word into string
     * @param string $string
     *
     * @return string
     */
    public function uppercaseWords(string $string);

    /**
     * Get the number of occurrences of a substring in a string.
     * @param string $subString
     * @param string $string
     *
     * @return int
     */
    public function subStringsCount(string $subString, string $string);
}