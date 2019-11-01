<?php

namespace MyArray;

/**
 * Notes:
 * array[] - vector (one-dimensional array)
 * array[][] - matrix (multidimensional array)
 *
 * prefix 'my' - method must be implemented without predefined functions.
 */
interface MyArrayInterface
{
    /**
     * Check if array is empty.
     * @param array $array[]
     *
     * @return boolean
     */
    public function isEmpty(array $array);

    /**
     * Get summary of all elements.
     * @param array $array[]
     *
     * @return int
     */
    public function summary(array $array);

    /**
     * Get summary of min and max elements.
     * @param array $array[]
     *
     * @return int
     */
    public function summaryOfMinAndMax(array $array);

    /**
     * Revert array without predefined functions.
     * @param array $array[]
     *
     * @return array
     */
    public function myRevert(array $array);

    /**
     * Sort array by DESC (from max to min)
     * @param array $array[]
     *
     * @return array
     */
    public function mySort(array $array);

    /**
     * Get all elements as string with '-' seperator.
     * ex: [1,2,3] => "1-2-3"
     * Implementation must be with predefined functions.
     * @param array $array[]
     *
     * @return string
     */
    public function getItemsChain(array $array);

    /**
     * Put word in the middle of array.
     * ex: [1,2,3,4,5,6,7,8] => [1,2,F,R,O,G,7,8]
     * Implementation must be with predefined functions.
     * @param array $array[]
     * @param string $word
     *
     * @return array
     */
    public function putWordInTheMiddle(array $array, string $word);

    
}