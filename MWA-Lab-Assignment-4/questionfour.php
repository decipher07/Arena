<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a form with one text field and submit buttons for string length, string reverse and uppercase, lowercase, string replace. Display the result accordingly.</title>
</head>
<body>
    <h1 style="text-align: center;">Create a form with one text field and submit buttons for string length, string reverse and uppercase, lowercase, string replace. Display the result accordingly.</h1>
    <form action="questionfour.php" method="get">
        String: <input type="text" name="inputone" id="inputone">
        <input type="submit">
    </form>
        
    <?php 
        $input_string = $_GET["inputone"];

        echo ( strlen($input_string)."<br>" );
        echo ( strrev($input_string)."<br>" );
        echo ( strtoupper($input_string)."<br>" );
        echo ( strtolower($input_string)."<br>" );

        echo ( str_replace("word", "world", $input_string));
    ?>
</body>
</html>