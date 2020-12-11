<!DOCTYPE html>
<html lang="en">
    <head>
    <!--Louboutin Store-->
        <title>store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles/mainPages.css">        
    </head>
        

    <body>

    <?php
        $inventory = $_GET['inventory'];
        $product_select = $_GET['item'];
        $prod_brand = $_GET['brandid'];  

        switch($inventory){
            case 'men': 
                $sqlQuery = "SELECT * FROM men_inventory, brands WHERE men_inventory.Brand_ID = brands.Brand_ID  AND  brands.Brand_ID = '$prod_brand'  AND men_inventory.Product_ID ='$product_select'";
            break;
            case 'women': 
                $sqlQuery = "SELECT * FROM women_inventory, brands WHERE women_inventory.Brand_ID = brands.Brand_ID  AND  brands.Brand_ID = '$prod_brand'  AND women_inventory.Product_ID ='$product_select'";
            break;
        }


        $result = mysqli_query($dataconnection, $sqlQuery);
    
        $fetch = mysqli_fetch_array($result);

        if(isset($_POST['shop'])){
            switch($inventory){
                case 'men': 
                    $orderItem = "INSERT INTO `cust_order_item_men` (`Product_ID`) VALUES ( $product_select );";
                break;
                case 'women': 
                    $orderItem = "INSERT INTO `cust_order_item` (`Product_ID`) VALUES ( $product_select );";
                break;
            }

            $insertResult = mysqli_query($dataconnection, $orderItem);
            
        }
    
    ?>

        <div class="detailsContainer" style="margin-left:10%; margin-right:10%;" >
            <div class="detailsHeader" style="margin-left: 5%;padding: 30px 5px 15px 5px; line-height: 1.4px;  border-bottom: 1px solid #dededd;">
                <htag1>
                    <span class="detailsSpan" style="text-transform: uppercase; letter-spacing: 2px;">
                        <span class="" role="heading" aria-level="1"
                            style="font-size: 28px; font-weight: bold; color:black;"><?php echo $fetch['Product_Name']?></span>
                    </span>
                </htag1>
            </div>
            <div id="product" style="overflow:hidden;">
                <section class="detailsProductMain" style="width: 50%;
                        float: left;
                        margin: 0 auto;
                        position: relative;
                        display: block; font-size: 13px;
                        padding-bottom:100%; margin-bottom:-100%;">
                    <div class="swiper-container gallery-top swiper-container-horizontal" 
                        style="display:block; position: relative; overflow: hidden; z-index: 1;">
                        <div class="swiper-wrapper" 
                            style=" position: relative;
                                width: 100%;
                                height: 100%;display:flex;">
                            <img class="swiper-slide swiper-slide-duplicate" data-width="1200" 
                                data-height="1200" data-src="" src="<?php echo $fetch['Product_Img']?>" alt-data-swiper-slide-index="0"
                                style="width:70%; margin-left:auto; margin-right:auto; position:relative;">
                        </div>
                    </div>
                </section>
                <section class="product-sidebar"
                        style="width: 50%;
                            margin-left: 0;position: relative;
                            float: right;    display: block; height:100%;">
                    <div class="details" style="display: block;
                        padding-bottom:100%; margin-bottom:-100%;">
                        <div class=""
                            style="position: relative; display:block; margin-bottom: 0px; padding: 0 0 20px 0;"   >
                            <span class=""
                                style="display: block;
                                    width: 100%;
                                    color: #000;
                                    font-weight: 400;
                                    font-size: 22px;
                                    text-align: center;
                                    margin: 15px 0 8px 0;text-transform: capitalize !important;"><?php echo $fetch['Brand_Name']?></span>
                            <div class="price-box" style="display: block;">
                                <span class="regular-price" id="product_id" style="display: block;">
                                    <span class="price" 
                                        style="font-size: 18px; width: 100%;
                                            display: block;
                                            text-align: center;
                                            top: 15px;    font-weight: lighter;color: #222;"><?php echo $fetch['Product_Price']?></span>
                                </span>
                            </div>
                        </div>
                        <div class="description" style="border-top: 1px dotted #d0d0d0;
                            border-bottom: 1px dotted #d0d0d0;
                            font-weight: normal;
                            font-size: 13px;
                            text-align: justify;
                            padding: 20px;
                            margin: 15px 0;
                            position: relative;
                            line-height: 17px;
                            letter-spacing: 0.0225em;">
                            <?php echo $fetch['Product_Description']?>
                        </div>
                        <a data-gtm-event-click="{&quot;event&quot;:&quot;gtm.ext.event&quot;,&quot;eventTmp&quot;:&quot;enhancedEcommerce&quot;,&quot;eventCategory&quot;:&quot;enhancedEcommerce&quot;,&quot;eventAction&quot;:&quot;addToWishlist&quot;,&quot;eventLabel&quot;:&quot;Dandelion&quot;,&quot;ecommerce&quot;:{&quot;currencyCode&quot;:&quot;CAD&quot;,&quot;add&quot;:{&quot;products&quot;:[{&quot;name&quot;:&quot;Dandelion&quot;,&quot;id&quot;:&quot;1150564BK01&quot;,&quot;price&quot;:&quot;1095.00&quot;,&quot;dimension2&quot;:&quot;black&quot;,&quot;category&quot;:&quot;men shoes&quot;}]}}}" 
                            data-label="Add To Wishlist" data-action="Product Page" data-category="Product Page" 
                            href="https://us.christianlouboutin.com/ca_en/wishlist/index/add/product/337065/form_key/uu2L16tsHt9InAbe/" 
                            class="addToWishlist" onclick=""
                            style="display: block;
                                position: relative;
                                border-top: 1px dotted #D8D8D8;
                                border-bottom: 1px dotted #D8D8D8;
                                padding: 10px 0;
                                margin-bottom: 20px;
                                text-align: center;
                                height: 20px;
                                color: #ed1e24;
                                font-weight: bold;
                                letter-spacing: 2px;text-decoration: none;">
                            Add to My Wishlist
                        </a>
                        <br>
                        <form method="post"> 
                            <button class="btn btn-primary btn-lg btn-block login-btn" name="shop" type="submit">Add To Cart</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>