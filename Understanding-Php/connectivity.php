<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Record Form</title>
</head>

<body>
    <!-- <form action="connectivity.php" method="post">
        <p>
            <label for="firstName">First Name:</label>
            <input type="text" name="first_name" id="firstName">
        </p>
        <p>
            <label for="lastName">Last Name:</label>
            <input type="text" name="last_name" id="lastName">
        </p>
        <p>
            <label for="emailAddress">Email Address:</label>
            <input type="text" name="email" id="emailAddress">
        </p>
        <input type="submit" value="Submit">
    </form> -->

    <form action="connectivity.php"></form>

</body>

</html>

<?php
// $str = "Hello World WORLD SAworld!";
// echo $str . "<br>";
// echo chop($str,"World!")
// echo strpbrk("asdfsdafsasafdHasddfasdfallo world!","eo");

// echo strstr("Hello world!","WORLD"); 
// $str = addcslashes("Hello World!","W");

// echo stripcslashes("Hello \World!");

echo date("d");

// echo($str); 

    // echo date("l") . "<br>";
    // // Prints the day, date, month, year, time, AM or PM
    // echo date("w z F m M t Y y a A h H i s d D l jS \of F Y h:i:s A") . "<br>";
    // // Prints October 3, 1975 was on a Friday
    // echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br>";

    // $age = 25;
    // if ($age < "10")
    // {
    // echo "hi child!";
    // } elseif ($age < "20")
    // {
    // echo "Hi adult!";
    // } else
    // {
    // echo "Hi ladies and gentlemen!";
    // } 
    // A simple string
    // echo 'I am an Indian. ';
    // echo "<br>";
    // // use of back-slash to display string with apostrophe
    // echo 'It\'ll be interesting to know about the India. ';
    // echo "<br>";

    // // to escape the backslash within the string
    // echo 'A \\ is named as backslash. ';

    // // The variable will not be evaluated if used directly within the single-quoted string
    // $string = 'geeks';
    // echo 'This is $string. ';
    // echo"\n";

    // // The \n will be displayed as it is without having any special meaning.
    // echo "This is a portal for \n geeks. "; 

// $cas = "A";

// echo $cas."asd";

// $link = mysqli_connect("localhost", "root", "godlove@56", "demo1");

// if ( $link == false )
// {
//     echo ( mysqli_connect_error());
// }

// // 'change', 'changes_happen', 'changes@gmail.com'
// $sql = "INSERT INTO persons(first_name, last_name, email) VALUES (?,?,?)";

// if ( $stmt = mysqli_prepare($link, $sql)){
//     mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);

//     $first_name = "changes";
//     $last_name = "hellohappen";
//     $email = "asfs@gmail.com";

//     mysqli_stmt_execute($stmt);
// } else
//     echo mysqli_error($link);

// mysqli_multi_query($link, $sql);

// $sql = "CREATE INDEX idx ON persons(first_name, last_name)";
// if (mysqli_query($link, $sql))
//     echo ("Correct");
// else
//     echo (mysqli_error($link));



// $link = mysqli_connect("localhost", "root", "godlove@56", "demo1");

// if (!$link)
//     echo ("ERROR" . mysqli_connect_error());

// if ($link === false) {
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }

// $num = 1 ;
// // $sql = "DELETE FROM persons WHERE id=$num"; 
// $sql = "UPDATE persons SET email='namratha@gmail.com' WHERE id=3";
// if(mysqli_query($link, $sql)){
//     echo "Records were deleted successfully.";
// }else{
//  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }

// $num = 1;
// $sql = `DELETE FROM persons WHERE id=$num`;
// if ($mysqli_query($link, $sql))
//     echo ( "asdfasFD" . mysqli_error($link));
// if ( mysqli_num_rows($result) > 0 )
// {
//     echo "<table border=2>";
//     echo "<tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";

