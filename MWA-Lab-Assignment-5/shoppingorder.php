<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Orders</title>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="text-center">Your Carts</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td rowspan="2" colspan="3" class="text-center" style="vertical-align: top;"><b>Shoppers Delight <br/> Phone No. 0987654321</b></td>
                <td colspan="1"><b>Date: 10.4.22</b></td>
            </tr>>
            <tr>
                <td><b>Bill No:2345678</b></td>
            </tr>
        </thead>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Rate Of Product</th>
                <th>Total Price</th>
            </tr>
        </thead>

        <?php
            // Storing Variable Address
            $customerId = $_GET["custid"];
            $sum_of_records = 0 ;
            $count_total_orders = 0;
        
            // Links
            $link = mysqli_connect("localhost", "root", "godlove@56", "ASSIGNMENTS");
            if ($link == false)
                die("ERROR: Could not connect. " . mysqli_connect_error());

            // Query
            $sql = "SELECT CUSTOMERNAME, QUANTITY, RATEOFPRODUCT, PRODUCTNAME, RATEOFPRODUCT * QUANTITY AS TOTALPRICE FROM CUSTOMER C INNER JOIN INVENTORY I ON C.PRODUCTID = I.PRODUCTID WHERE CUSTOMERID=";
            $sql .= $customerId;

            // Execution
            if (!($result = mysqli_query($link, $sql)))
                echo ( mysqli_error($link));

            // Table Display
            while ($row = mysqli_fetch_array($result)){
                echo ("<tr>");
                echo ("<td>".$row["PRODUCTNAME"]."</td>");
                echo ("<td>".$row["QUANTITY"]."</td>");
                echo ("<td>".$row["RATEOFPRODUCT"]."</td>");
                echo ("<td>".$row["TOTALPRICE"]."</td>");
                echo("</tr>");
                $sum_of_records += $row["TOTALPRICE"];
                $count_total_orders++;
            }
            
            echo ("<tr>");
            // echo ("<td colspan=\"1\">&nbsp");
            // echo ("</td>");
            echo ("<td colspan=\"1\"><b>Total No. Of Items</b>");
            echo ("</td>");
            echo ("<td colspan=\"1\"><b>");
            echo ($count_total_orders);
            echo ("</b></td>");
            echo ("<td colspan=\"1\"><b>Sum</b>");
            echo ("</td>");
            echo ("<td colspan=\"1\"><b>");
            echo ($sum_of_records);
            echo ("</b>");
            echo ("</td>");
            echo("</tr>");


        ?>

    </table>
</body>

</html>