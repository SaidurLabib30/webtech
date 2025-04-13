<!DOCTYPE html>
<html>
<head>
    <title>Admin Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
    function validateForm() {
        let form = document.forms["adminForm"];
        let errorMsg = "";

        let fnameError = "";
        let lnameError = "";
        let emailError = "";
        let phoneError = "";
        let adminIdError = "";
        let dobError = "";
        let genderError = "";
        let addressError = "";
        let passError = "";
        let repassError = "";

        //  alert
        let fname = form["firstname"].value;
        if (fname === "") {
            alert("First Name must be filled out");
            return false;
        }

        
        let lname = form["lastname"].value;
        let email = form["email"].value;
        let phone = form["phone"].value;
        let adminId = form["admin_id"].value;
        let dob = form["dob"].value;
        let gender = form["gender"];
        let address = form["address"].value;
        let pass = form["pass"].value;
        let repass = form["repass"].value;

        let genderSelected = false;
        for (let i = 0; i < gender.length; i++) {
            if (gender[i].checked) {
                genderSelected = true;
                break;
            }
        }

        let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        let phonePattern = /^\d{10,}$/;

        if (lname === "") lnameError = "Last name is required.";
        if (!emailPattern.test(email)) emailError = "Please enter a valid email address.";
        if (!phonePattern.test(phone)) phoneError = "Phone number must be at least 11 digits long.";
        if (adminId === "") adminIdError = "Admin ID is required.";
        if (dob === "") dobError = "Date of birth is required.";
        if (!genderSelected) genderError = "Gender must be selected.";
        if (address === "") addressError = "Address is required.";
        if (pass.length < 6) passError = "Password must be at least 6 characters long.";
        if (pass !== repass) repassError = "Passwords do not match.";

        document.getElementById("fnameError").innerHTML = fnameError;
        document.getElementById("lnameError").innerHTML = lnameError;
        document.getElementById("emailError").innerHTML = emailError;
        document.getElementById("phoneError").innerHTML = phoneError;
        document.getElementById("adminIdError").innerHTML = adminIdError;
        document.getElementById("dobError").innerHTML = dobError;
        document.getElementById("genderError").innerHTML = genderError;
        document.getElementById("addressError").innerHTML = addressError;
        document.getElementById("passError").innerHTML = passError;
        document.getElementById("repassError").innerHTML = repassError;

        return lnameError === "" && emailError === "" && phoneError === "" && adminIdError === "" &&
               dobError === "" && genderError === "" && addressError === "" && passError === "" && repassError === "";
    }
    </script>
</head>
<body>

<form name="adminForm" action="confirmation.php" method="post" class="admin" onsubmit="return validateForm()" novalidate>
    <h1>ADMIN Registration Form</h1>
    <fieldset>
        <legend><h3>Personal Information</h3></legend>
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="firstname"></td>
            </tr>
            <tr>
                <td><span id="fnameError" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lastname"></td>
                <td><span id="lnameError" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td><span id="emailError" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><input type="tel" name="phone"></td>
            </tr>
            <tr>
                <td><span id="phoneError" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>Admin ID:</td>
                <td><input type="text" name="admin_id"></td>
            </tr>
            <tr>
                <td><span id="adminIdError" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="dob"></td>
            </tr>
            <tr>
                <td><span id="dobError" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                </td>
            </tr>
            <tr>
                <td><span id="genderError" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="address" rows="3" cols="20"></textarea></td>
            </tr>
            <tr>
                <td><span id="addressError" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td><span id="passError" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>Re-Enter Password:</td>
                <td><input type="password" name="repass"></td>
            </tr>
            <tr>
                <td><span id="repassError" style="color:red;"></span></td>
            </tr>
        </table>

        <input type="submit" name="admin_submit" value="Sign Up">
        <input type="reset" value="Reset">
    </fieldset>
</form>

</body>
</html>
