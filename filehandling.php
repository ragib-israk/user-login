<?php

    $name="";
    $username="";
    $pass="";
    $email="";
    $phone="";




    $errFName="";
    $errLName="";
    $errUsername = "";
    $errPass="";
    $errUname="";
    $errEmail="";
    $errPhone="";
    $errREmail="";
    $hasErr=false;
 if(isset($_POST["Registration"]))  
 {
     if(empty($_POST["firstname"]))
     {
        $errFName .= "First Name Required <br>";
        $hasErr=true;
     }
   
   
     if(empty($_POST["lastname"]))
     {
        $errLName .= "Last Name Required <br>";
        $hasErr=true;
     }
   
     else
     {
         $name=$_POST["name"];
     }
     
     
   
     
     if(empty($_POST["mail"]))
     {
        $errEmail .= "Email Required <br>";
        $hasErr=true;
     }
     else
     {
         $email=$_POST["mail"];
     }
     


     if(empty($_POST["pass"]))
     {
        $errPass .= "Password Required <br>";
        $hasErr=true;
     }
   
     else
     {
         $pass=$_POST["pass"];
     }

     if(empty($_POST["username"]))
     {
        $errUsername .= "User name Required <br>";
        $hasErr=true;
     }
     

     if(empty($_POST["rmail"]))
     {
        $errREmail .= "Email Required <br>";
        $hasErr=true;
     }
     else
     {
         $email=$_POST["rmail"];
     }

     
     if(!$hasErr)
     {
       
         echo "<h1>There is no error</h1>";
         
     }




 }


?>
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<form  method="POST">
        <table>
        <tr>
            <td><label>First Name: </label></td>
            <td><input type="text" name="firstname"><?php echo $errFName;?> </td>
        </tr>

        <tr>
            <td><label>Last Name: </label></td>
            <td><input type="text" name="lastname" ><?php echo $errLName;?> </td>
        </tr>
       
        <tr>
            <td><label>Gender: </label></td>
            <td><input type="radio" name="gen">Male &nbsp; &nbsp; <input type="radio" name="gen">Female </td>
        </tr>
        <tr>
            <td><label>Email: </label></td>
            <td><input type="text" name="mail"><?php echo $errEmail;?> </td>
        </tr>
       
       
        </table>

            <hr>

            <table>
                <tr>
                    <td><label>User Name: </label></td>
                    <td><input type="text" name="username"><?php echo $errUsername;?> </td>

                </tr>
                <tr>
                    <td><label>Password </label></td>
                    <td><input type="text" name="pass"><?php echo $errPass;?> </td>

                </tr>
                <tr>
                    <td><label>Recovery Email: </label></td>
                    <td><input type="text" name="rmail"><?php echo $errREmail;?> </td>
                </tr>

            <tr>
           
            <td align="right">
                <input type="submit" name="Registration">
                <input type="reset" name="Reset">
            </td>
       
            </tr>
            </table>
   
   
    </form>

</body>
</html>