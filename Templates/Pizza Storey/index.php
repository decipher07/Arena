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
    <section class="hero">
        <h1 class="text-center">Pizza Order System</h1>

        <form action="index.php" method="get">
            <div class="d-flex justify-content-center">
                <div class="d-flex mx-5">
                    <label for="CustomerName" class="form-label">
                        <h1 class="see-font p-2">CustomerName</h1>
                    </label>
                    <input type="text" id="CustomerName" name="CustomerName" class="form-control mx-3">
                </div>
                <div class="d-flex mx-5">
                    <label for="PhoneNumber" class="form-label">
                        <h1 class="see-font p-2">Phone Number</h1>
                    </label>
                    <input type="text" name="PhoneNumber" id="PhoneNumber" class="form-control mx-3">
                </div>
            </div>

            <div class="outerMainDiv my-2" style="border: 2px solid black;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td style="width: 5%; text-align: center;"><b>Pizza Image</b></td>
                            <td style="width: 15%; text-align: center;"><b>Pizza Choice</b></td>
                            <td style="width: 5%; text-align: center;"><b>Pizza Quantity</b></td>
                            <td style="width: 5%; text-align: center;"><b>Pizza Unit Price</b></td>
                        </tr>
                    </thead>
                    <tr>
                        <td> <img src="../../MWA-Lab-Assignment-1/Question 2/images/banana.jpeg"></td>
                        <td style="vertical-align: middle; text-align: center;">Big Italy</td>
                        <td style="vertical-align: middle; text-align: center;"><input type="number" id="quantity1" name="quantity1" style="width: 50%;"></td>
                        <td style="vertical-align: middle; text-align: center;"><input type="text" id="unit1" value="19" name="unit1" style="width: 50%;"></td>
                    </tr>
                    <tr>
                        <td> <img src="../../MWA-Lab-Assignment-1/Question 2/images/apple.jpeg"></td>
                        <td style="vertical-align: middle; text-align: center;">Meat Lover</td>
                        <td style="vertical-align: middle; text-align: center;"><input type="number" id="quantity2" name="quantity2" style="width: 50%;"></td>
                        <td style="vertical-align: middle; text-align: center;"><input type="number" id="unit2" name="unit2" value="19" style="width: 50%;"></td>
                    </tr>
                    <tr>
                        <td> <img src="../../MWA-Lab-Assignment-1/Question 2/images/coconut.jpeg"></td>
                        <td style="vertical-align: middle; text-align: center;">Veggie Lover</td>
                        <td style="vertical-align: middle; text-align: center;"><input type="number" id="quantity3" name="quantity3" style="width: 50%;"></td>
                        <td style="vertical-align: middle; text-align: center;"><input type="number" id="unit3" name="unit3" value="19" style="width: 50%;"></td>
                    </tr>
                </table>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        
        <?php 
            if ( isset($_GET["CustomerName"]) && isset($_GET["PhoneNumber"]) && isset($_GET["quantity1"]) && isset($_GET["unit1"]) && isset($_GET["quantity2"]) && isset($_GET["quantity3"]) && isset($_GET["unit2"]) && isset($_GET["unit3"]) ){
                $customerName = $_GET["CustomerName"];
                $phoneNumber = $_GET["PhoneNumber"];
                $unit1 = $_GET["unit1"];
                $unit2 = $_GET["unit2"];
                $unit3 = $_GET["unit3"];
                $quantity1 = $_GET["quantity1"];
                $quantity2 = $_GET["quantity2"];
                $quantity3 = $_GET["quantity3"];
                
                $link = mysqli_connect("localhost", "root", "godlove@56", "ASSIGNMENTS");
                
                $sql = "INSERT INTO PIZZAS (PRODUCTID, QUANTITY, UNITPRICE, CUSTOMERID, PHONE) VALUES (?,?,?,?,?)" ;

                if ( $stmt = mysqli_prepare($link, $sql) ){
                    mysqli_stmt_bind_param($stmt, "sssss", $pid, $qty, $utp, $cutid, $cutph );
                    
                    for ( $i = 1 ; $i <= 3 ; $i++ ){
                        $qty = "quantity";
                        $qty .= $i;
                        
                        $units = "unit";
                        $units .= $i ;

                        $qty = $_GET[$qty];
                        $utp = $_GET[$units];
                        $pid = $i;
                        $cutid = $customerName;
                        $cutph = $phoneNumber;

                        mysqli_stmt_execute($stmt);
                        echo ("SUCCESS");
                    }

                } else {
                    echo ( mysqli_error($link) );
                }
            }
        
        ?>
    </section>
</body>

</html> 