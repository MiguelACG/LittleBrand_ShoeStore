<link rel="stylesheet" href="../styles/mainPages.css"> 

<?php
    include '../scripts/insertOrderItems.php';
    /*
    insert_item_data('women', $dataconnection); //Cart for Women Items
    insert_item_data('men', $dataconnection); //Cart for men items*/
?>

<!--Whole Page-->
<div class="productPageContainer" style="width:90%; margin-left:auto; margin-right:auto;">
    <h1 class="pageTitleHeader" style="">
        <span class="headerSpan">Wishlist</span>
    </h1>
    <div style="width:100%; margin-left:auto; margin-right:auto; border-bottom: 1px solid #dededd;"></div>
    <!--Div with both other divs-->
    <div style="margin-top:5%; border-bottom: 1px solid #dededd; display:flex;">
        <!--Left Div-->
        <div class="" style="margin-left:10%; margin-right:5%; width:60%; box-sizing: border-box; float: left;">
            <!--Dynamically Display Information-->
            <?php

                if(isset($_GET['action'])){
                    if($_GET['action'] == 'remove'){
                        $deleteAtID = $_GET['item'];
                        $deleteQuery = "DELETE FROM wishlist_item WHERE wish_item_id = $deleteAtID";
                        $resultat = mysqli_query($dataconnection, $deleteQuery);
                        if (!$resultat) {
                            printf("Error: %s\n", mysqli_error($dataconnection));
                            exit();
                        }
                    }
                }

                if(isset($_GET['action'])){
                    if($_GET['action'] == 'addcart'){
                        //Moves item to cart
                        $getItemID = $_GET['item'];
                        $orderItem = "INSERT INTO `cust_order_item`(`Product_ID`) VALUES ( $getItemID )";
                        $resultat1 = mysqli_query($dataconnection, $orderItem);

                        /*//Removes item from wishlist
                        $deleteQuery = "DELETE FROM wishlist_item WHERE Order_Item_ID = $getItemID";
                        $resultat2 = mysqli_query($dataconnection, $orderItem);
                        if (!$resultat) {
                            printf("Error: %s\n", mysqli_error($dataconnection));
                            exit();
                        }*/
                    }
                }
                $clientID = $_COOKIE['USERID'];
                $prodQuery = "SELECT * FROM all_inventory w, wishlist_item wo WHERE w.Product_ID = wo.product_ID AND wo.Client_ID = $clientID";
                $resultat = mysqli_query($dataconnection, $prodQuery);

                $cartProd = '';

                if(mysqli_num_rows($resultat) > 0){
                while($fetchProd = mysqli_fetch_array($resultat)){
                    //Shirt Div
                    $cartProd .= '<div class="" style="margin-bottom:5%; display:flex; flex-wrap:wrap;">';
                    $cartProd .=    '<div class="" style="flex: 0 0 25%; max-width: 25%;">';
                    $cartProd .=        '<div class="">';
                    $cartProd .=            '<a href="#!">';
                    $cartProd .=                '<img class="img-fluid w-100" src="'.$fetchProd['Product_Img'].'" alt="">';
                    $cartProd .=            '</a>';
                    $cartProd .=        '</div>';
                    $cartProd .=    '</div>';

                    //Info Div
                    $cartProd .=    '<div class="" style="width: 75%; padding-left:3%; padding-right:3%; padding-top:2.5%; padding-bottom:2%; display:flex;">';
                    //Left Info Div
                    $cartProd .=        '<div style="width:69%; height:100%; display:inline-block; box-sizing: border-box;">';
                    $cartProd .=            '<h5>'.$fetchProd['Product_Name'].'</h5>';
                    $cartProd .=            '<p class="" style="font-size: 80%; font-weight:400; color: #6c757d!important; margin-bottom: 1rem!important; text-transform: uppercase!important;">'.$fetchProd['shoe_type'].' - '.$fetchProd['Product_Color'].'</p>';                            
                    $cartProd .=            '<p class="">Color: '.$fetchProd['Product_Color'].'</p>';
                    $cartProd .=            '<p class="">Size: '.$fetchProd['Product_Size'].'</p>';
                    $cartProd .=        '</div>';
                    //Right Info Div
                    $cartProd .=        '<div style="width:30%; height:100%; display:inline-block; box-sizing: border-box; text-align:center;">';
                    $cartProd .=                '<p class="" style="margin:7%; font-size:20px;">$'.$fetchProd['Product_Price'].'</p>';
                    $cartProd .=                '<div>';
                                             //'<a "href="index.php?page=store&inventory=all&item='.$fetch['Product_ID'].'&brandid='.$fetch['Brand_ID'].'">'
                    $cartProd .=                    '<a href="index.php?page=wishlist&action=remove&item='.$fetchProd['wish_item_id'].'" type="button" class="" style="text-transform: uppercase; margin:5%; font-size: 15px; color: #007bff; text-decoration: none; background-color: transparent;">';                                        
                    $cartProd .=                        '<i class="fas fa-trash-alt" style="margin-right: .25rem!important;"></i>'; 
                    $cartProd .=                        'Remove item';
                    $cartProd .=                    '</a>';
                    $cartProd .=                    '<a href="index.php?page=wishlist&action=addcart&item='.$fetchProd['Product_ID'].'" type="button" class="" style="text-transform: uppercase; margin:3%; font-size: 15px; color: #007bff; text-decoration: none; background-color: transparent;">';
                    $cartProd .=                        '<i class="fas fa-shopping-basket mr-1" style="color:red;"></i>'; 
                    $cartProd .=                        'Move to cart'; 
                    $cartProd .=                    '</a>';
                    $cartProd .=                '</div>';   
                    $cartProd .=        '</div>';

                    $cartProd .=    '</div>';
                
                    $cartProd .= '</div>'; 
                }
            }
            else{
                $cartProd .= '<h3 class="pageTitleHeader" style=""><span class="headerSpan">Don\'t you Wish to have some items?</span></h3>';
            }  
                    
            ?>
            <?php echo $cartProd; $cartProd = '';?>
                
            <!-- Payments Div -->
        </div>
    </div>
</div>
