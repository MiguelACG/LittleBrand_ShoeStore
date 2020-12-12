<link rel="stylesheet" href="../styles/mainPages.css"> 

<?php
    include '../scripts/insertOrderItems.php';

    insert_item_data('women', $dataconnection); //Cart for Women Items
    insert_item_data('men', $dataconnection); //Cart for men items
?>

<!--Whole Page-->
<div class="productPageContainer" style="width:90%; margin-left:auto; margin-right:auto;">
    <h1 class="pageTitleHeader" style="">
        <span class="headerSpan">Cart</span>
    </h1>
    <!--Div with both other divs-->
    <div style="margin-top:5%; border-bottom: 1px solid #dededd;">
        <!--Left Div-->
        <div class="" style="margin-left:10%; margin-right:5%; width:60%; box-sizing: border-box; float: left;">
        
            <!-- Shirt Div -->
            <div class="" style="margin-bottom:5%; display: flex; flex-wrap: wrap;">

            <!--Display Information-->
            <?php

                $prodQuery = "SELECT * FROM `order_item_product`";
                $resultat = mysqli_query($dataconnection, $prodQuery);

                $cartProd = '';
                while($fetchProd = mysqli_fetch_array($resultat)){
                    //Image
                    $cartProd .= '<div class="" style=" width: 85px;">';
                    $cartProd .= '<div class="">';
                    $cartProd .=    '<a href="#!">';
                    $cartProd .=        '<img class="img-fluid w-100" src="'.$fetchProd['Product_Img'].'" alt="">';
                    $cartProd .=    '</a>';
                    $cartProd .= '</div>';
                    $cartProd .= '</div>';

                    //Info
                    $cartProd .='<div class="" style="width: 75%; padding-left:3%; padding-right:3%;padding-top:2.5%; padding-bottom:2%; display:flex;">';
                    
                    $cartProd .='<div style="width:69%; height:100%; display:inline-block;box-sizing: border-box;">';
                    $cartProd .=    '<h5>'.$fetchProd['Product_Name'].'</h5>';
                    $cartProd .=    '<p class="" style="font-size: 80%; font-weight: 400; color: #6c757d!important; margin-bottom: 1rem!important; text-transform: uppercase!important;">'.$fetchProd['shoe_type'].' - '.$fetchProd['Product_Color'].'</p>';                            
                    $cartProd .=    '<p class="">Color: '.$fetchProd['Product_Color'].'</p>';
                    $cartProd .=   '<p class="">Size: '.$fetchProd['Product_Size'].'</p>';
                    $cartProd .='</div>';
                    
                    $cartProd .='<div style="width:30%; height:100%; display:inline-block; box-sizing: border-box; text-align:center;">';
                    $cartProd .=    '<p class="" style="margin:7%; font-size:20px;">$'.$fetchProd['Product_Price'].'</p>';
                    $cartProd .=    '<div>';
                    $cartProd .=        '<a href="#!" type="button" class=""';
                    $cartProd .=            'style="text-transform: uppercase; margin:5%; font-size: 15px;';
                    $cartProd .=                'color: #007bff; text-decoration: none; background-color: transparent;">';                                        
                    $cartProd .=                '<i class="fas fa-trash-alt" style="margin-right: .25rem!important;"></i>'; 
                    $cartProd .=           'Remove item';
                    $cartProd .=        '</a>';
                    $cartProd .=        '<a href="#!" type="button" class=""';
                    $cartProd .=            'style="text-transform: uppercase; margin:3%; font-size: 15px;';
                    $cartProd .=               'color: #007bff; text-decoration: none; background-color: transparent;">';
                    $cartProd .=           '<i class="fas fa-heart mr-1" style="color:red;"></i>'; 
                    $cartProd .=           'Move to wish list'; 
                    $cartProd .=           '</a>';
                    $cartProd .=       '</div>';                                
                    $cartProd .=   '</div>';
                    $cartProd .='</div>';
                    
                    
                    $cartProd .= '</div>';
                }

                echo $cartProd;
            ?>
            <!--Right Div (Total + Checkout Btn)-->
        <div class="" style="display:inline-block; box-sizing: border-box; width:16%; margin-left:auto; margin-right:auto; float: right;">

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
                <a href="index.php?page=checkout" class="nav-link">
                
                <!--idk how you wanna handle this, if the person is signed in and we can just autofill the fields and have the verify or we can have a separate page idk-->
                <button type="button" class="btn btn-primary btn-block" style="text-transform: uppercase; font-size:15px; width:60%; margin-left:auto; margin-right:auto;">go to checkout</button></a>
                <button type="button" class="btn btn-primary btn-block" style="text-transform: uppercase; font-size:15px;">go to fast checkout</button>
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
                <input class="dropbtn filterBtn" style="height:20px; float:right;" type="submit" name="submit" value="Save"/>
            </div>
        </div>
    </div>
</div>
<!-- Card -->

</div>    
                 

            <!-- Payments Div -->
            <div class="mb-3">
                <div class="pt-4" style="margin-left:5%;">
                    <h5 class="mb-4" style="display:inline-block; margin-right:2.5%; text-transform:uppercase; font-size:19px;">We accept:</h5>
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

        
    <!--Grid column-->
    </div>
    <!-- Grid row -->
</div>
<!--Section: Block Content-->