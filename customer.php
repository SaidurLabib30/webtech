<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
<form action="confirmation.php" method="post" class="customer">
    <h1>Customer Registration Form</h1>
    <fieldset>
        <legend><h3>Personal Information</h3></legend>
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="firstname" required></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lastname" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><input type="tel" name="phone" required></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="dob" required></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male" required> Male
                    <input type="radio" name="gender" value="female"> Female
                </td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="address" rows="3" cols="20" required></textarea></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass" required></td>
            </tr>
            <tr>
                <td>Re-Enter Password:</td>
                <td><input type="password" name="repass" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="policy" required>
                    <b>I accept all the terms, policies, and conditions.</b>
                </td>
            </tr>
        </table>
 
        <input type="submit" name="customer_submit" value="Sign Up">
        <input type="reset" value="Reset">
    </fieldset>
</form>
 
</body>
</html>