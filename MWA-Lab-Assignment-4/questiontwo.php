<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Simple Calculator</title>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css">
</head>

<?php
    
    if ( isset($_POST["opert"] )){
        $nums1 = $_POST["firstNum"];
        $nums2 = $_POST["secondNum"];
        $opert = $_POST["opert"];
        
        switch ( $opert ){
            case "Add": 
                $result = ( $nums1 + $nums2 );
                break;
            case "Subtract": 
                $result = ( $nums1 - $nums2 );
                break;
            case "Multiply": 
                $result = ( $nums1 * $nums2 );
                break;
            case "Divide": 
                $result = ( $nums1 / $nums2 );
                break;
        }
    }

?>

<body style="text-align: center;">
    <h1 style="text-align: center;">PHP-Simple Calculator Program</h1>

    <form action="" onsubmit="false" method="post">
        <input type="number" name="firstNum" value="<?php echo (isset($nums1))?$nums1:'';?>"> <b> First Number </b><br/>
        <input type="number" name="secondNum" value="<?php echo (isset($nums2))?$nums2:'';?>"> <b> Second Number </b><br/>
        <input type="text" name="result" value="<?php echo (isset($result))?$result:'';?>"> <b>Result</b><br/>

        <input type="submit" value="Add" name="opert"/>
        <input type="submit" value="Subtract" name="opert"/>
        <input type="submit" value="Multiply" name="opert"/>
        <input type="submit" value="Divide" name="opert"/>
    </form>
</body>
</html>