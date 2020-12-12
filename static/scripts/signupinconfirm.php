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

    function search($connection){
        echo "yayy;";
        $keyword = legal_input($_POST['keyword']);
        
        $sqlQuery = "SELECT * FROM men_inventory, women_inventory 
            WHERE men_inventory.Product_Name LIKE '%".$keyword."%' OR women_inventory.Product_Name LIKE '%".$keyword."%'
                OR men_inventory.Product_Description LIKE '%".$keyword."%' OR women_inventory.Product_Description LIKE '%".$keyword."%' 
                OR men_inventory.Product_Color LIKE '%".$keyword."%' OR women_inventory.Product_Color LIKE '%".$keyword."%'";
        ;
        displayProducts($connection, $sqlQuery);
        /*

        $exec = mysqli_query($connection, $sqlQuery);
        
        if($exec){
            $fetch = mysqli_fetch_array($exec);
            foreach($thing in $fetch){
                
            }
            /*
                Search men_inventory, women_inventory
            
        }*/
    }



    
?>

<?php 
                function displayProducts($dataconnection, $sqlQuery){
                    $result = mysqli_query($dataconnection, $sqlQuery);

                        $womenDivHTML = '<div class="productDiv" data-query="women-all-shoes">';

                        $womenDivHTML = '<ul class="productUl" style="width:80%; margin-left:auto; margin-right:auto;">';

                        while($fetch = mysqli_fetch_array($result)){

                            $womenDivHTML .='<li class="productLi" data-object-id="prd-123">';// add css classes and the like here. In case you don't know, the .= operators concatenate the strings that will make your html code.
                            $womenDivHTML .='    <div class="productDiv2">'; // be careful with this class, as you might need to evaluate it for every run of the loop
                            $womenDivHTML.='        <a class="productA" href="index.php?page=store&inventory=women&item='.$fetch['Product_ID'].'&brandid='.$fetch['Brand_ID'].'">';
                            $womenDivHTML .='            <div class="productDiv3">';
                            $womenDivHTML.='                 <div class="productDiv4">';
                            $womenDivHTML .='                     <img class="productImg" src="'.$fetch['Product_Img'].'" alt="" />';
                            $womenDivHTML.='                  </div>';
                            $womenDivHTML .='             </div>';
                            $womenDivHTML .='             <div class="productDiv5">';
                            $womenDivHTML .='                 <span class="productSpan1">';
                            $womenDivHTML .='                     <span class="">'.$fetch['Product_Name'].'</span>';
                            $womenDivHTML .='                 </span>';
                            $womenDivHTML .='                 <p class="productP">'.$fetch['Product_Color'].'</p>';
                            $womenDivHTML.='              </div>';
                            $womenDivHTML .='         </a>';
                            $womenDivHTML.='     </div>';
                            $womenDivHTML.=' </li>';
                        }
                        $womenDivHTML .= '</ul>';
                        $womenDivHTML .= '</div>';
                        echo $womenDivHTML;
                }

            ?>