<?php

use PHPUnit\Framework\TestCase;
use Root\PhpStringSortMvc\Controllers\SortStringController;
use Root\PhpStringSortMvc\Models\SortStringByStrategy;

class SortStringTest extends TestCase
{
    public function test_that_input_is_required()
    {
        $inputString = '';
        $inputStrategy = '';

        $obj = new SortStringController();
        $error = $obj->validations($inputString, $inputStrategy);

        $this->assertSame('Input field is required.', $error);
    }

    public function test_that_input_consist_of_all_letters()
    {
        $inputString = 'asdf asdf';
        $inputStrategy = '';

        $obj = new SortStringController();
        $error = $obj->validations($inputString, $inputStrategy);

        $this->assertSame('The input "'. $inputString. '" does not consist of all letters.', $error);
    }

    public function test_that_input_string_is_sorted_using_bubble_sort_strategy()
    {
        $expectedOutput = 'adfs';
        $sortedString = SortStringByStrategy::bubbleSort(str_split('asdf'));

        $this->assertEquals($expectedOutput, $sortedString);
    }

    public function test_that_input_string_is_sorted_using_quick_sort_strategy()
    {
        $expectedOutput = 'adfs';
        $sortedString = SortStringByStrategy::quickSort(str_split('asdf'));

        $this->assertEquals($expectedOutput, $sortedString);
    }
}
