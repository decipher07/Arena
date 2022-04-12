<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping View</title>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="text-center">Products Available</h1>
    <form action="shoppingcart.php" method="get">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Rate Of Product</th>
                    <th>Quantity In Stock</th>
                    <th>Quantity Total</th>
                </tr>
            </thead>

        <?php
            // Links
            $link = mysqli_connect("localhost", "root", "godlove@56", "ASSIGNMENTS");
            if ($link == false)
                die("ERROR: Could not connect. " . mysqli_connect_error());

            // Query
            $sql = "SELECT * FROM INVENTORY";

            // Execution
            if (!($result = mysqli_query($link, $sql)))
                echo ( mysqli_error($link));

            // Table Display
            while ($row = mysqli_fetch_array($result)){
                echo ("<tr>");
                echo ("<td>".$row["PRODUCTID"]."</td>");
                echo ("<td>".$row["PRODUCTNAME"]."</td>");
                echo ("<td>".$row["RATEOFPRODUCT"]."</td>");
                echo ("<td>".$row["QUANTITYINSTOCK"]."</td>");
                echo ("<td>".$row["QUANTITYTOTAL"]."</td>");
                echo ("<td><input type=\"text\" class=\"form-control\" name=product".$row["PRODUCTID"]." placeholder=\"Enter Quantity\" aria-label=\"Quantity\" aria-describedby=\"basic-addon1\"></td>");
                echo("</tr>");
            }
        ?>
        </table>
        <div class="text-center">
            <button type="submit" class="btn btn-primary"><a href="http://localhost:5000/MWA-Lab-Assignment-5/shoppingorder.php?custid=567"></a>Submit</button>
        </div>
    </form>

    <?php
        // Checking if all values set or not.
        if ( isset($_GET["product1"]) && isset($_GET["product2"]) && isset($_GET["product3"]) && isset($_GET["product4"]) && isset($_GET["product5"])){
            $product1 = $_GET["product1"];
            $product2 = $_GET["product2"];
            $product3 = $_GET["product3"];
            $product4 = $_GET["product4"];
            $product5 = $_GET["product5"];

            // Preparing the statements
            $sql = "INSERT INTO CUSTOMER (CUSTOMERID, CUSTOMERNAME, PRODUCTID, QUANTITY) VALUES (?, ?, ?, ?)"; 

            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "ssss", $customerid, $customername, $productid, $quantity);
                
                for ( $i = 1; $i <= 5; $i++ ){
                    // Forming the String
                    $inital = "product";
                    $inital .=  $i;
                    
                    // Populating the Data
                    $customerid = 567;
                    $customername = "Radhe";
                    $productid = $i;
                    $quantity = $_GET[$inital];

                    // Continue for No Orders
                    if ( $quantity == 0 )
                        continue;

                    // Query for getting the Current In Stock for the User;
                    $query = "SELECT QUANTITYINSTOCK FROM INVENTORY WHERE PRODUCTID =". $i;
                    
                    if (!($availability = mysqli_query($link, $query)))
                        echo ( mysqli_error($link));

                    $total_array = mysqli_fetch_array($availability);

                    // Error Message
                    if ( $quantity > $total_array["QUANTITYINSTOCK"] )
                        die("<h1 class=\"text-center\">Sorry, Please Buy Limited Available Stock</h1>");
                
                    // Query to reduce the count of Quantity of the given product.
                    $query = "UPDATE INVENTORY SET QUANTITYINSTOCK = QUANTITYINSTOCK - 1 WHERE PRODUCTID = ". $i;

                    if (!($updates = mysqli_query($link, $query)))
                        echo ( mysqli_error($link));

                    mysqli_stmt_execute($stmt);             
                }
            } else {
                echo(mysqli_error($link));
            }

            echo ("<h1 class=\"text-center\">Thank You, Please Move Ahead.</h1>");
            header("Location: http://localhost:5000/MWA-Lab-Assignment-5/shoppingorder.php?custid=567");
        }
            
    ?>

</body>
</html>