<?php

session_start();
//session_reset();

class Calculadora
{
    public function __construct()
    {
        $this->inicio();
        $this->arr1();
    }

    public function arr1()
    {
        if (isset($_POST['numeros']) || isset($_POST['operadores'])) {
            $valor = $_POST['numeros'] ?? $_POST['operadores'];
            if (!isset($_SESSION['valores'])) {
                $_SESSION['valores'] = (array) [];
            }
            $_SESSION['valores'][] = $valor;
        }
    }

    public function inicio()
    {
        if (isset($_POST['equals']) || isset($_POST['numeros']) || isset($_POST['operadores'])) {
            $this->operacion();
            if (isset($_POST['operadores'])) {
                $_SESSION['operador'] = $_POST['operadores'];
            }
          //  header('Location: ' . $_SERVER['PHP_SELF']);
        }
        var_dump($_SESSION['operador']);
    }

    public function operacion()
    {
        if (isset($_POST['equals'])) {
            if (isset($_SESSION['valores'])) {
                $valores = $_SESSION['valores'];
                $datos = [];
                $numero = '';

                foreach ($_SESSION['valores'] as $data) {
                    if (is_numeric($data)) {
                        $numero .= $data;
                    } else {
                        if (!empty($numero)) {
                            $datos[] = (int) $numero;
                            $numero = '';
                        }
                    }
                }

                if (!empty($numero)) {
                    $datos[] = (int) $numero;
                }

                $string = implode($_SESSION['valores']);
                $string = str_replace(' ', '', $string);
                $string = strrev($string);
                $operadores = ['*', '/', '+', '-'];
                $resultado = (float)$string;
                $i = 1;

                echo strrev($string)." =\n";

                while ($i < strlen($string)) {
                    $operador = $string[$i];
                    $numero = '';

                    while ($i < strlen($string) && !in_array($string[$i + 1], $operadores)) {
                        $numero .= $string[$i + 1];
                        $i++;
                    }
                    switch ($operador) {
                        case '*':
                            $resultado *= (float)$numero;
                            break;
                        case '/':
                            if ((float)$numero != 0) {
                                $resultado /= (float)$numero;
                            } else {
                                $resultado = NAN;
                            }
                            break;
                        case '+':
                            $resultado += (float)$numero;
                            break;
                        case '-':
                            $resultado -= (float)$numero;
                            break;
                    }

                    $i++;
                }

                echo $resultado;
            }
        }
    }
}

$obj = new Calculadora();
$obj->operacion();

?>


/* class Calculadora
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
            $this->operacion();
            if (isset($_POST['operadores'])) {
                $_SESSION['operador'] = $_POST['operadores'];
            }
          //  header('Location: ' . $_SERVER['PHP_SELF']);
        }
        var_dump($_SESSION['operador']);
    }

    public function operacion()
    {
        if (isset($_POST['equals'])) {
            $num1 = implode('', $_SESSION['num1']);
            $num2 = implode('', $_SESSION['num2']);
            $operador = $_SESSION['operador'];
            var_dump($operador);
            $resultado = 0;

            switch ($operador) {
                case '+':
                    var_dump($num1);
                    var_dump($num2);
                   // $num1= eval('num1');
                    $resultado = eval("$num1+$num2");
                    echo $resultado;
                    break;
                case '-':
               //     $resultado = eval($num1 - $num2);
                    echo $resultado;
                    break;
                case '*':
                  //  $resultado = eval($num1 * $num2);
                    echo $resultado;
                    break;
                case '/':
                 //   $resultado = eval($num1 / $num2);
                    echo $resultado;
                    break;
                case 'C':
                    $_SESSION['num1']=array();
                   // $_SESSION['num2']=array();
                    break;
            }
        }
    }
}

$obj = new Calculadora();
$obj->operacion();
 */

/* session_start();


class Calculadora{
    public $num1=[];
    public $num2=[];


    public function __construct(){
        $this->inicio();
        $this->arr1();    
        
    }

    public function arr1 (){
        $_num1 = $_POST['numeros'];
        $_SESSION['arr'][]=$_num1;
        echo($_num1) ;

    }
    public function arr2 (){
        $num2 = $_POST['numeros'];
        $_SESSION['arr'][]=$num2;
        echo $num2;

    }
    public function inicio (){
        if (isset($_POST['equals']) || isset($_POST['numeros']) || isset($_POST['operadores'])) {
            header('Location: ' . $_SERVER['PHP_SELF']);
            $_SESSION=$_POST['arr'];
            $operador = $_POST['operadores'];
            $resultado = 0;
    }
}
    public function operacion(){
        switch ($_operador) {
            case '+':
                $this->arr2();
                $resultado = $_num1 + $_num2;
                echo $resultado;
                break;
            case '-':
                $this->arr2();
                $resultado = $_num1 - $_num2;
                echo $resultado;
                break;
            case '*':
                $this->arr2();
                $resultado = $_num1 * $_num2;
                echo $resultado;
                break;
            case '/':
                $this->arr2();
                $resultado = $_num1 / $_num2;
                echo $resultado;
                break;
        }

    }
}

$obj= new Calculadora(); 
*/

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
    <div >
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
                <td><input type="submit" name="operadores" value="C"></td>
                <td><input type="submit" name="numeros" value="0"></td>
                <td><input type="submit" name="operadores" value="/"></td>
                <td><input type="submit" name="equals" value="="></td>

            </tr>
        </table>
    </form>
    </div>
</body>
</html>
