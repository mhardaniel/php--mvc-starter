<?php

namespace Root\PhpStringSortMvc\Models;

class QuickSort {

    public function quickSort(array &$arr, int $low, int $high) {
        if($low < $high) {
            $pivot = $this->partition($arr, $low, $high);
            $this->quickSort($arr, $low, $pivot);
            $this->quickSort($arr, $pivot + 1, $high);
        }
    }

    private function partition(array &$arr, int $low, int $high): int {

        $pivot = $arr[$low];
        $i = $low;
        $j = $high;

        while($i < $j) {
            while($arr[$i] <= $pivot && $i < $high) {
                $i++;
            }
            while($arr[$j] > $pivot && $j > $low) {
                $j--;
            }

            if($i < $j) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }

        $arr[$low] = $arr[$j];
        $arr[$j] = $pivot;

        return $j;
    }

}
