<?php
// if (isset($_GET["game.php"])) {
    // die('Name parameter missing');
// }
?>
<!DOCTYPE html>
<html>
<!--View-->
<head>
<link rel="stylesheet" href="rps_style.css">
    <title>a0f9dfdc</title>
</head>
<body>
<h1>Welcome to Rock Paper Scissors</h1>
<!--create a css.stylesheet and have the hover for the links add an underline to it-->
<form action="anchorvalue" id="anchorvalue" type="hidden" value="game.php">

<p><a href="login.php">Please Log in</a>
<p>Attempt to go to <a href="game.php">game.php</a> without logging in - it should fail with an error message</p>

</form>
</body>
</html>
