<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">
    <link rel="stylesheet" href="../styles/contactpage.css">
    <style>
        .contactDiv1{
            width: 100%;
            min-height: 100vh; 
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background: transparent;
            position: relative;
            z-index: 1;
        }

        .contactForm{
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding-bottom: 68px;
        }

        .contactSpan1{
            display: block;
            width: 100%;
            font-size: 39px;
            color: #333333;
            line-height: 1.2;
            text-align: left;
            padding-bottom: 44px;
        }

        .contactInputDiv{
            position: relative;
            border-bottom: 2px solid #d9d9d9;
            padding-bottom: 13px;
            margin-bottom: 65px; 
            width:100%;
        }

        .contactInputSpan1{
            font-size: 15px;
            color: #999999;
            line-height: 1.5;
            padding-left: 5px;
        }

        .contactInput{
            display: block;
            width: 100%;
            background: transparent;
            font-size: 18px;
            color: #555555;
            line-height: 1.2;
            padding: 0 5px; 
            height:40px;
        }

        .contactInputSpan2{
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        .contactBtnDiv{
            display: flex;
            flex-wrap: wrap;
            margin-top: -25px; 
            width:100%;
        }

        .contactBtn{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            min-width: 160px;
            height: 50px;
            background-color: #ff4b5a;
            border-radius: 25px;
            font-size: 16px;
            color: #fff;
            line-height: 1.2;
        }

        .contacti{
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
        }

        .contactThanksSpan{
            font-size: 14px;
            color: #999999;
            line-height: 1.5;
        }
    </style>
</head>
<?php 
    //include '../scripts/signupinconfirm.php';
    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $custIdQuery = "SELECT Customer_ID FROM customers WHERE customers.Cust_Email_Address = '$email'";
        $custIDresult = mysqli_fetch_array(mysqli_query($dataconnection, $custIdQuery));

        $customerId = $custIDresult['Customer_ID'];
        
        $sqlquery = "INSERT INTO cust_comments(Customer_ID, Comment) VALUES ($customerId, '$message')";
        $exec = mysqli_query($dataconnection, $sqlquery);
        

       // echo $customerId;
    }
?>


<body>
    <div class="contactDiv1" style="">
        <div class="" style="display: block;">

            <form class="contactForm" style="" method="post">
                <span class="contactSpan1" style="">Contact Us</span>

                <div class="contactInputDiv" data-validate="Name is required" style="">
                    <!--::before-->
                    <span class="contactInputSpan1">Your Name</span>
                    <input class="contactInput" type="text" name="name" placeholder="Enter your name">
                    <span class="contactInputSpan2"><!--::before--></span>
                    <!--::after-->
                </div>

                <div class="contactInputDiv" data-validate="Valid email is required: ex@abc.xyz"
                    style="">
                    <!--::before-->
                    <span class="contactInputSpan1" style="">Email</span>
                    <input class="contactInput" type="email" name="email" placeholder="Enter your email" style="">
                    <span class="contactInputSpan2" style=""><!--::before--></span>
                    <!--::after-->
                </div>

                <div class="contactInputDiv" data-validate="Valid email is required: ex@abc.xyz"
                    style="">
                    <!--::before-->
                    <span class="contactInputSpan1">Message</span>
                    <textarea class="contactInput" name="message" placeholder="Your message here..."></textarea>
                    <span class="contactInputSpan2"><!--::before--></span>
                    <!--::after-->
                </div>

                <div class="contactBtnDiv" style="">
                    <button class="contactBtn" style="" name="submit">
                        <span>
                            Submit
                            <i class="contacti" aria-hidden="true" style=""><!--::before--></i>
                        </span>
                    </button>
                </div>
            </form>
            <span class="contactThanksSpan" style="">We thank you for your feedback!</span>
        </div>
    </div>

    <script type="text/javascript">
        
        (function ($) {
            "use strict";

            /*==================================================================
            [ Focus Contact2 ]*/
            $('.input100').each(function(){
                $(this).on('blur', function(){
                    if($(this).val().trim() != "") {
                        $(this).addClass('has-val');
                    }
                    else {
                        $(this).removeClass('has-val');
                    }
                })    
            })

            /*==================================================================
            [ Validate ]*/
            var input = $('.validate-input .input100');

            $('.validate-form').on('submit',function(){
                var check = true;

                for(var i=0; i<input.length; i++) {
                    if(validate(input[i]) == false){
                        showValidate(input[i]);
                        check=false;
                    }
                }

                return check;
            });


            $('.validate-form .input100').each(function(){
                $(this).focus(function(){
                hideValidate(this);
                });
            });

            function validate (input) {
                if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
                    if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                        return false;
                    }
                }
                else {
                    if($(input).val().trim() == ''){
                        return false;
                    }
                }
            }

            function showValidate(input) {
                var thisAlert = $(input).parent();

                $(thisAlert).addClass('alert-validate');
            }

            function hideValidate(input) {
                var thisAlert = $(input).parent();

                $(thisAlert).removeClass('alert-validate');
            }

            });
    </script>

</body>
</html>



