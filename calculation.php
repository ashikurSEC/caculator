<?php
require_once 'Calculator.php';
use App\Calculator;

$calculate = new Calculator();

if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $num1       = $_POST['num1'];
    $num2       = $_POST['num2'];
    $operation  = $_POST['operation'];

    

    switch( $operation ) {
        case 'add':
            $result = $calculate->add( $num1, $num2 );
        break;

        case 'subtract':
            $result = $calculate->subtract( $num1, $num2 );
        break;

        case 'multiply':
            $result = $calculate->multiply( $num1, $num2 );
        break;

        case 'divide':
            $result = $calculate->divide( $num1, $num2 );
        break;

        case 'remainder':
            $result = $calculate->remainder( $num1, $num2 );
        break;

        default:
            $result = 'Invalid Operations';
    }

}


?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculation</title>

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
        <h2>Simple Calculator</h2>
        <form action="index.php" method="post">
            <div class="form-group mb-2">
                <label for="num1"><strong>First Number:</strong></label>
                <input type="text" class="form-control" name="num1" placeholder="Enter Your First Number" required>
            </div>
            <div class="form-group mb-2">
                <label for="num2"><strong>Second Number:</strong></label>
                <input type="text" class="form-control" name="num2" placeholder="Enter Your Second Number" required>
            </div>
            <div class="form-group">
                <label for="operation"><strong>Operation:</strong></label>
                <select class="form-control" name="operation" required>
                    <option value="add">Addition</option>
                    <option value="subtract">Subtraction</option>
                    <option value="multiply">Multiplication</option>
                    <option value="divide">Division</option>
                    <option value="remainder">Remainder</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Calculate</button>
        </form>

        <?php if (isset($result)): ?>
            <div class="mt-4">
                <h4>The Result is: <?php echo $result; ?></h4>
            </div>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>