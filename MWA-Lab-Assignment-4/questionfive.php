<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./style.css">
    <!-- <script src="index.js"></script> -->
</head>

<body>

    <section class="hero">

        <div class="container-fluid">

            <h1 class="text-center"> *--*-- Registration --*--* </h1>
            <hr />

            <form name="currentForm" action="questionfive.php" method="post">

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label for="Name" class="form-label">
                            <h1 class="see-font">NAME</h1>
                            <div style="margin-top: -0.75em">
                                Add your name
                            </div>
                        </label>
                    </div>
                    <div class="col-7">
                        <input type="text" id="Name" name="name" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <h1 class="see-font">Priority</h1>
                        <div style="margin-top: -0.75em">
                            Priority Level
                        </div>
                    </div>
                    <div class="col-7">
                        <select class="form-select" name="level" aria-label="Default select example">
                            <option selected>High</option>
                            <option value="1">Low</option>
                            <option value="2">Medium</option>
                            <option value="3">Vulnerable</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <h1 class="see-font">Type</h1>
                        <div style="margin-top: -0.75em">
                            Type of Contact
                        </div>
                    </div>
                    <div class="col-7">
                        <select class="form-select" name="website" aria-label="Default select example">
                            <option selected>Website Updation</option>
                            <option value="1">Website Creation</option>
                            <option value="2">Website Change</option>
                            <option value="3">Website Nothing</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label for="Phone" class="form-label">
                            <h1 class="see-font">Phone</h1>
                            <div style="margin-top: -0.75em">
                                Add a Phone Number
                            </div>
                        </label>
                    </div>
                    <div class="col-7">
                        <div class="col-7">
                            <input type="text" id="Phone" name="phone" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label for="E-mail-ID" class="form-label">
                            <h1 class="see-font">E-mail-ID</h1>
                            <div style="margin-top: -0.75em">
                                Enter a Valid Email
                            </div>
                        </label>
                    </div>
                    <div class="col-7">
                        <div class="col-7">
                            <input type="text" id="E-mail-ID" name="emailid" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label for="Message" class="form-label">
                            <h1 class="see-font">Message</h1>
                            <div style="margin-top: -0.75em">
                                Type Your Message
                            </div>
                        </label>
                    </div>
                    <div class="col-7">
                        <div class="col-7">
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                        <button type="submit" class="btn btn-primary" name="opert" onclick="myFunction()">Submit</button>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-primary">Back</button>
                    </div>
                    <div class="col-3">
                    </div>
                </div>

            </form>

        </div>

    </section>
    
    <?php 
        if (isset($_POST["opert"]) && isset($_POST["name"]) && isset($_POST["level"]) && isset($_POST["website"]) && isset($_POST["phone"]) && isset($_POST["emailid"])){
            $name = $_POST["name"];
            $priority = $_POST["level"];
            $website = $_POST["website"];
            $phone = $_POST["phone"];
            $emailid = $_POST["emailid"];
            
            if (!filter_var($emailid, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "<h1 class=\"text-center\">Invalid email format</h1>";
                echo($emailErr);
            }


            $check_phone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
            $phone_to_check = str_replace("-", "", $check_phone);

            if (strlen($phone_to_check) < 10 ) {
                echo("<h1 class=\"text-center\">Enter a Valid Phone Number</h1>");
            } 

        }
        else {
            echo ("<h1 class=\"text-center\">Please fill all the forms</h1>");
        }
    
    ?>
</body>

</html>