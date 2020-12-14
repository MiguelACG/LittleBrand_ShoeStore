<link rel="stylesheet" href="../styles/mainPages.css"> 

<!--Whole Page-->
<div id="container-div">
    <h1 class="pageTitleHeader" style="">
            <span class="headerSpan">Wishlist</span>
        </h1>
    <div class="productPageContainer" style="width:90%; margin-left:auto; margin-right:auto;">
        
        <!--Div with both other divs-->
        <div style="margin-top:5%; display:flex;">
            <!--Left Div-->
            <div class="" style="margin-left:10%; margin-right:5%; display:inline-block; width:90%; box-sizing: border-box; border-bottom: 1px solid #dededd;">

                <?php
                    //<!-- Shirt Div -->
                    $productHtml ='';
                    $productHtml .=' <div class="" style="margin-bottom:5%; display: flex; flex-wrap: wrap;">';
                    $productHtml .='     <div class="" style="flex: 0 0 20%; max-width: 20%;">';
                    $productHtml .='         <div class="">';
                    $productHtml .='             <a href="#!">';
                    $productHtml .='                 <img class="img-fluid"';
                    $productHtml .='                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">';
                    $productHtml .='             </a>';
                    $productHtml .='         </div>';
                    $productHtml .='     </div>';
                                        //<!--Info Div-->
                    $productHtml .='     <div class="" style="width: 75%; padding-left:3%; padding-right:3%;padding-top:2.5%; padding-bottom:2%; display:flex;">';
                                            //<!--Left Info Div-->
                    $productHtml .='         <div style="width:69%; height:100%; display:inline-block;box-sizing: border-box;">';
                    $productHtml .='             <h5>Blue denim shirt</h5>';
                    $productHtml .='             <p class="" style="font-size: 80%; font-weight: 400; color: #6c757d!important; margin-bottom: 1rem!important; text-transform: uppercase!important;">Shirt - blue</p>                            ';
                    $productHtml .='             <p class="">Color: blue</p>';
                    $productHtml .='             <p class="">Size: M</p>';
                    $productHtml .='         </div>';
                                            //<!--Right Info Div-->
                    $productHtml .='         <div style="width:30%; height:100%; display:inline-block; box-sizing: border-box; text-align:center;">';
                    $productHtml .='             <p class="" style="margin:7%; font-size:20px;">$17.99</p>';
                    $productHtml .='             <div>';
                    $productHtml .='                 <a href="#!" type="button" class="" style="text-transform: uppercase; margin:5%; font-size: 15px; color: #007bff; text-decoration: none; background-color: transparent;">';
                    $productHtml .='                     <i class="fas fa-trash-alt" style="margin-right: .25rem!important;"></i>';
                    $productHtml .='                     Remove item ';
                    $productHtml .='                 </a>';
                    $productHtml .='                 <a href="#!" type="button" class="" style="text-transform: uppercase; margin:3%; font-size: 15px; color: #007bff; text-decoration: none; background-color: transparent;"> ';
                    $productHtml .='                     <i class="fas fa-shopping-basket" style="font-size:18px"></i> ';
                    $productHtml .='                     Move to cart ';
                    $productHtml .='                 </a>';
                    $productHtml .='             </div>';                            
                    $productHtml .='         </div>';
                    $productHtml .='     </div>';
                                                        
                    $productHtml .=' </div>';
                    echo $productHtml;
                ?>
                
            </div>    
        </div>
    </div>
</div>
