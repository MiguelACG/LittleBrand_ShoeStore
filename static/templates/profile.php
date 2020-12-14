
<style>
    body {
    background: rgb(99, 39, 120)
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }
</style>

<?php
    //include '../templates/index.php';
    $cookie_name = 'SIGNEDIN';
    $cust_fname = $cust_lname= $cust_phone = $cust_email = $cust_gender = $cust_address = $cust_postalCode = $cust_city = $cust_password = '';
    if(!isset($_COOKIE[$cookie_name])) {
        //echo "Cookie named '" . $cookie_name . "' is not set!";
        $signInPlsHtml = '<div style="height:600px;"><p style="width:25%; height:500px; margin-top:15%; margin-left:auto; margin-right:auto; font-size:30px; color:dark red;">Please login to access this section!</p></div>';
        echo $signInPlsHtml;
    } 
    else {
        $email = $_COOKIE[$cookie_name];
        $query = "SELECT * FROM customers WHERE Cust_Email_Address = '$email'";
        $result = mysqli_query($dataconnection, $query);

        echo 'Hello '.($_COOKIE['SIGNEDIN']!='' ? $_COOKIE['SIGNEDIN'] : 'Guest'); // Hello David!

        if(isset($_POST['saveProfileBtn'])){
            echo "yess";
        }
        

        while($fetch = mysqli_fetch_array($result)){

            $profileHtml = '<div id="container-div">';
            $profileHtml .= '    <h1 class="pageTitleHeader" style="">';
            $profileHtml .= '        <span class="headerSpan" style="">Customer Profile</span>';
            $profileHtml .= '    </h1>';
            $profileHtml .= '    <div class="container rounded bg-white mt-5 mb-5">';
            $profileHtml .= '        <div class="row">';
            $profileHtml .= '            <div class="col-md-3 border-right">';
            $profileHtml .= '            </div>';
            $profileHtml .= '            <div class="col-md-5 border-right">';
            $profileHtml .= '                <form action="profile.php" method="post">';
            $profileHtml .= '                   <div class="p-3 py-5">';
            $profileHtml .= '                       <div class="row mt-2">';
            $profileHtml .= '                           <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="first name" value="'.$fetch['Cust_First_Name'].'" ></div>';
            $profileHtml .= '                           <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control"  value="'.$fetch['Cust_Last_Name'].'" placeholder="last name"></div>';
            $profileHtml .= '                       </div>';
            $profileHtml .= '                       <div class="row mt-3">';
            $profileHtml .= '                            <div class="col-md-12"><label class="labels">Phone Number</label><input type="text" class="form-control" placeholder="phone number"  value="'.$fetch['Cust_Phone_Number'].'"></div>';
            $profileHtml .= '                            <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="email"  value="'.$fetch['Cust_Email_Address'].'"></div>';
            $profileHtml .= '                            <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="gender"  value="'.$fetch['Cust_Gender'].'"></div>';
            $profileHtml .= '                            <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="address"  value="'.$fetch['Cust_Address_Line'].'"></div>';
            $profileHtml .= '                       </div>';
            $profileHtml .= '                       <div class="row mt-3">';
            $profileHtml .= '                           <div class="col-md-6"><label class="labels">Postal Code</label><input type="text" class="form-control"  value="'.$fetch['Cust_Postal_Code'].'" placeholder="postal code"></div>';
            $profileHtml .= '                           <div class="col-md-6"><label class="labels">City</label><input type="text" class="form-control" placeholder="city"  value="'.$fetch['Cust_City'].'"></div>';
            $profileHtml .= '                       </div>';
            $profileHtml .= '                       <div class="row mt-3">';
            $profileHtml .= '                           <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" placeholder="password"  value="'.$fetch['Cust_Password'].'"></div>';
            $profileHtml .= '                       </div>';
            $profileHtml .= '                       <div class="row mt-3">';
            $profileHtml .= '                           <div class="col-md-6 text-center" style="inline-block"><button action="profile.php" name="saveProfileBtn" class="btn btn-primary profile-button" type="button">Save Profile</button></div>';
            $profileHtml .= '                           <div class="col-md-6 text-center" style="inline-block"><a href="#deleteModal" data-toggle="modal"><button name="deleteProfileBtn" class="btn btn-primary profile-button" type="button">Delete Profile</button></a></div>';
            $profileHtml .= '                       </div>';
            $profileHtml .= '                   </div>';
            $profileHtml .= '                </form>';
            $profileHtml .= '            </div>';
            $profileHtml .= '            <div class="col-md-4">';
            $profileHtml .= '                <div class="p-3 py-5">';
            $profileHtml .= '                    <div class="d-flex justify-content-between align-items-center experience"><span>Fast Checkout (optional)</span><!--<span class="border px-3 p-1 add-experience">Save Info</span>--></div><br>';
            $profileHtml .= '                    <div class="col-md-12"><label class="labels">Name on Card</label><input type="text" class="form-control" placeholder="cardholder name" value=""></div> <br>';
            $profileHtml .= '                    <div class="col-md-12"><label class="labels">Card Number</label><input type="text" class="form-control" placeholder="card number" value=""></div>';
            $profileHtml .= '                    <div class="row mt-3">';
            $profileHtml .= '                        <div class="col-md-6"><label class="labels">Expriation</label><input type="text" class="form-control" placeholder="mm/yyyy" value=""></div>';
            $profileHtml .= '                        <div class="col-md-6"><label class="labels">CVV</label><input type="text" class="form-control" placeholder="cvv" value=""></div>';
            $profileHtml .= '                    </div>';
            $profileHtml .= '                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Info</button></div>';
            $profileHtml .= '                </div>';
            $profileHtml .= '            </div>';
            $profileHtml .= '        </div>';
            $profileHtml .= '    </div>';
            $profileHtml .= '</div>';
        

        echo $profileHtml;
        }
    }
?>



<div id="deleteModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">			
                <h4 class="modal-title" style="margin-left:auto; margin-right:auto; font-size:20px;">Are you sure you want to delete your profile?</h4>	
                <button type="button" style="margin-left:0;" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body" style="width:30; margin-left:auto; margin-right:auto;">
                <form action="index.php" method="post">  
                    <div class="form-group">
                        <button type="submit" name="delete" class="btn btn-primary btn-lg btn-block login-btn">Yes, Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Bootstrap Scripts-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../styles/mainPages.css">