<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles/mainPages.css">        
    </head>

    <?php
        $brandId=$_GET['brandid'];
        $sqlQuery = "SELECT * FROM brands WHERE brands.Brand_ID = $brandId";

        $result = mysqli_query($dataconnection, $sqlQuery); 

            //    $sqlQuery = "SELECT * FROM women_inventory, brands WHERE women_inventory.Brand_ID = brands.Brand_ID  AND  brands.Brand_ID = '$prod_brand'  AND women_inventory.Product_ID ='$product_select'";
    
        $fetch = mysqli_fetch_array($result);
    
    ?>

    <body>
        <div class="productPageContainer">
            <h1 class="pageTitleHeader" style="">
                <span class="headerSpan">About</span>
            </h1>

            <div class="detailsContainer" style="margin-left:10%; margin-right:10%;">
            <div class="detailsHeader" style="margin: 0 0 40px 0;padding: 30px 5px 5px 5px; border-bottom: 1px solid #dededd;"></div>
            <div id="brand" style="overflow:hidden;">
                <section class="detailsProductMain" style="width: 50%;
                        float: left;
                        margin: 0 auto;
                        position: relative;
                        display: block; font-size: 13px;
                        padding-bottom:100%; margin-bottom:-100%;">
                    <div class="details" style="display: block;
                        padding-bottom:100%; margin-bottom:-100%;">
                        <div class="primary-details"
                            style="position: relative; display:block;
                                margin-bottom: 0px;
                                padding: 0 0 20px 0; border-bottom:1px dotted #d0d0d0;"   >

                            <?php $ourBrandHTML = '<a href=" index.php?page=about&brandid=16">';
                                echo $ourBrandHTML;?>

                                <span class="product-name title-cap"
                                    style="display: block;
                                        width: 100%;
                                        color: #000;
                                        font-weight: 400;
                                        font-size: 28px;
                                        text-align: center;
                                        margin: 15px 0 8px 0;text-transform: capitalize !important;">ABOUT US</span>
                                </a>
                        </div>
                    </div>
                    <div style="position: relative; display:block; padding: 0 0 20px 0;">
                            <span style="display:block; font-size:24px; margin-top:7%; margin-left:5%; text-transform:capitalize;"><?php echo $fetch['Brand_Name']?></span>
                            <span style="display:block; font-size:17px; margin-left:7.5%; text-transform:capitalize;"><?php echo $fetch['Brand_Founder']?></span>
                        </div>
                        <div class="" style="
                            font-weight: normal;
                            font-size: 15px;
                            text-align: justify;
                            padding: 20px;
                            position: relative;
                            width:85%;
                            margin-left:7.5%;
                            line-height: 22px;
                            letter-spacing: 0.0225em;">
                            <p><?php echo $fetch['Brand_History']?></p>
                        </div>
                </section>
                <section class="brandsWeOffer"
                        style="width: 50%;
                            margin-left: 0;position: relative;
                            float: right;    display: block; height:100%;">
                    <div class="details" style="display: block;
                        padding-bottom:100%; margin-bottom:-100%;">
                        <div class="primary-details"
                            style="position: relative; display:block;
                                margin-bottom: 0px;
                                padding: 0 0 20px 0;border-bottom:1px dotted #d0d0d0;"   >
                            <span class="product-name title-cap"
                                style="display: block;
                                    width: 100%;
                                    color: #000;
                                    font-weight: 400;
                                    font-size: 28px;
                                    text-align: center;
                                    margin: 15px 0 8px 0;text-transform: capitalize !important; ">BRANDS WE OFFER</span>
                        </div>
                        
                        
                            

                            <?php 
                                $sqlQuery = "SELECT * FROM brands";

                                $result = mysqli_query($dataconnection, $sqlQuery);

                                $brandsDivHTML = '<div class="" data-query="women-all-shoes" style="border-left:1px dotted #d0d0d0;">';

                                $brandsDivHTML = '<ul class="logoProductUl">';

                                while($fetch = mysqli_fetch_array($result)){

                                    $brandsDivHTML .='<li class="logoProducts" data-object-id="prd-123">';// add css classes and the like here. In case you don't know, the .= operators concatenate the strings that will make your html code.
                                    $brandsDivHTML .='    <div class="logoProductDiv2">'; // be careful with this class, as you might need to evaluate it for every run of the loop
                                    $brandsDivHTML.='        <a class="logoProductA" href="index.php?page=about&brandid='.$fetch['Brand_ID'].'">';
                                    $brandsDivHTML .='             <div class="logoProductDiv3">';
                                    $brandsDivHTML.='                 <div class="logoProductDiv4">';
                                    $brandsDivHTML .='                     <img class="productImg" src="'.$fetch['Brand_Logo'].'" alt="" />';
                                    $brandsDivHTML.='                  </div>';
                                    $brandsDivHTML .='             </div>';
                                    $brandsDivHTML .='         </a>';
                                    $brandsDivHTML.='     </div>';
                                    $brandsDivHTML.=' </li>';
                                }
                                $brandsDivHTML .= '</ul>';
                                $brandsDivHTML .= '</div>';

                                ?>

                                <?php  echo $brandsDivHTML; ?>

                            <!--    <li class="logoProducts" data-object-id="prd-123">
                                Alex McQueen
                                    <div class="logoProductDiv2">
                                        <a class="logoProductA" href="">
                                            <div class="logoProductDiv3">
                                                <div class="logoProductDiv4">
                                                    <img class="logoProductImg" src="https://cdn.modesens.com/merchant/alexander-mcqueen-logo.jpg">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li class="logoProducts" data-object-id="prd-123">
                                -->
                                
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>