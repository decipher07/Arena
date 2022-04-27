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

        <div class="container-fluid">

            <h1 class="text-center"> *--*-- Registration --*--* </h1>
            <hr />

            <form name="currentForm" action="starting.php" method="GET">

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label for="Name" class="form-label">
                            <h1 class="see-font">NAME</h1>
                        </label>
                    </div>
                    <div class="col-7">
                        <input type="text" id="Name" name="Name" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label for="Middlename" class="form-label">
                            <h1 class="see-font">Middlename</h1>
                        </label>
                    </div>
                    <div class="col-7">
                        <input type="text" id="Middlename" name="Middlename" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label for="Lastname" class="form-label">
                            <h1 class="see-font">Lastname</h1>
                        </label>
                    </div>
                    <div class="col-7">
                        <input type="text" id="Lastname" name="Lastname" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <h1 class="see-font">GENDER</h1>
                    </div>
                    <div class="col-7">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="male">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked value="female">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <h1 class="see-font">OCCUPATION</h1>
                    </div>
                    <div class="col-7">
                        <select class="form-select" id="checking" aria-label="Default select example">
                            <option selected>Student</option>
                            <option value="1">Software Engineer</option>
                            <option value="2">Product Manager</option>
                            <option value="3">Vice President</option>
                        </select>
                    </div>
                </div> -->


                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label for="Phone" class="form-label">
                            <h1 class="see-font">Phone</h1>
                        </label>
                    </div>
                    <div class="col-1" style="width: 48px;">
                        <input type="text" name="alreadySet" id="alreadySet" value="+91" class="form-control">
                    </div>      
                    <!-- <div class="col-6"> -->
                        <div class="col-6" style="width: 40%;">
                            <input type="text" id="Phone"  name="phone" class="form-control">
                        </div>
                    <!-- </div> -->
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label for="Address" class="form-label">
                            <h1 class="see-font">Address</h1>
                        </label>
                    </div>
                    <div class="col-7">
                        <div class="col-7">
                            <input type="text" id="Address" class="form-control" name="address" style="height: 80px;">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label for="E-mail-ID" class="form-label">
                            <h1 class="see-font">E-mail-ID</h1>
                        </label>
                    </div>
                    <div class="col-7">
                        <div class="col-7">
                            <input type="text" id="E-mail-ID" name="emailid" class="form-control">
                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label for="Hobbies" class="form-label">
                            <h1 class="see-font">Hobbies</h1>
                        </label>
                    </div>
                    <div class="col-7">
                        <div class="col-7">
                            <input class="form-check-input" type="checkbox" value="Browsing" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Browsing
                            </label>
                            <input class="form-check-input" type="checkbox" value="Reading Books" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Reading Books
                            </label>
                            <input class="form-check-input" type="checkbox" value="Driving" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Driving
                            </label>
                            <input class="form-check-input" type="checkbox" value="Gardening" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Gardening
                            </label>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label for="User-ID" class="form-label">
                            <h1 class="see-font">User-ID</h1>
                        </label>
                    </div>
                    <div class="col-7">
                        <div class="col-7">
                            <input type="text" id="User-ID" class="form-control">
                        </div>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label for="Password" class="form-label">
                            <h1 class="see-font">Password</h1>
                        </label>
                    </div>
                    <div class="col-7">
                        <div class="col-7">
                            <input type="password" id="Password"  name="password" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">

                    </div>
                    <div class="col-2">
                        <label for="Retype-Password" class="form-label">
                            <h1 class="see-font">Retype-Password</h1>
                        </label>
                    </div>
                    <div class="col-7">
                        <div class="col-7">
                            <input type="password" id="Retype-Password" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-2">
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary" onclick="">Submit</button>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-primary">Back</button>
                    </div>
                    <div class="col-3">
                    </div>
                </div>

            </form>

        </div>

        <div class="d-flex justify-content-center my-5">
            <table class="table table-striped">
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Gender Name</th>
                    <th>Password</th>
                </tr>
            
            <?php 
            // http://localhost:5000/Templates/Question-1/starting.php?Name=asdf&Middlename=safd&Lastname=asdf&flexRadioDefault=female&alreadySet=%2B91&phone=asdf&address=sdaf&emailid=asdf&password=sadf
                // echo ("Script HERE!");
                $firstName = $_GET["Name"];
                $middleName = $_GET["Middlename"];
                $lastName = $_GET["Lastname"];
                $gender = $_GET["flexRadioDefault"];
                $phone = $_GET["phone"];
                $email = $_GET["emailid"];
                $password = $_GET["password"];
    
                if (!($link = mysqli_connect("localhost", "root", "godlove@56", "ASSIGNMENTS")))
                    die(mysqli_connect_error());
    
                $sql = "INSERT INTO STUDENT (FIRSTNAME, MIDDLENAME, LASTNAME, GENDER, PHONE, EMAIL, PASSWORD ) VALUES (?,?,?,?,?,?,?)";
                
                if ( $stmt = mysqli_prepare($link, $sql)){
                    mysqli_stmt_bind_param($stmt, "sssssss", $fn, $md, $ln, $gd, $ph, $em, $pwd );

                    $fn = $firstName;
                    $md = $middleName;
                    $ln = $lastName;
                    $gd = $gender;
                    $ph = $phone;
                    $em = $email;
                    $pwd = $password;

                    mysqli_stmt_execute($stmt);
                    echo ("SUCCESS");
                } else {
                        echo(mysqli_error($link));
                }

                // if ( !($result = mysqli_query($link, $sql)))

                $sql = "SELECT * FROM STUDENT";
    
                $result = mysqli_query($link, $sql);
                
                while ($total = mysqli_fetch_array($result)){
                    echo ("<tr>");
                    echo ("<td>".$total["FIRSTNAME"]."</td>");
                    echo ("<td>".$total["MIDDLENAME"]."</td>");
                    echo ("<td>".$total["LASTNAME"]."</td>");
                    echo ("<td>".$total["GENDER"]."</td>");
                    echo ("<td>".$total["PASSWORD"]."</td>");
                    echo ("</tr>");
                }
            ?>
            </table>
        </div>
    </section>
</body>

</html>