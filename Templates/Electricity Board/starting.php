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
    <section class="hero">
        <h1 class="text-center">Electricity Billing SYstem</h1>

        <div class="d-flex justify-content-center">
            <form action="starting.php" method="get">

                <div class="row">
                    <!-- <div class="col-3"></div> -->
                    <div class="col">
                        <label for="CustomerId" class="form-label">
                            <h1 class="see-font">CustomerId</h1>
                        </label>
                    </div>
                    <div class="col">
                        <input type="text" id="CustomerId" name="CustomerId" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <!-- <div class="col-3"></div> -->
                    <div class="col">
                        <label for="CustomerName" class="form-label">
                            <h1 class="see-font">CustomerName</h1>
                        </label>
                    </div>
                    <div class="col">
                        <input type="text" id="CustomerName" name="CustomerName" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <!-- <div class="col-3"></div> -->
                    <div class="col">
                        <label for="Unit" class="form-label">
                            <h1 class="see-font">Unit</h1>
                        </label>
                    </div>
                    <div class="col">
                        <input type="text" id="Unit" name="Unit" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <button type="submit" onclick="myFunction()">Submit</button>
                </div>

            </form>
        </div>
        <?php
        if (isset($_GET["CustomerId"]) && isset($_GET["CustomerName"]) && isset($_GET["Unit"])) {
            $customerId = $_GET["CustomerId"];
            $customerName = $_GET["CustomerName"];
            $units = $_GET["Unit"];


            if ($units < 200)
                $costs = $units * 1.50;
            else if ($units >= 200 && $units < 400)
                $costs = $units * 2.00;
            else if ($units >= 400 && $units < 600)
                $costs = $units * 2.50;
            else
                $costs = $units * 3.00;

            echo ("<div class=\"row text-center\"><p>Your Bill is " . $costs . "</p></div>");

            if ( !($link = mysqli_connect("localhost", "root", "godlove@56", "ASSIGNMENTS")))
                echo ( mysqli_connect_error());

            $sql = "SELECT EXISTS(SELECT * FROM ELECTRICITY WHERE CUSTOMERID=".$customerId.")";
            
            if ( !($result = mysqli_query($link, $sql)) )
                echo (mysqli_error($link));

            $total_array = mysqli_fetch_array($result);

            $sql = "INSERT INTO ELECTRICITY (CUSTOMERID, CUSTOMERNAME, UNIT, COST) VALUES (?,?,?,?)";

            if ( $stmt = mysqli_prepare($link, $sql) ){
                mysqli_stmt_bind_param($stmt, "ssss", $id, $name, $ut, $ct );
                $id = $customerId;
                $name = $customerName;
                $ut = $units;
                $ct = $costs;

                mysqli_stmt_execute($stmt);
                echo ("SUCCESS");

                header("Location: http://localhost:5000/Templates/Electricity%20Board/showtable.php?custid=1");
            }
        }
        ?>

    </section>
</body>

</html>