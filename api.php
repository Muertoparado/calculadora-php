<?php
 

class Calculadora{
   
    public $num1=[];
    public $num2=[];


    public function __construct(){
        this->inicio();
        this->arr1();    
        switch ($operador) {
            case '+':
            this->arr2();
                $resultado = $num1 + $num2;
                echo $resultado;
                break;
            case '-':
                this->arr2();
                $resultado = $num1 - $num2;
                echo $resultado;
                break;
            case '*':
                this->arr2();
                $resultado = $num1 * $num2;
                echo $resultado;
                break;
            case '/':
                this->arr2();
                $resultado = $num1 / $num2;
                echo $resultado;
                break;
        }
        echo $resultado;

    }

    public function arr1 (){
        $num1 = $_POST['numeros'];
        echo $num1;

    }
    public function arr2 (){
        $num2 = $_POST['numeros'];
        echo $num2;

    }
    public function inicio (){
        if (isset($_POST['equals']) || isset($_POST['numeros']) || isset($_POST['operadores'])) {
            $operador = $_POST['operadores'];
            $resultado = 0;
    }
}
}


//header('Content-Type: application/json');

/* class Calculadora 
{
    public $num1=[];
    public $num2=[];

    public function __construct($operacion){
        $numero=$_POST['submit'];
        array1($num1);
        var_dump($num1);
        $operacion = $_POST['op'];
        switch ($operacion) {
        case '+':
            array2($num2);

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
} */

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
       <form method="post">
        <table>
            <tr>
                <td><input type="submit" name="numeros" value="1"></td>
                <td><input type="submit" name="numeros" value="2"></td>
                <td><input type="submit" name="numeros" value="3"></td>
                <td><input type="submit" name="operadores" value="+"></td>
            </tr>
    
            <tr>
                <td><input type="submit" name="numeros" value="4"></td>
                <td><input type="submit" name="numeros" value="5"></td>
                <td><input type="submit" name="numeros" value="6"></td>
                <td><input type="submit" name="operadores" value="-"></td>
            </tr>

            <tr>
                <td><input type="submit" name="numeros" value="7"></td>
                <td><input type="submit" name="numeros" value="8"></td>
                <td><input type="submit" name="numeros" value="9"></td>
                <td><input type="submit" name="operadores" value="*"></td>
            </tr>
            <tr>
                <td><input type="submit" name="numeros" value="0"></td>
                <td><input type="submit" name="operadores" value="/"></td>
                <td><input type="submit" name="equals" value="="></td>

            </tr>
        </table>
    </form>
       
    </div>
</body>
</html>
