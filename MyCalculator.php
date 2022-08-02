<?php
require 'Calculator.html';
class MyCalculator
{
    private $FirstNumber, $SecondNumber;

    public function __construct($Value1, $Value2)
    {
        $this->FirstNumber = $Value1;
        $this->SecondNumber = $Value2;
    }

    public function Addition()
    {
        return $this->FirstNumber + $this->SecondNumber;
    }

    public function Subtraction()
    {
        return $this->FirstNumber - $this->SecondNumber;
    }

    public function Multiplication()
    {
        return $this->FirstNumber * $this->SecondNumber;
    }

    public function Division()
    {
        return $this->FirstNumber / $this->SecondNumber;
    }
}

$response = 0;
if (array_key_exists('n1', $_POST) && array_key_exists('n2', $_POST)) {
    $mycalc = new MyCalculator($_POST['n1'], $_POST['n2']);
    $typeDeCalcul = $_POST['sub'];
    switch ($typeDeCalcul) {
        case "+":
            $response = $mycalc->Addition();
            break;
        case "-":
            $response = $mycalc->Subtraction();
            break;
        case "x":
            $response = $mycalc->Multiplication();
            break;
        case "/":
            $response = $mycalc->Division();
            break;
    }
}