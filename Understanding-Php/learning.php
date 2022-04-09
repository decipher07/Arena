<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Understanding Print Statements</title>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css" />
</head>
<body>

    <!-- <form action="first.php" method="get">
        Name: <input type="text" name="name" id="nameId">
        <input type="submit">
    </form> -->
    
    <!-- <form action="first.php" method="get">

        Num1: <input type="number" name="num1" id="number1"> <br>
        Num2: <input type="number" name="num2" id="number2"> <br>
        <input type="submit">
    </form>
    <br> -->

    <!-- <form action="first.php" method="get">
        Color: <input type="text" name="color" id="color"> <br>
        Roses: <input type="text" name="roses" id="roses"><br>
        Something: <input type="text" name="something" id="somethings"><br>

        <input type="submit">
    </form> -->
    
    <!-- Checkbox -->
    <!-- <form action="first.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples">
        Mango: <input type="checkbox" name="fruits[]" value="mango">
        Graphs: <input type="checkbox" name="fruits[]" value="graphs">
        <input type="submit">
    </form> -->
    
    <!-- <form action="first.php" method="post">
        <input type="text" name="student" id="student">
        <input type="submit">
    </form> -->

    <!-- <form action="learning.php" method="get">
        num1: <input type="number" name="num1" id="num1"><br>
        num2: <input type="number" name="num2" id="num2"><br>

        operation: <input type="text" name="oper" id="oper"><br>

        <input type="submit">
    </form> -->

    <br>

    <?php include "header.html" ?>

    <?php 

        $cities = array(
            "United Kingdom" => "London",
            "United States" => "Washington",
            "France" => "Paris",
            "India" => "Delhi"
        );
        // create an ArrayIterator object
        $iterator = new ArrayIterator($cities);
        // rewind to beginning of array
        $iterator->rewind();
        // iterate over array
        // print each value
        while($iterator->valid())
            {
            print $iterator->current() . " is in " . $iterator->key();
            echo"<br>";
        $iterator->next();
        } 
    // $x = array("a" => "red", "b" => "green");
    // $y = array("c" => "blue", "d" => "yellow");
    // var_dump($x == $y);
        // echo "This ", "string ", "was ", "made ", "with multiple parameters."; 
    ?>
    <!-- <p>HELLO WORLD</p> -->
    <?php include "footer.html" ?>
    <?php 
        // $title = "My First Post";
        // $author = "Mike";
        // $wordCount = 100;

        // include "article-header.php"
    ?>
    <?php


        // $checkElements = array (1,3,15,56,31,52,4);

        // for ( $i = 0 ; $i < count($checkElements); $i++ )
        //     echo ( "$checkElements[$i] <br>")

        // $index = 1 ;
        // while ( $index <= 5 ){
        //     echo( "$index <br>");
        //     $index++;
        // }

        // $num1 = $_GET["num1"];
        // $num2 = $_GET["num2"];

        // $oper = $_GET["oper"];

        // switch($oper){
        //     case '+':
        //         echo ( $num1 + $num2 );
        //         break;
        //     case '-':
        //         echo ( $num1 - $num2 );
        //         break;
        //     case '*':
        //         echo ( $num1 * $num2 );
        //         break;
        //     case "/":
        //         echo ( $num1 / $num2 );
        //         break;
        //     default:
        //         echo ( "INVALID OPERATION ");
        // }

        // if ( $oper == '+' )
        //     echo ( ($num1 + $num2));
        // if ( $oper == '-' )
        //     echo ( ($num1 - $num2));
        // if ( $oper == '*' )
        //     echo ( ($num1 * $num2));
        // if ( $oper == '/' )
        //     echo ( ($num1 / $num2));

        // function sayHi ($arg){
        //     echo( "Say Hi to $arg");
        // }

        // function cube ( $num ){
        //     return pow($num, 3 );
        // }

        // echo( cube(4));

        // $isMale = false;
        // if (  $isMale ){
        //     echo ("Hello");
        // } elseif ( !$isMale ) {
        //     echo (" Not Male ");
        // }

        // $check = 10;
        // echo ($check);

        // if ( $check == 10 ){
        //     echo ("Alpha");
        // } else {
        //     echo ("Beta");
        // }

        // sayHi("ajlkfdlkajsdlkjafslk <br>");
        // sayHi("ajlkfdlkajsdlkjafslk <br>");
        // sayHi("ajlkfdlkajsdlkjafslk <br>");

        // $grades = array( "Jim" => "A+", "Hes" => "B+", "Shes" => "C+" );
        // $grades["Jim"] = "F-";
        
        // // echo ($grades["Hes"]);
        // echo( $grades[$_POST["student"]]);
        

        // $fruits = $_POST["fruits"];
        // echo($fruits[0]);

        // for ( $i = 0 ; $i < count($fruits) ; $i++ )
        //     echo("$fruits[$i] <br> ")

        // $checkingArray = array("lkjlk", "asfdafds", 12213, "23131#", false );
        // $checkingArray[10] = "Asfadsfa";

        // echo( $checkingArray[10] );
        // echo( count($checkingArray));

        // $color = $_GET["color"];
        // $roses = $_GET["roses"];
        // $something = $_GET["something"];

        // echo ( "Hello World $color <br>");
        // echo ( "Hello World $roses <br>");
        // echo ( "Hello World $something <br>");

        // $num1 = $_GET["num1"];
        // $num2 = $_GET["num2"];

        // echo( $num1 + $num2 );
        // echo ($_GET["name"]);
        // $vara = "Sharma";
        // $varb = 20;

        // echo ("MY NAME IS $vara <br>");
        // echo ("MY NAME IS $varb");
        
        // $vara = 100;
        // echo ("MY NAME IS $vara <br>");

        // $phrase = "Hello World!";
        // $age = 10;
        // $gpa = 1.22;
        // $male = false;

        // echo ($gpa);
        // echo ($age);

        // $phrase[0] = 'A';
        // echo( $phrase );
        // echo ( strtolower($phrase));
        // echo ( strtoupper($phrase));

        // echo ( strlen(($phrase)));

        // echo ("<h1>Hello World\n</h1>")
        // echo "<h1>Hello World2</h1>";
        // echo "<hr/>"
        // echo ("Hello World3");

    ?>
</body>
</html>