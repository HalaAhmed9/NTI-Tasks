<?php

global $result, $error;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['first_value']) && empty($_POST['second_value'])) {
        $error = "Please Enter the first & second value";
    } else if (empty($_POST['first_value'])) {
        $error = "Please Enter the first value";
    } else if (empty($_POST['second_value'])) {
        $error = "Please Enter the second value";
    } else {

        $first_value = (int)$_POST['first_value'];
        $second_value = (int)$_POST['second_value'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case "+":
                $result = $first_value + $second_value;
                break;
            case "-":
                $result = $first_value - $second_value;
                break;
            case "×":
                $result = $first_value * $second_value;
                break;
            case "÷":
                $result = $first_value / $second_value;
                break;
            case "%":
                $result = $first_value % $second_value;
                break;
            default;
        }
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="contianer">
        <div class="row">
            <div class="col-12 text-center text-danger mt-5">
                <h1> Simple Calculator</h1>
            </div>
            <div class="col-4 offset-4 mt-5">
                <form method="post">
                    <div class="form-group">
                        <label for="number">First_Value</label>
                        <input type="number" name="first_value" id="number" class="form-control" placeholder="" aria-describedby="helpId">
                        <label for="number">Second_Value</label>
                        <input type="number" name="second_value" id="number" class="form-control" placeholder="" aria-describedby="helpId">

                    </div>
                    <b>RESULT</b>
                    <div class="form-group">
                        <input class="btn btn-danger" style="padding: 3px 32px;" type="submit" name="operator" value="+" />
                        <input class="btn btn-danger" style="padding: 3px 32px;" type="submit" name="operator" value="-" />
                        <input class="btn btn-danger" style="padding: 3px 32px;" type="submit" name="operator" value="×" />
                        <input class="btn btn-danger" style="padding: 3px 32px;" type="submit" name="operator" value="÷" />
                        <input class="btn btn-danger" style="padding: 3px 32px;" type="submit" name="operator" value="%" />

                    </div>
                    <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){ if (empty($GLOBALS['error'])) { ?>
                        <label class='alert alert-danger'><?php echo $GLOBALS['result'] ?></label>
                    <?php } else { ?>
                        <label class='alert alert-danger'><?php echo $GLOBALS['error'];
                                                        }} ?></label>

                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>