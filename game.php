<!-- Model -->


<?php
if  ( isset($_GET["name"]) == "" ) {
    die('Name parameter missing');
}
?>

<?php
if ( isset($_POST['Logout'])) {
    header("Location: index.php");
}
?>

<!-- View -->


<!DOCTYPE html>

<html>
<head>
    <title>RPS Game</title>
    <!-- <link rel="stylesheet" href="rps_style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

</head>

<body>
    <h1>Rock Paper Scissors</h1>
    
    <p>Welcome:
    <?
    $loginGET = ($_GET['name']);
    echo $loginGET; // this should be from the login page
    ?></p> 
<form name="rpsgame" id="rpsgame" method="POST">
<select id="rps" name="rps">
        <option value="-1">Select</option>
        <option value="0">Rock</option>
        <option value="1">Paper</option>
        <option value="2">Scissors</option>
        <option value="3">Test</option>
</select>
    <input type="submit" name="Play" value="Play" />
    <input type="submit" name="Logout" id='Logout' value="Logout" /><br><br>
</form>
<pre>
<!-- <div class="container"> -->
<?php

$names = array("Rock", "Paper", "Scissors");

function check($c, $h) {
    

    if ($c == '0' && $h == '0') {
        return 'Tie';
    }

    elseif ($c == '1' && $h == '1') {
        return 'Tie';
    }

    elseif ($c == '2' && $h == '2') {
        return 'Tie';
    }

    elseif ($c == '0' && $h == '1') {
        return 'You Win';
    }

    elseif ($c == '1' && $h == '0') {
        return 'You lose';
    }

    elseif ($c == '0' && $h == '2') {
        return 'You Lose';
    }

    elseif ($c == '2' && $h == '0') {
        return 'You Win';
    }

    elseif ($c == '1' && $h == '2') {
        return 'You Win';
    }

    elseif ($c == '2' && $h == '1') {
        return 'You Lose';
    }

}   
// need random input from computer
    


if ( isset($_POST['Play']) ) {
    $computer = array_rand($names);
    if ($computer == 0 && ($_POST['rps']) == 0) {
            print "Human=$names[0] Computer=$names[0] Result=Tie\n";
    }
    if ($computer == 1 && ($_POST['rps']) == 1) {
        print "Human=$names[1] Computer=$names[1] Result=Tie\n";
    }
    if ($computer == 2 && ($_POST['rps']) == 2) {
        print "Human=$names[2] Computer=$names[2] Result=Tie\n";
    }
    if ($computer == 0 && ($_POST['rps']) == 1) {
        print "Human=$names[1] Computer=$names[0] Result=You Win\n";
    }

    if ($computer == 1 && ($_POST['rps']) == 0) {
        print "Human=$names[0] Computer=$names[1] Result=You Lose\n";
    }

    if ($computer == 0 && ($_POST['rps']) == 2) {
        print "Human=$names[2] Computer=$names[0] Result=You Lose\n";
    }

    if ($computer == 1 && ($_POST['rps']) == 2) {
        print "Human=$names[2] Computer=$names[1] Result=You Win\n";
    }

    if ($computer == 2 && ($_POST['rps']) == 1) {
        print "Human=$names[1] Computer=$names[2] Result=You Lose\n";
    }

    if ($computer == 2 && ($_POST['rps']) == 0) {
        print "Human=$names[0] Computer=$names[2] Result=You Win\n";
    }

    if ($_POST['rps'] == '3') {
        for ($c=0; $c<3; $c++) {
            for ($h=0; $h<3; $h++) {
                $r = check($c, $h);
                print "Human=$names[$h] Computer=$names[$c] Result=$r\n";
            }
        }
    }

}
?>
<!-- </div> -->
</pre>
</body>
</html>
