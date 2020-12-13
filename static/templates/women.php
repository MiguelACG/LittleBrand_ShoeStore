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
                <span class="headerSpan">Women's Shoes</span>
            </h1>
            
            <!--Filter Bar-->
            <div class="div1">
                <form method="post">
                    <div class="div2" style="width:100%;">
                        <div class="dropdown">
                        <!--Loads all Women's Shoes-->
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
                                <label class="colorChoices">Alexander Wang
                                    <input type="checkbox" name="brand" value="2">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Balenciaga
                                    <input type="checkbox" name="brand" value="3">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Bottega Veneta
                                    <input type="checkbox" name="brand" value="4">
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
                                <label class="colorChoices">Jimmy Choo
                                    <input type="checkbox" name="brand" value="7">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Louboutin
                                    <input type="checkbox" name="brand" value="8">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Manolo Blahnik
                                    <input type="checkbox" name="brand" value="9">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Miu Miu
                                    <input type="checkbox" name="brand" value="10">
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
                                <label class="colorChoices">Stuart Weitzman
                                    <input type="checkbox" name="brand" value="13">
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
                                    <input type="checkbox" name="model[]" value="Boots">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Pumps
                                    <input type="checkbox" name="model[]" value="Pumps">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Sandals
                                    <input type="checkbox" name="model[]" value="Sandals">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Slides
                                    <input type="checkbox" name="model[]" value="Slides">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Sneakers
                                    <input type="checkbox" name="model[]" value="Sneakers">
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
                                    <input type="checkbox" name="color[]" value="Black">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Crystal
                                    <input type="checkbox" name="color[]" value="Crystal">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Gold
                                    <input type="checkbox" name="color[]" value="Gold">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Green
                                    <input type="checkbox" name="color[]" value="Green">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Grey
                                    <input type="checkbox" name="color[]" value="Grey">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Nude
                                    <input type="checkbox" name="color[]" value="Nude">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Pink
                                    <input type="checkbox" name="color[]" value="Pink">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Red
                                    <input type="checkbox" name="color[]" value="Red">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Silver
                                    <input type="checkbox" name="color[]" value="Silver">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Turquoise
                                    <input type="checkbox" name="color[]" value="Turquoise">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">White
                                    <input type="checkbox" name="color[]" value="White">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="colorChoices">Yellow
                                    <input type="checkbox" name="color[]" value="Yellow">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="filterSeparator"><div></div></div>
                        <div class="dropdown">
                            <button class="dropbtn">Filter By
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
                        <!--Loads all Women's Shoes-->
                            <input class="dropbtn filterBtn" type="submit" name="submit" value="Sort"/>
                        </div>
            
                    </div>
                </form>
            </div>

            <!--Sort Btn-->
            <?php 

            $offset = 0; //beginning of set
            $page_result = 6; //number of items to display

            //gets items
            if($_GET['pageno'])
            {
                $page_value = $_GET['pageno'];
                if($page_value > 1)
                {	
                   $offset = ($page_value - 1) * $page_result;
                }
            }  

                $sqlQuery = '';
                if(isset($_POST['submit'])){
                    if(!empty($_POST['model'])){
                        $allSelectedModels = implode("', '", $_POST['model']);
                        $sqlQuery = "SELECT * FROM all_inventory WHERE Gender LIKE 'women' AND Shoe_Type IN('$allSelectedModels') LIMIT $offset, $page_result";
                        displayProducts($dataconnection, $sqlQuery);
                    }
                    elseif(!empty($_POST['color'])){
                        $colorQList=array();

                        foreach($_POST['color'] as $checked){
                            $colorQList[] = "Product_Color LIKE '%".$checked."%'";
                        }
                        $sqlQuery = "SELECT * FROM all_inventory WHERE Gender LIKE 'women' AND ".implode(' OR ', $colorQList);
                        displayProducts($dataconnection, $sqlQuery);
                    }
                    elseif(!empty($_POST['brand'])){
                        $allSelectedBrands = implode(", ", (array)$_POST['brand']);
                        $sqlQuery = "SELECT * FROM all_inventory WHERE Gender LIKE 'women' AND Brand_ID IN('$allSelectedBrands') LIMIT $offset, $page_result";
                        displayProducts($dataconnection, $sqlQuery);
                    }
                    elseif(!empty($_POST['filter'])){
                        foreach($_POST['filter'] as $chosenFilter){
                            $filterBy = $chosenFilter;
                        }
                        switch($filterBy){
                            case 'AZ':
                                $sqlQuery = "SELECT * FROM all_inventory WHERE Gender LIKE 'women' ORDER BY Product_Name ASC LIMIT $offset, $page_result";
                                displayProducts($dataconnection, $sqlQuery);
                            break;
                            case 'ZA':
                                $sqlQuery = "SELECT * FROM all_inventory WHERE Gender LIKE 'women' ORDER BY Product_Name DESC LIMIT $offset, $page_result";
                                displayProducts($dataconnection, $sqlQuery);
                            break;
                            case 'PA':
                                $sqlQuery = "SELECT * FROM all_inventory WHERE Gender LIKE 'women' ORDER BY Product_Price ASC LIMIT $offset, $page_result";
                                displayProducts($dataconnection, $sqlQuery);
                            break;
                            case 'PD':
                                $sqlQuery = "SELECT * FROM all_inventory WHERE Gender LIKE 'women' ORDER BY Product_Price DESC LIMIT $offset, $page_result";
                                displayProducts($dataconnection, $sqlQuery);
                            break;
                        }                        
                    }
                    else{
                        $sqlQuery = "SELECT * FROM all_inventory WHERE Gender LIKE 'women' LIMIT $offset, $page_result";
                        displayProducts($dataconnection, $sqlQuery);
                    }
                }
                else{
                    $sqlQuery = "SELECT * FROM all_inventory WHERE Gender LIKE 'women' LIMIT $offset, $page_result";
                    displayProducts($dataconnection, $sqlQuery);
                }

                $pagecount = 50; // Total number of rows
                $num = $pagecount / $page_result ;
         
                $pageLinks = '<div class="paging" style=" margin-left: auto; margin-right: auto; width: 80%; text-align: center">';
                $pageLinks .= '<ul class="paging-ul" style="list-style-type: none;">';
                for($i = 1 ; $i <= $num ; $i++)
                {
                     $pageLinks .= '<li style="display: inline; margin: 5%;"><a href="index.php?page=women&pageno='.$i.'">'.$i.'</a></li>';
                }
                $pageLinks .= '</ul>';
                $pageLinks .= '</div>';
                echo $pageLinks;    

                function displayProducts($dataconnection, $sqlQuery){
                    $result = mysqli_query($dataconnection, $sqlQuery);

                        $womenDivHTML = '<div class="productDiv" data-query="women-all-shoes">';

                        $womenDivHTML = '<ul class="productUl" style="width:80%; margin-left:auto; margin-right:auto;">';

                        while($fetch = mysqli_fetch_array($result)){

                            $womenDivHTML .='<li class="productLi" data-object-id="prd-123">';// add css classes and the like here. In case you don't know, the .= operators concatenate the strings that will make your html code.
                            $womenDivHTML .='    <div class="productDiv2">'; // be careful with this class, as you might need to evaluate it for every run of the loop
                            $womenDivHTML.='        <a class="productA" href="index.php?page=store&inventory=all&item='.$fetch['Product_ID'].'&brandid='.$fetch['Brand_ID'].'">';
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
                }

            ?>            
        </div>
    </body>
</html>