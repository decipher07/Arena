console.log("hello");

function myFunction() {
    console.log(document.getElementById("flexRadioDefault2").checked ? gender = "female" : gender = "male");
    // console.log(gender)
    let phoneNumber = document.getElementById("Phone").value;
    let emailId = document.getElementById("E-mail-ID").value;

    let password = document.getElementById("Password").value;
    let retypePassword = document.getElementById("Retype-Password").value;

    if ( password != retypePassword )
        alert("Please Match your password")

    if ( phoneNumber.length != 10 || isNaN(phoneNumber))
        alert("Phone Number Incorrect");
    
        
    var searchIndex = emailId.indexOf("@");
    var searchChangeCom = emailId.lastIndexOf(".");
    if (searchIndex < 1 || searchChangeCom < searchIndex + 2 || searchChangeCom + 2 >= emailId.length )
       alert("Please Enter a valid Email Address");

    
}