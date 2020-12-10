<link rel="stylesheet" href="../styles/mainPages.css"> 

<!--Whole Page-->
<div class="productPageContainer" style="width:90%; margin-left:auto; margin-right:auto;">
    <h1 class="pageTitleHeader" style="">
        <span class="headerSpan">Cart</span>
    </h1>
    <!--Div with both other divs-->
    <div style="margin-top:5%; display:flex;">
        <!--Left Div-->
        <div class="" style="margin-left:10%; margin-right:5%; display:inline-block; width:60%; box-sizing: border-box;">

            <!-- Shirt Div -->
            <div class="" style="margin-bottom:5%; display: flex; flex-wrap: wrap;">
                <div class="" style="flex: 0 0 25%; max-width: 25%;">
                    <div class="">
                        <a href="#!">
                            <img class="img-fluid w-100"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                        </a>
                    </div>
                </div>
                <!--Info Div-->
                <div class="" style="width: 75%; padding-left:3%; padding-right:3%;padding-top:2.5%; padding-bottom:2%; display:flex;">
                    <!--Left Info Div-->
                    <div style="width:69%; height:100%; display:inline-block;box-sizing: border-box;">
                        <h5>Blue denim shirt</h5>
                        <p class="" style="font-size: 80%; font-weight: 400; color: #6c757d!important; margin-bottom: 1rem!important; text-transform: uppercase!important;">Shirt - blue</p>                            
                        <p class="">Color: blue</p>
                        <p class="">Size: M</p>
                    </div>
                    <!--Right Info Div-->
                    <div style="width:30%; height:100%; display:inline-block; box-sizing: border-box; text-align:center;">
                        <p class="" style="margin:7%; font-size:20px;">$17.99</p>
                        <div>
                            <a href="#!" type="button" class=""
                                style="text-transform: uppercase; margin:5%; font-size: 15px;
                                    color: #007bff; text-decoration: none; background-color: transparent;">                                        
                                    <i class="fas fa-trash-alt" style="margin-right: .25rem!important;"></i> 
                                Remove item 
                            </a>
                            <a href="#!" type="button" class=""
                                style="text-transform: uppercase; margin:3%; font-size: 15px;
                                    color: #007bff; text-decoration: none; background-color: transparent;">
                                <i class="fas fa-heart mr-1" style="color:red;"></i> 
                                Move to wish list 
                                </a>
                            </div>                                
                        </div>
                    </div>
                    
                    
                </div>
            

            <!-- Payments Div -->
            <div class="mb-3">
                <div class="pt-4">
                    <h5 class="mb-4">We accept</h5>
                    <img class="mr-2" width="45px"
                        src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                        alt="Visa">
                    <img class="mr-2" width="45px"
                        src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                        alt="American Express">
                    <img class="mr-2" width="45px"
                        src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                        alt="Mastercard">
                    <img class="mr-2" width="45px"
                        src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
                        alt="PayPal acceptance mark">
                </div>
            </div>
        </div>

        <!--Right Div (Total + Checkout Btn)-->
        <div class="" style="display:inline-block; box-sizing: border-box; width:16%; margin-left:auto; margin-right:auto;">

            <!-- Total Div -->
            <div class="" style="rgin-bottom: 1rem!important;">
                <div class="" style="padding-top: 1.5rem!important;">
                    <h5 class="" style="rgin-bottom: 1rem!important; text-align:center; text-transform: uppercase;">Total</h5>
                    <ul class="list-group list-group-flush" style="display: flex;">
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                            Sub-Total:
                            <span>$25.98</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Shipping:
                            <span>Gratis</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                            <div>
                                <strong>Total:</strong>
                                <strong>
                                    <p class="mb-0">(including VAT)</p>
                                </strong>
                            </div>
                            <span><strong>$53.98</strong></span>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-primary btn-block" style="text-transform: uppercase; font-size:15px;">go to checkout</button>
                </div>
            </div>
            <!-- Card -->

            <!-- Delivery Picker -->
            <div class="mb-3">
                <div class="pt-4">
                    <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                        Select Delivery Method
                        <span><i class="fas fa-chevron-down pt-1"></i></span>
                    </a>

                    <div class="collapse" id="collapseExample">
                        <div class="mt-3">
                            <h5 class="mb-4">Delivery:</h5>
                            <label class="colorChoices">Pickup at one of our locations
                                <input type="radio" name="delivery[]" value="pickup">
                                    <span class="checkmark"></span>
                            </label>
                            <label class="colorChoices">At home delivery
                                <input type="radio" name="delivery[]" value="deliver">
                                <span class="checkmark"></span>
                            </label>
                            <input class="dropbtn filterBtn" style="height:20px; float:right;" type="submit" name="submit" value="Sort"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->

        </div>
    <!--Grid column-->
    </div>
    <!-- Grid row -->
</div>
<!--Section: Block Content-->