<?php

session_start(); 
$title="Review Page";
include "layouts/header.php";
include "layouts/navbar.php";

if($_SERVER['REQUEST_METHOD']="POST")
$_SESSION['phone'] = $_POST['phone'];
$reveiw = [];
$qestions = ['Are you satisfied with the level of hygiene?', 'Are you satisfied with the price of services?', 'Are you satisfied with the nursing service?', 'Are you satisfied with the level of docters?','Are you satisfied with  the calmness in the hospital?'];

?>


    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1>Review Page</h1>
            </div>
            <div class="col-4 offset-4 mt-5">
                <form action="Result.php" method="post" style="margin: 50px 100px;" >
                    <table class="col-12 table table-strioed table-warning">
                    <tr>
                        <th>Questions</th>
                        <th>Bad</th>
                        <th>Good</th>
                        <th>Very Good</th>
                        <th>Excellent</th>
                    </tr>
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <tr>

                            <td><?= $qestions[$i] ?></td>

                            <td> <input type="radio" name="rate<?= $i ?>" value="bad" placeholder="" aria-describedby="helpId"></td>
                            <td> <input type="radio" name="rate<?= $i ?>" value="good" placeholder="" aria-describedby="helpId"></td>
                            <td> <input type="radio" name="rate<?= $i ?>" value="very good" placeholder="" aria-describedby="helpId"></td>
                            <td> <input type="radio" name="rate<?= $i ?>" value="excellent" placeholder="" aria-describedby="helpId"></td>

                            <?php
                            if (isset($_POST['rate' . $i]))
                                $reviw[$i] = $_POST['rate' . $i];
                            ?>

                        </tr>
                    <?php } ?>



                </table>
        <div class=" form-group">
        <button class="btn btn-outline-dark rounded form-control">Submit</button>

        </div>
        
    </form>
    </div>
    </div>
    </div>
<?php
include "layouts/scripts.php";
include "layouts/footer.php";
?>
