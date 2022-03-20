<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Six Part A</title>
</head>
<body>
    <?php
    
        $expire_time=60*60*24*60+time();
        setcookie('dates_changed',date("G:i -m/d/y"),$expire_time);
        
        if(isset($_COOKIE['dates_changed'])) {
            $last_changed=$_COOKIE['dates_changed'];
            echo "Your last visit was- " .$_COOKIE['dates_changed'];
        }
        else 
            echo "No Cookies Detected!" ;
    

    ?>
</body>
</html>