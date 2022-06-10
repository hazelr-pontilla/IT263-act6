<?php
    require_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Activity for Functions</h1>

    <form action="" method="post">
        <p>Number 1: <br> <input type="text" name="num1"></p>
        <p>Number 2: <br> <input type="text" name="num2"></p>
        <p>Operator: <br>
            <select name="operator">
                <option value="">-</option>
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
        </p>  
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
        if(isset($_POST['calculate']))
        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
            $result = '';

            if( $operator == 'add')
            {
                $result = addNumber($num1, $num2);
            }
            elseif ( $operator == 'subtract')
            {
                $result = subtractNumber($num1, $num2);
            }
            elseif ( $operator == 'multiply')
            {
                $result = multiplyNumber($num1, $num2);
            }
            elseif ( $operator == 'divide')
            {
                $result = divideNumber($num1, $num2);
            }

            echo '<h2>Answer: '.$result.'</h2>';
        }

    ?>
</body>
</html>