<?php
session_start();
$title="Show Result";
include 'layouts/header.php';
include 'layouts/navbar.php';

$total = 0;

$qestions = ['Are you satisfied with the level of hygiene?', 'Are you satisfied with the price of services?', 'Are you satisfied with the nursing service?', 'Are you satisfied with the level of docters?','Are you satisfied with  the calmness in the hospital?'];

if ($_POST) {
    for ($i = 0; $i < 5; $i++) {
        if (isset($_POST['rate' . $i]))
            $_SESSION['review' . $i] = $_POST['rate' . $i];
    }
}
?>

<h1 class="text-center text-danger">Result </h1>
<div class="col-12" style="margin: 50px 150px;">
    <table class="col-9 table table-striped table-active ">
                <tr>
                    <th>Questions</th>
                    <th>Reviews</th>
                </tr>
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <tr>

                        <td><?= $qestions[$i]; ?></td>

                        <td> <?php
                                if ($_SESSION['review' . $i] == 'bad') {
                                    echo "Bad";
                                    $total += 0;
                                } else  if ($_SESSION['review' . $i] == 'good') {
                                    echo "Good";
                                    $total += 3;
                                } else  if ($_SESSION['review' . $i] == 'very good') {
                                    echo "Very_Good";
                                    $total += 5;
                                } else  if ($_SESSION['review' . $i] == 'excellent') {
                                    echo "Excellent";
                                    $total += 10;
                                }
                                ?></td>
                    </tr>
                <?php } ?>
            </table>
            <table>
            <tr><?php
                    if ($total < 25)
                        echo "<h2 class=w-100 bg-light text-light text-center py-2  style=background-color:red;'> We will call you later on this phone :{$_SESSION['phone']}.</h2>";
                    else
                        echo "<h2 class=w-100 bg-light text-light text-center py-2  style=background-color:red;'>Thanks For Your Time.</h2>";
                    ?></tr>
            </table>
    <?php if (isset($message)) {
        echo $message;
    } ?>

</div>
<?php
include "layouts/footer.php";
include "layouts/scripts.php";
?>