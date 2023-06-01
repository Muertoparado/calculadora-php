<?php
session_start();

class Calculadora
{
    public $num1 = [];
    public $num2 = [];

    public function __construct()
    {
        $this->inicio();
        $this->arr1();
    }

    public function arr1()
    {
        if (isset($_SESSION['operador'])) {
            $num2 = $_POST['numeros'];
            $_SESSION['num2'][] = $num2;
            echo $num2;
        } else {
            $num1 = $_POST['numeros'];
            $_SESSION['num1'][] = $num1;
            echo $num1;
        }
    }

    public function inicio()
    {
        if (isset($_POST['equals']) || isset($_POST['numeros']) || isset($_POST['operadores'])) {
            if (isset($_POST['operadores'])) {
                $_SESSION['operador'] = $_POST['operadores'];
            }
            header('Location: ' . $_SERVER['PHP_SELF']);
        }
    }

    public function operacion()
    {
        if (isset($_POST['equals'])) {
            $num1 = implode('', $_SESSION['num1']);
            $num2 = implode('', $_SESSION['num2']);
            $operador = $_SESSION['operador'];
            $resultado = 0;

            switch ($operador) {
                case '+':
                    $resultado = $num1 + $num2;
                    echo $resultado;
                    break;
                case '-':
                    $resultado = $num1 - $num2;
                    echo $resultado;
                    break;
                case '*':
                    $resultado = $num1 * $num2;
                    echo $resultado;
                    break;
                case '/':
                    $resultado = $num1 / $num2;
                    echo $resultado;
                    break;
            }
        }
    }
}

$obj = new Calculadora();
$obj->operacion();
?>