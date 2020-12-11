<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles/mainPages.css">        
    </head>

    <body>
        <div class="productPageContainer">
            <h1 class="pageTitleHeader" style="">
                <span class="headerSpan">Search Results</span>
            </h1>

            <!--Sort Btn-->
            <?php /*
                $sqlQuery = '';
                if(isset($_POST['submit'])){
                    if(!empty($_POST['model'])){
                        $allSelectedModels = implode("', '", $_POST['model']);
                        $sqlQuery = "SELECT * FROM women_inventory WHERE Shoe_Type IN('$allSelectedModels')";
                        echo $sqlQuery;
                        displayProducts($dataconnection, $sqlQuery);
                    }
                    elseif(!empty($_POST['color'])){
                        $colorQList=array();

                        foreach($_POST['color'] as $checked){
                            $colorQList[] = "Product_Color LIKE '%".$checked."%'";
                        }
                        $sqlQuery = 'SELECT * FROM women_inventory WHERE '.implode(' OR ', $colorQList);
                        echo $sqlQuery;
                        displayProducts($dataconnection, $sqlQuery);
                    }
                    elseif(!empty($_POST['brand'])){
                        $allSelectedBrands = implode(", ", (array)$_POST['brand']);
                        $sqlQuery = "SELECT * FROM women_inventory WHERE Brand_ID IN('$allSelectedBrands')";
                        echo $sqlQuery;
                        displayProducts($dataconnection, $sqlQuery);
                    }
                    elseif(!empty($_POST['filter'])){
                        foreach($_POST['filter'] as $chosenFilter){
                            $filterBy = $chosenFilter;
                        }
                        switch($filterBy){
                            case 'AZ':
                                $sqlQuery = "SELECT * FROM women_inventory ORDER BY Product_Name ASC";
                                displayProducts($dataconnection, $sqlQuery);
                            break;
                            case 'ZA':
                                $sqlQuery = "SELECT * FROM women_inventory ORDER BY Product_Name DESC";
                                displayProducts($dataconnection, $sqlQuery);
                            break;
                            case 'PA':
                                $sqlQuery = "SELECT * FROM women_inventory ORDER BY Product_Price ASC";
                                displayProducts($dataconnection, $sqlQuery);
                            break;
                            case 'PD':
                                $sqlQuery = "SELECT * FROM women_inventory ORDER BY Product_Price DESC";
                                displayProducts($dataconnection, $sqlQuery);
                            break;
                        }                        
                    }
                    else{
                        $sqlQuery = "SELECT * FROM women_inventory";
                        displayProducts($dataconnection, $sqlQuery);
                    }
                }
                else{
                    $sqlQuery = "SELECT * FROM women_inventory";
                    displayProducts($dataconnection, $sqlQuery);
                }

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
                }*/

            ?>

            <!--Products-->
            <?php 
            /*    function showAllProducts($dataconnection){
                    $sqlQuery = "SELECT * FROM women_inventory";

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
                        $womenDivHTML .='                 <p class="productP">'.$fetch['Product_Color'].'</p> ';
                        $womenDivHTML.='              </div>';
                        $womenDivHTML .='         </a>';
                        $womenDivHTML.='     </div>';
                        $womenDivHTML.=' </li>';
                    }
                    $womenDivHTML .= '</ul>';
                    $womenDivHTML .= '</div>';
                    echo $womenDivHTML;
                }*/
            ?>

            <?php  ?>

            
        </div>

    </body>
</html>