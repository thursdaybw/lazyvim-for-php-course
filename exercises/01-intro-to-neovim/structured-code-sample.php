<?php

// Example PHP class with indentation and comments
class SampleClass {
public function __construct() {
echo "Hello, Neovim!";
}

    public function doSomething($input) {
    if ($input > 10) {
echo "Input is greater than 10.";
    } else {
echo "Input is 10 or less.";
    }
    }

        public function badlyIndented() {
    echo "This line has bad indentation!";
        }
}

// Instantiate the class
$sample = new SampleClass();
$sample->doSomething(15);

