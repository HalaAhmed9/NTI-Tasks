<?php
session_start(); 
$title= "Number Page";
include "layouts/header.php";
include "layouts/navbar.php";


if($_SERVER['REQUEST_METHOD']="POST"){
    //print_r($_POST); //body 
    $error=[];
    if(empty($_POST['phone'])){
        $error['phone-required']= "<p class='text-danger font-weight-bold'>Phone Number is Required.</p>";

    }
    if (empty($error)){
        $_SESSION['phone'] = $_POST['phone'];
        header("location:Review.php");
    }
}
?>
    <div class="container">
        <div class ="row">
            <div class ="col-12 text-center mt-5">
                <h1>Hospital </h1>
            </div>
            <div class ="col-4 offset-4 mt-5">
                <form method="post" action="Review.php" >
                    <div class="form-group">
                        <label for="phone">Mobile Number</label>
                        <input type="phone" name="phone" id="phone" class="form-control"  required placeholder="" aria-describedby="helpId">  
                        <?php 
                        if(isset($error['phone-required'])){
                            echo $error['phone-required'];
                            
                        }?>
                    </div>
                    <div class="form-group">
                        <button type ="submit" class="btn btn-outline-dark rounded form-control">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    include "layouts/footer.php";
    include "layouts/scripts.php";
    ?>