//     while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC))
//     {
//         echo "<tr>";
//         echo ("<td>". $row["id"] . "</td>");
//         echo ("<td>". $row["first_name"] . "</td>");
//         echo ("<td>". $row["last_name"] . "</td>");
//         echo ("<td>". $row["email"] . "</td>");
//     }
//     echo "</table>";
// }

// mysqli_free_result($result);


// $sql = "SELECT first_name, last_name FROM persons";
// $result = mysqli_query($link, $sql );

// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// echo ( $row["first_name"]." ". $row["last_name"]);

// mysqli_free_result($result);








// $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ( ?, ?, ? )";
// if ( $stmt = mysqli_prepare($link, $sql))
// {
//     mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email );

//     $first_name = "checking";
//     $last_name = "working";
//     $email = "asdadfs@gmail.com";

//     mysqli_stmt_execute($stmt);
// }
// else
//     echo mysqli_error($link);




// Prepare an insert statement
// $sql = "INSERT INTO persons VALUES (?, ?, ?)";
// if ($stmt = mysqli_prepare($link, $sql)) {
//     mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);
//     $first_name = "Hermionea";
//     $last_name = "Grangear";
//     $email = "hermionegraasnger@mail.com";
//     mysqli_stmt_execute($stmt);
//     $first_name = "Roan";
//     $last_name = "Weasaley";
//     $email = "ronweasleay@mail.com";
//     mysqli_stmt_execute($stmt);
//     echo "Records inserted successfully.";
// } else {
//     echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
// }

// $sql = "INSERT INTO persons VALUES (?,?,?)";
// echo ("asdfad");
// if ( $stmt = mysqli_prepare($link, $sql))
// {
//     mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email );
//     $first_name = "namratha";
//     $last_name = "gowri";
//     $email = "some@gmail.com";
//     mysqli_stmt_execute($stmt);
//     // $first_name = "others";
//     // $last_name = "godea";
//     // $email = "sdsome@gmail.com";
//     // mysqli_stmt_execute($stmt);
// }

// mysqli_stmt_close($stmt);
// mysqli_close($link);

// $link = mysqli_connect("localhost", "root", "godlove@56");

// if ( $link == false ){
//     die ("Error" . mysqli_connect_error());
// }

// $sql = "CREATE DATABASE demo1";

// if ( mysqli_query($link, $sql) )
//     echo ("Created!");
// else
//     die ("Error" . mysqli_connect_error());

// mysqli_close($link);

// $link = mysqli_connect("localhost", "root", "godlove@56", "demo1");

// if ($link == false)
//     die("Erro121r" . mysqli_connect_error());

// $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
// $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
// $email = mysqli_real_escape_string($link, $_REQUEST['email']);
// $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";

// if (mysqli_query($link, $sql)) {
//     echo "Records added successfully.";
// } else {
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }

// $sql = "CREATE TABLE PERSONS (
//         ID NOT NULL,
//         FIRST_NAME VARCHAR(20) NOT NULL,
//         LAST_NAME VARCHAR(20) NOT NULL,
//         EMAIL VARCHAR(20) NOT NULL UNIQUE,
//         PRIMARY KEY (ID)
//     )";
// $sql = "CREATE TABLE persons(
//     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     first_name VARCHAR(30) NOT NULL,
//     last_name VARCHAR(30) NOT NULL,
//     email VARCHAR(70) NOT NULL UNIQUE
//    )"; 

// $sql = "INSERT INTO persons VALUES
//                 (2, 'John', 'Rambo', 'johnrambo@mail.com'),
//                 (3, 'Clara', 'Kent', 'clarakent@mail.com'),
//                 (4, 'John', 'Walker', 'johnwalker@mail.com'),
//                 (5, 'Rinny', 'Bhonney', 'Rhinoo@mail.com')   
//             ";
// if (mysqli_query($link, $sql))
//     echo ("Inserted Successfully");
// else
//     die("ERROR" . mysqli_error($link));

// mysqli_close($link);
?>