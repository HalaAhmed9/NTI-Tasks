<?php

global $result, $Precentage, $error;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['Physics_Grade']) || empty($_POST['chemistry_Grade']) || empty($_POST['Biology_Grade']) || empty($_POST['Mathematics_Grade']) || empty($_POST['Computer_Grade'])) {
    $error = "Please Enter the missing values";
  } else {
    $sum = $_POST['Physics_Grade'] + $_POST['chemistry_Grade'] + $_POST['Biology_Grade'] + $_POST['Mathematics_Grade'] + $_POST['Computer_Grade'];
    $Precentage = ($sum / 500) * 100;
    switch ($Precentage) {
      case ($Precentage >= 90 && $Precentage <= 100):
        $result = "Grade A";
        break;
      case ($Precentage >= 80 && $Precentage < 90):
        $result = "Grade B";
        break;
      case ($Precentage >= 70 && $Precentage < 80):
        $result = "Grade C";
        break;
      case ($Precentage >= 60 && $Precentage < 70):
        $result = "Grade D";
        break;
      case ($Precentage >= 40 && $Precentage < 60):
        $result = "Grade E";
        break;
      case ($Precentage < 40):
        $result = "Grade F";
        break;
      default:
        $result = "ERROR!";
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
        <h1> Grades</h1>
      </div>
      <div class="col-4 offset-4 mt-5">
        <form method="post">
          <div class="form-group">
            <label for="number">Physics Grade:</label>
            <input type="number" min="0" max="100" name="Physics_Grade" id="number1" class="form-control" placeholder="" aria-describedby="helpId">
            <label for="number">Chemistry Grade:</label>
            <input type="number" min="0" max="100" name="chemistry_Grade" id="number2" class="form-control" placeholder="" aria-describedby="helpId">
            <label for="number">Biology Grade:</label>
            <input type="number" min="0" max="100" name="Biology_Grade" id="number3" class="form-control" placeholder="" aria-describedby="helpId">
            <label for="number">Mathematics Grade:</label>
            <input type="number" min="0" max="100" name="Mathematics_Grade" id="number4" class="form-control" placeholder="" aria-describedby="helpId">
            <label for="number">Computer Grade:</label>
            <input type="number" min="0" max="100" name="Computer_Grade" id="number5" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <button class="btn btn-outline-danger rounded form-control"> Get Result </button>
          </div>
          <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($GLOBALS['error'])) { ?>
              <label class='alert alert-danger'><?php echo "Percentage= " . $GLOBALS['Precentage'] . " % => " .   $GLOBALS['result'] ?></label>
            <?php } else { ?>
              <label class='alert alert-danger'><?php echo $GLOBALS['error'];
                                              }
                                            } ?></label>
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