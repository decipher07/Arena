<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operations on Array/Associative Array</title>
</head>
<body>
    <h1 style="text-align: center;">Perform the following operations in Array/Associative Array.</h1>
    <h1 style="text-align: center;">Compare two associative array elements whether they are equal.</h1>

    <?php 
        $containerOne = array( "VIT" => "Vellore", "IIT" => "Madras", "NIT" => "Trichy", "MIT" => "USA");
        $containerTwo = array( "VIT" => "Vellore", "IIT" => "Madras", "NIT" => "Trichy", "MIT" => "USA");

        echo ("<h1>The elements for array one are as follows : </h1><br>");
        foreach ( $containerOne as $y => $x ){
            echo ("Key=" . $y . ", Value=" . $x);
            echo ("<br>");
        }
        echo ("<h1>The elements for array two are as follows : </h1> <br>");
        foreach ( $containerTwo as $y => $x ){
            echo ("Key=" . $y . ", Value=" . $x);
            echo ("<br>");
        }

        if ( $containerOne == $containerTwo )
            echo ( " <h1> Both the Arrays are equal </h1>");
        else
            echo ( " <h1> Both the Arrays are not equal </h1>");
        
        echo ("<hr>");

        $changedOne = array( "VIT" => "Chennai", "IIT" => "Madras", "NIT" => "Trichy", "MIT" => "USA");
        $changedTwo = array( "VIT" => "Vellore", "IIT" => "Madras", "NIT" => "Trichy", "MIT" => "USA");

        echo ("<h1>The elements for array one are as follows : </h1><br>");
        foreach ( $changedOne as $y => $x ){
            echo ("Key=" . $y . ", Value=" . $x);
            echo ("<br>");
        }
        echo ("<h1>The elements for array two are as follows : </h1> <br>");
        foreach ( $changedTwo as $y => $x ){
            echo ("Key=" . $y . ", Value=" . $x);
            echo ("<br>");
        }

        if ( $changedOne == $changedTwo )
            echo ( " <h1> Both the Arrays are equal </h1>");
        else
            echo ( " <h1> Both the Arrays are not equal </h1>");

        echo ("<hr>");

        echo("<h1>Sorting the array based on the key </h1>");
        ksort($containerOne);
        
        foreach ( $containerOne as $y => $x ){
            echo ("Key=" . $y . ", Value=" . $x);
            echo ("<br>");
        }
        
        echo("<h1>Displaying the elements present in an associative array in reverse order based on values. </h1>");
        arsort($containerOne);
        
        foreach ( $containerOne as $y => $x ){
            echo ("Key=" . $y . ", Value=" . $x);
            echo ("<br>");
        }

        echo ("<hr>");
        echo("<h1>Replace the array elements with some other values. </h1>");
        
        $a1=array("Alpha","Beta", "Gamma", "Delta", "Omicron", "Deltacron");
        $a2=array("a","b","c","d","e","f");
        
        print_r(array_replace($a1,$a2));

    ?>
</body>
</html>