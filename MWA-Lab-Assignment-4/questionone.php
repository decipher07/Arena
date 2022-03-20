<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specific Element in an array using linear search</title>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css" />
</head>
<body>
    <h1 style="text-align: center;">Search a Specific Element in an array using linear search</h1>
    <form action="questionone.php" method="get">
        Number: <input type="number" name="inputone" id="inputone">
        <input type="submit">
    </form>
    
    <?php 

        function linearSearch ( $key, $elements ){
            for ( $i = 0 ; $i < count($elements) ; $i++ )
            if ( $key == $elements[$i] ){
                echo ( " The element has been found at index : $i <br>");
                return true;
            }

            return false;
        }

        $elements = array( 1, 5, 10, 555, 123, 663, 1241, 10231);
        echo ( print_r($elements));
        echo ("<br/>");
        $key = $_GET["inputone"];

        if (!linearSearch($key, $elements))
            echo( "Sorry, The Key is not present in the array");
        
    ?>
</body>
</html>