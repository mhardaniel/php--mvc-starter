<?php

namespace Root\PhpStringSortMvc\Controllers;

use Root\PhpStringSortMvc\Models\SortStringByStrategy;

class SortStringController extends Controller {

    public function index() {

        $this->render('index', []);
    }

    public function sort() {
        try {
            $inputString = $_POST['input-string'];
            $inputStrategy = $_POST['input-strategy'];

            $error = $this->validations($inputString, $inputStrategy);
            if($error){
                $this->render('sort', [
                    'error' => $error,
                    'inputString' => $inputString,
                    'inputStrategy' => $inputStrategy,
                    'sortedString' => '',
                ]);
                exit;
            }

            $stringToArray = str_split($inputString);
            $sortedString = $inputStrategy === 'bubble-sort' ? SortStringByStrategy::bubbleSort($stringToArray) : SortStringByStrategy::quickSort($stringToArray);

            $this->render('sort', [
                'inputString' => $inputString,
                'inputStrategy' => $inputStrategy,
                'sortedString' => $sortedString,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public function validations(string $inputString, string $inputStrategy):string {

        if (!$inputString)
            return "Input field is required.";

        if (!ctype_alpha($inputString))
            return 'The input "'. $inputString. '" does not consist of all letters.';

        return '';

    }

}
