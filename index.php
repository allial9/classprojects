
<!DOCTYPE html>
<html>
    <head>
    <title>Allial O</title>
    <style>
        p {
            font-weight: normal;
            font-size: 16px;
        }

        li {
            font-size: 15px;
        }
    </style>

    </head>
    <body>
        <h1>MD5 Cracker</h1>
        <p>This application takes an MD5 hash of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN.</p>
<pre>        
Debug output:       
        
<?php 
$goodtext = "Not found";
if (isset($_GET['md5'])) {
    $timepre = microtime(true);
    $md5 = $_GET['md5'];

    $txt = "0123456789";
    $show = 15;
    $count = 0;
    for($i=0; $i<strlen($txt); $i++) {
        $ch1 = $txt[$i];
            
        for($j=0; $j<strlen($txt); $j++) {
            $ch2 = $txt[$j];

            for($k=0; $k<strlen($txt); $k++) {
                $ch3 = $txt[$k];
                    
                for($l=0; $l<strlen($txt); $l++) {
                    $ch4 = $txt[$l];

                    $attempt = $ch1.$ch2.$ch3.$ch4;
                    $count = $count + 1;

                    $check = hash('md5', $attempt);
                    if ($check == $md5) {
                        $goodtext = $attempt;
                        break;
                    }
                    
                    if ($show > 0) {
                        print "$check $attempt\n";
                        $show = $show - 1;
                    
                    }
                }        
            }
        }
    }
    $time_post = microtime(true);
    print "Total checks: ";
    print $count;
    print "\n";
    print "Elasped time: ";
    print $time_post-$timepre;
    print "\n";   
}




    
        // This is where the output for the debug will go
?>
</pre>

<p>PIN: <?= htmlentities($goodtext); ?></p>

<form>
<input type=text name='md5' size=40 />
<input type=submit value="Crack MD5" method="GET"/>

<ul style="font-size: 15px">
    <li><a href="http://69d0945ab740.ngrok.io/First/MD5%20Hash%20Cracker.php?">Reset</a></li>
    <li><a href="http://69d0945ab740.ngrok.io/First/MD5_encoder.php">MD5 Encoder</a></li>
    <li><a href="http://69d0945ab740.ngrok.io/First/MD5_Code_Maker.php">MD5 Code Maker</a></li>
    <li><a href="Can probably make a .txt file with the source code for the application">Source Code for this application</a></li>
</ul>

</body>
</html>