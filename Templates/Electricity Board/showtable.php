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
</head>

<body>
    <table class="table table-striped">
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Unit</th>
            <th>Cost</th>
        </tr>

        <?php

            $customerId = $_GET["custid"];
            if (!($link = mysqli_connect("localhost", "root", "godlove@56", "ASSIGNMENTS")))
                echo (mysqli_connect_error());

            $sql = "SELECT * FROM ELECTRICITY WHERE CUSTOMERID=" . $customerId ;

            if (!($result = mysqli_query($link, $sql)))
                echo (mysqli_error($link));

            while ($row = mysqli_fetch_array($result)){
                echo ("<tr>");
                echo ("<td>".$row["CUSTOMERID"]."</td>");
                echo ("<td>".$row["CUSTOMERNAME"]."</td>");
                echo ("<td>".$row["UNIT"]."</td>");
                echo ("<td>".$row["COST"]."</td>");
                echo ("</tr>");
            }
        ?>
    </table>
</body>

</html>