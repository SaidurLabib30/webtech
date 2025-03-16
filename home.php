<!DOCTYPE html>
<html>
 
<head>
    <title>Customer Registration</title>
</head>
 
<body>
<form action="control.php">

    <form  >
        <h2>Customer Registration Form</h2>
        <fieldset>
            <legend>
                <h3>Personal Information</h3>
            </legend>
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" id="fname" name="firstname" ></td>
                   
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" id="lname" name="lastname" ></td>
                 
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" id="email" name="email" ></td>
                
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="tel" id="phone" name="phone" ></td>
               
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" id="dob" name="dob" ></td>
                 
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="male" >Male
                        <input type="radio" name="gender" value="female">Female
                        
 
                    </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea id="address" name="address" rows="3" cols="20" ></textarea></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="pass" name="pass" ></td>
                </tr>
                <tr>
                    <td>Re-Enter Password:</td>
                    <td><input type="password" id="repass" name="repass" ></td>
               
                </tr>
                
               
            </table>
 
            <input type="submit" name="submit" value="Sign UP">
            <input type="reset" name="reset" value="Reset">
         
    </form>
    </fieldset>
</body>
 
</html>
 