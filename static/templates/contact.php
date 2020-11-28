<!DOCTYPE html>
<html lang="en">
<head>
    

<title>Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/icons/favicon.ico">



<link rel="stylesheet" href="../styles/contactpage.css">



</head>
<body>
    <div class="container-contact100">
        <div class="wrap_contact100" style="display: block;">

            <form class="contact100-form validate-form">
                <span class="contact100-form-title">Contact Us</span>

                <div class="wrap-input100 rs1-wrap-input-100 validate-input 
                    alert-validate" data-validate="Name is required">
                    <!--::before-->
                    <span class="label-input100">Your Name</span>
                    <input class="input100" type="text" name="name" placeholder="Enter your name">
                    <span class="focus-input100"><!--::before--></span>
                    <!--::after-->
                </div>

                <div class="wrap-input100 rs1-wrap-input-100 validate-input 
                    alert-validate" data-validate="Valid email is required: ex@abc.xyz">
                    <!--::before-->
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="email" placeholder="Enter your email">
                    <span class="focus-input100"><!--::before--></span>
                    <!--::after-->
                </div>

                <div class="wrap-input100 rs1-wrap-input-100 validate-input 
                    alert-validate" data-validate="Message is required">
                    <!--::before-->
                    <span class="label-input100">Message</span>
                    <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
                    <span class="focus-input100"><!--::before--></span>
                    <!--::after-->
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        <span>
                            Submit
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"><!--::before--></i>
                        </span>
                    </button>
                </div>
            </form>
            <span class="contact100-more">We thank you for your feedback!</span>
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



