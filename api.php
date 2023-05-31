<?php

//header('Content-Type: application/json');

class Calculadora 
{
    public $num1=[];
    public $num2=[];

    public function __construct($operacion){
        $numero=$_POST['submit'];
        $num1 =array_push($numero);
        var_dump($num1);
        $operacion = $_POST['op'];
        switch ($operacion) {
        case '+':
            break;

        case '-':
            break;

        case '*':
            break;

        case '/':
            break;
        case'=':
            break;
        }
    }

    public function array1(){
        if (!isset($num1['numero'])) {
            $num1['numero'] = array();
        }
        if (isset($_POST['1'])) {
            // Agregar el valor del botón 1 al array de ingresos
            $num1['numero']['1'] = $_POST['1'];
        }
        if (isset($_POST['2'])) {
            // Agregar el valor del botón 1 al array de ingresos
            $num1['numero']['2'] = $_POST['2'];
        }
        if (isset($_POST['3'])) {
            // Agregar el valor del botón 1 al array de ingresos
            $num1['numero']['3'] = $_POST['3'];
        }
        if (isset($_POST['4'])) {
            // Agregar el valor del botón 1 al array de ingresos
            $num1['numero']['4'] = $_POST['4'];
        }
        if (isset($_POST['5'])) {
            // Agregar el valor del botón 1 al array de ingresos
            $num1['numero']['5'] = $_POST['5'];
        }
        if (isset($_POST['6'])) {
            // Agregar el valor del botón 1 al array de ingresos
            $num1['numero']['6'] = $_POST['6'];
        }
        if (isset($_POST['7'])) {
            // Agregar el valor del botón 1 al array de ingresos
            $num1['numero']['7'] = $_POST['7'];
        }
        if (isset($_POST['8'])) {
            // Agregar el valor del botón 1 al array de ingresos
            $num1['numero']['8'] = $_POST['8'];
        }
        if (isset($_POST['9'])) {
            // Agregar el valor del botón 1 al array de ingresos
            $num1['numero']['9'] = $_POST['9'];
        }
        if (isset($_POST['0'])) {
            // Agregar el valor del botón 1 al array de ingresos
            $num1['numero']['0'] = $_POST['0'];
        }
    }

        public function array2(){
            if (!isset($num2['numero'])) {
                $num2['numero'] = array();
            }
            if (isset($_POST['1'])) {
                // Agregar el valor del botón 1 al array de ingresos
                $num2['numero']['1'] = $_POST['1'];
            }
            if (isset($_POST['2'])) {
                // Agregar el valor del botón 1 al array de ingresos
                $num2['numero']['2'] = $_POST['2'];
            }
            if (isset($_POST['3'])) {
                // Agregar el valor del botón 1 al array de ingresos
                $num2['numero']['3'] = $_POST['3'];
            }
            if (isset($_POST['4'])) {
                // Agregar el valor del botón 1 al array de ingresos
                $num2['numero']['4'] = $_POST['4'];
            }
            if (isset($_POST['5'])) {
                // Agregar el valor del botón 1 al array de ingresos
                $num2['numero']['5'] = $_POST['5'];
            }
            if (isset($_POST['6'])) {
                // Agregar el valor del botón 1 al array de ingresos
                $num2['numero']['6'] = $_POST['6'];
            }
            if (isset($_POST['7'])) {
                // Agregar el valor del botón 1 al array de ingresos
                $num2['numero']['7'] = $_POST['7'];
            }
            if (isset($_POST['8'])) {
                // Agregar el valor del botón 1 al array de ingresos
                $num2['numero']['8'] = $_POST['8'];
            }
            if (isset($_POST['9'])) {
                // Agregar el valor del botón 1 al array de ingresos
                $num2['numero']['9'] = $_POST['9'];
            }
            if (isset($_POST['0'])) {
                // Agregar el valor del botón 1 al array de ingresos
                $num2['numero']['0'] = $_POST['0'];
            }
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="post" >
        <input type="submit" name="1" value="1">
        <input type="submit" name="2" value="2">
        <input type="submit" name="3" value="3">
        <input type="submit" name="op" value="+">
        <input type="submit" name="op" value="-"><br><br>
        <input type="submit" name="4" value="4">
        <input type="submit" name="5" value="5">
        <input type="submit" name="6" value="6">
        <input type="submit" name="op" value="*">
        <input type="submit" name="op" value="/"><br><br>
        <input type="submit" name="7" value="7">
        <input type="submit" name="8" value="8">
        <input type="submit" name="9" value="9">
        <input type="submit" name="0" value="0">
        <input type="submit" name="op" value="=">
        </form>
       
    </div>
</body>
</html>
