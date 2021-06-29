<?php


// Check to see if we have some POST data, if we do process it
if (isset($_POST['cancel'])) {
    //Redirect to game.php page//
    header("Location: index.php");
    return;

}

$salt = 'XyZzy12*_';
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1'; //password = php123
$failure = false;  // check PW on assigment page a place here --> // 

if (isset($_POST['who']) && isset($_POST['pass'])) {
   
    if (strlen($_POST['who']) < 1  || strlen($_POST['pass']) < 1 ) {
        $failure = "Username and Password are required";
    }

    else {
        $check = hash('md5', $salt.$_POST['pass']);
        if ($check == $stored_hash) {
            // Redirect the browser to game.php
            header("Location: game.php?name=".urlencode($_POST['who']));
            return;
        }

        else {
            $failure = "Incorrect password";
        }
    } 
}
?>
<!DOCTYPE html>
<html>
<body>
<h1>RPS User Login</h1>
<?php
if ( $failure !== false ) {
    echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
}
?>
<form method="POST">
<label for="user">Username: </label>
<input type="text" name="who" id="user"></input><br><br>
<label for="pass">Password: </label>
<input type="password" name="pass" id="pass"></input><br><br>
<input type="submit" name="login" value="Log In" />
<input type="submit" name="cancel" value="Cancel" />
</form>
</body>
</html>