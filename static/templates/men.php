
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
                <span class="headerSpan">Men's Shoes</span>
            </h1>
            
            <!--Filter Bar-->
            <div class="div1">
                <form method="post">
                    <div class="div2">
                        <div class="dropdown">
                        <!--Loads all Men's Shoes-->
                            <button class="dropbtn filterBtn">All Shoes</button>
                        </div>
                        <div class="filterSeparator">
                            <div></div>
                        </div>
                        <div class="dropdown" id="brandDropdown">
                            <button class="dropbtn filterBtn">Brand
                                <span class="span1">
                                    <span aria-hidden="true" class="span2" color="black">
                                        <svg viewBox="0 0 129 129">
                                            <path d="M121.3 34.6c-1.6-1.6-4.2-1.6-5.8 0l-51 51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8 0-1.6 1.6-1.6 4.2 0 5.8l53.9 53.9c.8.8 1.8 1.2 2.9 1.2 1 0 2.1-.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2.1-5.8z"></path>
                                        </svg>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-content">
                                <label class="colorChoices">Alexander McQueen
                                    <input type="checkbox" name="brand" value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Balenciaga
                                    <input type="checkbox" name="brand" value="3">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Givenchy
                                    <input type="checkbox" name="brand" value="5">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Gucci
                                    <input type="checkbox" name="brand" value="6">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Louboutin
                                    <input type="checkbox" name="brand" value="8">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Prada
                                    <input type="checkbox" name="brand" value="11">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Salvatore Ferragamo
                                    <input type="checkbox" name="brand" value="12">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Valentino Garavani
                                    <input type="checkbox" name="brand" value="14">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Yves Saint Laurent
                                    <input type="checkbox" name="brand" value="15">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="dropdown" id="modelDropdown">
                            <button class="dropbtn filterBtn">Model
                                <span class="span1">
                                    <span aria-hidden="true" class="span2" color="black">
                                        <svg viewBox="0 0 129 129">
                                            <path d="M121.3 34.6c-1.6-1.6-4.2-1.6-5.8 0l-51 51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8 0-1.6 1.6-1.6 4.2 0 5.8l53.9 53.9c.8.8 1.8 1.2 2.9 1.2 1 0 2.1-.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2.1-5.8z"></path>
                                        </svg>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-content">
                                <label class="colorChoices">Boots
                                    <input type="checkbox" name="model" value="Boots">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Dress Shoes
                                    <input type="checkbox" name="model" value="Dress Shoes">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Loafers
                                    <input type="checkbox" name="model" value="Loafers">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Slides
                                    <input type="checkbox" name="model" value="Slides">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Sneakers
                                    <input type="checkbox" name="model" value="Sneakers">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="dropdown" id="colorDropdown">
                            <button class="dropbtn filterBtn">Color
                                <span class="span1">
                                    <span aria-hidden="true" class="span2" color="black">
                                        <svg viewBox="0 0 129 129">
                                            <path d="M121.3 34.6c-1.6-1.6-4.2-1.6-5.8 0l-51 51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8 0-1.6 1.6-1.6 4.2 0 5.8l53.9 53.9c.8.8 1.8 1.2 2.9 1.2 1 0 2.1-.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2.1-5.8z"></path>
                                        </svg>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-content">
                                <label class="colorChoices">Black
                                    <input type="checkbox" name="color" value="Black">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Blue
                                    <input type="checkbox" name="color" value="Blue">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Brown
                                    <input type="checkbox" name="color" value="Brown">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Gold
                                    <input type="checkbox" name="color" value="Gold">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Green
                                    <input type="checkbox" name="color" value="Green">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Grey
                                    <input type="checkbox" name="color" value="Grey">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Ivory
                                    <input type="checkbox" name="color" value="Ivory">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Leopard
                                    <input type="checkbox" name="color" value="Leopard">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Navy
                                    <input type="checkbox" name="color" value="Navy">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Orange
                                    <input type="checkbox" name="color" value="Orange">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Pink
                                    <input type="checkbox" name="color" value="Pink">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Red
                                    <input type="checkbox" name="color" value="Red">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Tan
                                    <input type="checkbox" name="color" value="Tan">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">White
                                    <input type="checkbox" name="color" value="White">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Yellow
                                    <input type="checkbox" name="color" value="Yellow">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="filterSeparator"><div></div></div>
                        <div class="dropdown">
                            <button class="dropbtn">Sort By
                                <span class="span1">
                                    <span aria-hidden="true" class="span2" color="black">
                                        <svg viewBox="0 0 129 129">
                                            <path d="M121.3 34.6c-1.6-1.6-4.2-1.6-5.8 0l-51 51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8 0-1.6 1.6-1.6 4.2 0 5.8l53.9 53.9c.8.8 1.8 1.2 2.9 1.2 1 0 2.1-.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2.1-5.8z"></path>
                                        </svg>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-content">
                                <label class="colorChoices">A-Z
                                    <input type="radio" name="filter[]" value="AZ">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Z-A
                                    <input type="radio" name="filter[]" value="ZA">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Price Ascending
                                    <input type="radio" name="filter[]" value="PA">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Price Descending
                                    <input type="radio" name="filter[]" value="PD">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="filterSeparator">
                            <div></div>
                        </div>
                        <div class="dropdown">
                        <!--Loads all Men's Shoes-->
                            <input class="dropbtn filterBtn" type="submit" name="submit" value="Sort"/>
                        </div>
                    </div>            
                </form>
            </div>


            <!--Sort Btn-->
            <?php 
                $sqlQuery = '';
                if(isset($_POST['submit'])){
                    if(!empty($_POST['model'])){
                        $allSelectedModels = implode("', '", (array)$_POST['model']);
                        $sqlQuery = "SELECT * FROM men_inventory WHERE Shoe_Type IN('$allSelectedModels')";
                        echo $sqlQuery;
                        displayProducts($dataconnection, $sqlQuery);
                    }
                    elseif(!empty($_POST['color'])){
                        $colorQList=array();

                        foreach((array)$_POST['color'] as $checked){
                            $colorQList[] = "Product_Color LIKE '%".$checked."%'";
                        }
                        $sqlQuery = 'SELECT * FROM men_inventory WHERE '.implode(' OR ', $colorQList);
                        echo $sqlQuery;
                        displayProducts($dataconnection, $sqlQuery);
                    }
                    elseif(!empty($_POST['brand'])){
                        $allSelectedBrands = implode(", ", (array)$_POST['brand']);
                        $sqlQuery = "SELECT * FROM men_inventory WHERE Brand_ID IN('$allSelectedBrands')";
                        echo $sqlQuery;
                        displayProducts($dataconnection, $sqlQuery);
                    }
                    elseif(!empty($_POST['filter'])){
                        foreach($_POST['filter'] as $chosenFilter){
                            $filterBy = $chosenFilter;
                        }
                        switch($filterBy){
                            case 'AZ':
                                $sqlQuery = "SELECT * FROM men_inventory ORDER BY Product_Name ASC";
                                displayProducts($dataconnection, $sqlQuery);
                            break;
                            case 'ZA':
                                $sqlQuery = "SELECT * FROM men_inventory ORDER BY Product_Name DESC";
                                displayProducts($dataconnection, $sqlQuery);
                            break;
                            case 'PA':
                                $sqlQuery = "SELECT * FROM men_inventory ORDER BY Product_Price ASC";
                                displayProducts($dataconnection, $sqlQuery);
                            break;
                            case 'PD':
                                $sqlQuery = "SELECT * FROM men_inventory ORDER BY Product_Price DESC";
                                displayProducts($dataconnection, $sqlQuery);
                            break;
                        }
                    }
                    else{
                        $sqlQuery = "SELECT * FROM men_inventory";
                        displayProducts($dataconnection, $sqlQuery);
                    }
                }
                else{
                    $sqlQuery = "SELECT * FROM men_inventory";
                    displayProducts($dataconnection, $sqlQuery);
                }

                function displayProducts($dataconnection, $sqlQuery){
                    $result = mysqli_query($dataconnection, $sqlQuery);

                    $menDivHTML = '<div class="productDiv" data-query="women-all-shoes">';

                    $menDivHTML = '<ul class="productUl" style="width:80%; margin-left:auto; margin-right:auto;">';

                    while($fetch = mysqli_fetch_array($result)){

                        $menDivHTML .='<li class="productLi" data-object-id="prd-123">';// add css classes and the like here. In case you don't know, the .= operators concatenate the strings that will make your html code.
                        $menDivHTML .='    <div class="productDiv2">'; // be careful with this class, as you might need to evaluate it for every run of the loop
                        $menDivHTML.='        <a class="productA" href="index.php?page=store&inventory=men&item='.$fetch['Product_ID'].'&brandid='.$fetch['Brand_ID'].'">';
                        $menDivHTML .='            <div class="productDiv3">';
                        $menDivHTML .='                 <div class="productDiv4">';
                        $menDivHTML .='                     <img class="productImg" src="'.$fetch['Product_Img'].'" alt="" />';
                        $menDivHTML.='                  </div>';
                        $menDivHTML .='             </div>';
                        $menDivHTML .='             <div class="productDiv5">';
                        $menDivHTML .='                 <span class="productSpan1">';
                        $menDivHTML .='                     <span class="">'.$fetch['Product_Name'].'</span>';
                        $menDivHTML .='                 </span>';
                        $menDivHTML .='                 <p class="productP">'.$fetch['Product_Color'].'</p> ';
                        $menDivHTML .='              </div>';
                        $menDivHTML .='         </a>';
                        $menDivHTML .='     </div>';
                        $menDivHTML .=' </li>';
                    }
                    $menDivHTML .= '</ul>';
                    $menDivHTML .= '</div>';
                    echo $menDivHTML;
                }

            ?>

            <?php 
            /* $sqlQuery = "SELECT * FROM men_inventory";

             $result = mysqli_query($dataconnection, $sqlQuery);

             $menDivHTML = '<div class="productDiv" data-query="women-all-shoes">';

             $menDivHTML = '<ul class="productUl" style="width:80%; margin-left:auto; margin-right:auto;">';

             while($fetch = mysqli_fetch_array($result)){

                $menDivHTML .='<li class="productLi" data-object-id="prd-123">';// add css classes and the like here. In case you don't know, the .= operators concatenate the strings that will make your html code.
                $menDivHTML .='    <div class="productDiv2">'; // be careful with this class, as you might need to evaluate it for every run of the loop
                $menDivHTML.='        <a class="productA" href="index.php?page=store&inventory=men&item='.$fetch['Product_ID'].'&brandid='.$fetch['Brand_ID'].'">';
                $menDivHTML .='            <div class="productDiv3">';
                $menDivHTML .='                 <div class="productDiv4">';
                $menDivHTML .='                     <img class="productImg" src="'.$fetch['Product_Img'].'" alt="" />';
                $menDivHTML.='                  </div>';
                $menDivHTML .='             </div>';
                $menDivHTML .='             <div class="productDiv5">';
                $menDivHTML .='                 <span class="productSpan1">';
                $menDivHTML .='                     <span class="">'.$fetch['Product_Name'].'</span>';
                $menDivHTML .='                 </span>';
                $menDivHTML .='                 <p class="productP">'.$fetch['Product_Color'].'</p> ';
                $menDivHTML .='              </div>';
                $menDivHTML .='         </a>';
                $menDivHTML .='     </div>';
                $menDivHTML .=' </li>';
            }
            $menDivHTML .= '</ul>';
            $menDivHTML .= '</div>';*/

            ?>

            <?php ?>
            
        </div>

    </body>
</html>
