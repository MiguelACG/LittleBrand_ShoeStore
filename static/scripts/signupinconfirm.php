<?php
    function insert_data($connection){
        $first_name = legal_input($_POST['firstname']); 
        $last_name = legal_input($_POST['lastname']);
        $email= legal_input($_POST['email']);
        $phone = legal_input($_POST['phone]']); 
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

    function sign_in_confirm($connection){
        $singInEmail = legal_input($_POST['singinemail']);
        $singInPassword = legal_input($_POST['signinpassword']);

        $query = "SELECT * FROM `customers` WHERE `Cust_Email_Address` = '$singInEmail' AND `Cust_Password` = '$singInPassword'";

        $exec = mysqli_query($connection, $query);

        if($exec){
            $fetch = mysqli_fetch_array($exec);
            
            return $fetch['Cust_Email_Address'];
        }
    }


    function legal_input($value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }

?>