
<?php

session_start();
$error = "";

if (array_key_exists("logout", $_GET)) {
    unset($_SESSION);
    session_destroy();
    setcookie("c_id", mysqli_insert_id($link), time() - 60 * 60 * 24);
    header("location: register.php");
}


elseif (array_key_exists("c_id", $_SESSION)) {
    header("location: userProfile.php");
}

if (array_key_exists("submit", $_POST)) {

    include ("includes/link.php");

    if (!$_POST['c_email']) {

        $error .= "An Email is Required<br>";

    }

    if (!$_POST['c_password']) {

        $error .= "A password is Required<br>";

    }

    if ($error != "") {

        $error = "<p> There were error(s) in your form</p>" . $error;

    } 
    if ($_POST['signUp'] == 1) {

        $query = "SELECT c_id FROM `customer` WHERE c_email = '" . mysqli_real_escape_string($link, $_POST['c_email']) . "' LIMIT 1";

        $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) > 0) {

            $error = "That email address is taken.";

        } else {

            $query = "INSERT INTO `customer` (`c_email`, `c_password`) VALUES ('" . mysqli_real_escape_string($link, $_POST['c_email']) . "', '" . mysqli_real_escape_string($link, $_POST['c_password']) . "')";

            if (!mysqli_query($link, $query)) {

                $error = "<p>Could not sign you up please try again later.</p>";

            } else {
                $last_id = $link->insert_id;
                $_SESSION['c_id'] =  $last_id;
                setcookie("c_id", mysqli_insert_id($link), time() + 60 * 60 * 24);
                header("location: userProfile.php");
            }

        }

    } 

    else {
            $query = "SELECT * FROM `customer` WHERE c_email = '" . mysqli_real_escape_string($link, $_POST['c_email']) . "'";

            $result = mysqli_query($link, $query);
            $row = mysqli_fetch_array($result);

            if (isset($row)) {

                if ($_POST['c_password'] == $row['c_password']) {
                    $_SESSION['c_id'] = $row['c_id'];
                    setcookie("c_id", mysqli_insert_id($link), time() + 60 * 60 * 24);
                    header("location: userProfile.php");
                } else {

                    $error = "That Email/Password combination could not be found";
                }

            } else {

                $error = "That Email/Password combination could not be found";
            }
        }

}
include 'includes/header.php';
?>
<br> 
<div class="container bg-secondary"id="container1"
style=" text-align: center;
    margin-top: 40px;
    width: 500px;">
       <div id="error"><?php if($error!=""){
            echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
        }?>
        </div>
    <form method="post" id="form1" style="padding-top:40px;">
        <div class="form-group">
            <input class="form-control" type="email" name="c_email" placeholder="email">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="c_password" placeholder="password">
        </div>
        <div class="form-group">
            <input type="hidden" name="signUp" value=1>

            <input type="submit" class="btn btn-success" name="submit" value="Sign Up!">
        </div>
        <p class="formOption" style="color:black;">Already have an accout?  <a class="formToggle btn btn-primary" href="#" style="border:none;font-size:12px; margin-bottom:20px;margin-top:20px;">Log In</a></p>
        
    </form>

    <form method="post" id="form2" style=" display: none; padding-top:40px;">
        <div class="form-group">
            <input class="form-control" type="email" name="c_email" placeholder="email">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="c_password" placeholder="password">
        </div>
        <div class="form-group">
            <input type="hidden" name="signUp" value=0>

            <input type="submit" class="btn btn-success" name="submit" value="Log In!">
        </div>
        <p class="formOption" style="color:black;">Don't have an accout?  <a class="formToggle btn btn-primary" href="#" style="border:none;font-size:12px; margin-bottom:20px;margin-top:20px;">Sign Up</a></p>
    </form>
</div>
<br><br>
<?php include 'includes/footer.php';?>


