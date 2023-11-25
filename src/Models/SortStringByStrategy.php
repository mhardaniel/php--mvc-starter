<?php

namespace Root\PhpStringSortMvc\Models;

class SortStringByStrategy {

    public static function quickSort(array $inputString = []):string {
        try {
            $obj = new QuickSort();
            $obj->quickSort($inputString, 0, sizeof($inputString) - 1);

            return implode("", $inputString);
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public static function bubbleSort(array $inputString = []):string {
        try {
            for ($i = count($inputString) - 1; $i > 0; $i--) {
                $swap = false;

                for ($j = 0; $j < $i; $j++) {
                    if ($inputString[$j] > $inputString[$j + 1]) {
                        $temp = $inputString[$j];
                        $inputString[$j] = $inputString[$j+1];
                        $inputString[$j+1] = $temp;
                        $swap = true;
                    }
                }

                if (!$swap) break;
            }

            return implode("",$inputString);
        } catch (\Throwable $th) {
            throw $th;
        }

    }
}
