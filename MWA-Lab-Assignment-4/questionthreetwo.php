<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Question</title>
</head>
<body>
    <?php 
        $elementsInArray = array(1100, 123, 100, 421, 41, 451, 632, 6234, 1214);
        echo ("<h1>The elements for array are as follows : </h1>");

        echo ("<h1>");
        foreach( $elementsInArray as $x ){
            echo ( $x. " " );
        }
        echo ("</h1>");

        if ( in_array("100", $elementsInArray) )
            echo ("<b>Found Element : 100</b>");
        else
            echo ("Not Found");

        echo("<h1>Extract the portion of the array and display from a slice of two.</h1>");
        $new_slice = array_slice($elementsInArray, 2);
        print_r($new_slice);
        
    ?>
</body>
</html>