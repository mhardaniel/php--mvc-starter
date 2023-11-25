<?php

namespace Root\PhpStringSortMvc\Controllers;

class Controller {
    protected function render(string $view, array $data = []) {
        extract($data);

        include "src/Views/$view.php";
    }
}
