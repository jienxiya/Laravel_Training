<?php

// try{
//     session_start();
//     if(isset($_SESSION["login"])){
//         if ($_SESSION["login"]) {
//             header("Location: Dashboard.php");
//         } 
//     }
//     include("Functions.php");
//     try{
//         $manage = new Manage();
//         $conn = $manage->connectToDB(); //own function that connect to database
//     }catch(Exception $e){
//         echo "Message: " . $e->getMessage();
//     }
    
// }catch(Exception $e){
//     echo "Message: " . $e->getMessage();
// }

?>

<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' href="{{ url('css/form.css') }}"/>
</head>
</head>
<div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <!--  -->
            </div>
            <div class="col-sm-6    ">
                <center><h3>Login to ApPharmacy</h3></center>
                <?php if(isset($_SESSION["message"])): ?>
                    <div class="err_message alert alert-danger">
                        <?php 
                            echo $_SESSION["message"];
                            unset($_SESSION["message"]);
                            echo "<script> $('.err_message').fadeOut() </script>";
                        ?>
                    </div>
                <?php endif; ?>
                <form class="form" action="view-humans" method="get">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php 
                    if(isset($_COOKIE["user"])) {
                        echo $_COOKIE["user"];
                    } ?>" placeholder="Email">
                    
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********">
                    <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" <?php 
                        if(isset($_COOKIE["user"])) {
                            echo "checked";
                        } ?>> Remember me</label>
                    </div>
                    <input type="submit" name="login" value="Login">
                </form>
            </div>
            <div class="col-sm-4">
                <!--  -->
            </div>
        </div>
    </div>
</div>

</body>
</html>