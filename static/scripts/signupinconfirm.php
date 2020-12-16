<?php
    function insert_data($connection){
        $first_name = legal_input($_POST['firstname']); 
        $last_name = legal_input($_POST['lastname']);
        $email= legal_input($_POST['email']);
        $phone = legal_input($_POST['phone']); 
        $password = legal_input($_POST['password']);

        $query= "INSERT INTO `customers` (`Cust_Last_Name`, `Cust_First_Name`, `Cust_Phone_Number`, `Cust_Email_Address`, `Cust_Address_Line`, `Cust_City`, `Cust_Postal_Code`, `Cust_Gender`, `Cust_Password`) VALUES ('$last_name','$first_name','$phone','$email', NULL, NULL, NULL, NULL, '$password')";

        $exec= mysqli_query($connection, $query);

        if($exec){
            echo '<script>alert("Your account has been created")</script>';
      
        }else{
            $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
            echo '<script>alert("Error'.$msg.'")</script>';
        }
    }

    function sign_in_confirm($connection, $email, $password){
        //$signInEmail = legal_input($_POST['signinemail']);
        //$singInPassword = legal_input($_POST['signinpassword']);

        $query = "SELECT * FROM `customers` WHERE `Cust_Email_Address` = '$email' AND `Cust_Password` = '$password'";

        $exec = mysqli_query($connection, $query);

        if($exec){
            $fetch = mysqli_fetch_array($exec);
            return $fetch['Cust_Email_Address'];
        }
    }

    function get_sign_id($email, $connection){
        $query = "SELECT * FROM `customers` WHERE `Cust_Email_Address` = '$email'";
        $exec = mysqli_query($connection, $query);
        if($exec){
            $fetch = mysqli_fetch_array($exec);
            return $fetch['Customer_ID'];
        }
    }


    function legal_input($value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }

    function save_customer_info($connection){
        $first_name = legal_input($_POST['fname']); 
        $last_name = legal_input($_POST['lname']);
        $email= legal_input($_POST['email']);
        $phone = legal_input($_POST['phone']); 
        $addline = legal_input($_POST['addline']); 
        $pcode = legal_input($_POST['pcode']); 
        $city = legal_input($_POST['city']); 
        $gender = legal_input($_POST['gender']); 
        $password = legal_input($_POST['password']);

        

        $cookieInfo = $_COOKIE['USERID'];
        $savequery = "UPDATE `customers` SET `Cust_Last_Name` = '$last_name', `Cust_First_Name` = '$first_name', `Cust_Email_Address` = '$email', `Cust_Address_Line` = '$addline', `Cust_City` = '$city', `Cust_Postal_Code` = '$pcode', `Cust_Gender` = '$gender', `Cust_Password` = '$password' WHERE `customers`.`Customer_ID` = $cookieInfo;";

        $exec = mysqli_query($connection, $savequery);

        return $email;
    }

?>