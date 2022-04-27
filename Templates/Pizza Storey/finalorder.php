<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../../bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <style>
        img {
            object-fit: contain;
            position: relative;
        }
    </style>
</head>

<body>
    <?php 
        $customerId = $_GET["custid"];
        if (!($link = mysqli_connect("localhost", "root", "godlove@56", "ASSIGNMENTS")))
            echo (mysqli_connect_error());

        $sql = "SELECT * FROM PIZZAS WHERE CUSTOMERID=" . $customerId;

        if (!($result = mysqli_query($link, $sql)))
            echo (mysqli_error($link));

        $totalArray = mysqli_fetch_array($result);
        echo ($totalArray["CUSTOMERID"]);
        echo ($totalArray["PHONE"]);
    ?>

    <table class="table table-striped">
        <tr>
            <th>Product ID</th>
            <th>Quantity</th>
            <th>Unit</th>
        </tr>

        <?php

        
        while ($row = mysqli_fetch_array($result)) {
            echo ("<tr>");
            echo ("<td>" . $row["PRODUCTID"] . "</td>");
            echo ("<td>" . $row["QUANTITY"] . "</td>");
            echo ("<td>" . $row["UNITPRICE"] . "</td>");
            // echo ("<td>" . $row["CUSTOMERID"] . "</td>");
            // echo ("<td>" . $row["PHONE"] . "</td>");
            echo ("</tr>");
        }
        ?>
    </table>
</body>

</html>