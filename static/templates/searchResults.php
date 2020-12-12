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
            <?php 
            $keyword = $_POST['searchBoxInput'];
            include_once '../scripts/search.php';

            insert_search_data($keyword, 'women', $dataconnection); //Search for Women Items
            insert_search_data($keyword, 'men', $dataconnection); //Search for men items

            $searchQuery = "SELECT * FROM search_items";
            
            $result = mysqli_query($dataconnection, $searchQuery);
            echo print_r($result);
            if (!$result) {
              printf("Error: %s\n", mysqli_error($dataconnection));
              exit();
            }


                    $womenDivHTML= '<div class="productDiv" data-query="women-all-shoes">';

                    $womenDivHTML.= '<ul class="productUl" style="width:80%; margin-left:auto; margin-right:auto;">';

                    while($fetch = mysqli_fetch_array($result)){
echo "anything?";
                        $womenDivHTML .='<li class="productLi" data-object-id="prd-123">';// add css classes and the like here. In case you don't know, the .= operators concatenate the strings that will make your html code.
                        $womenDivHTML .='    <div class="productDiv2">'; // be careful with this class, as you might need to evaluate it for every run of the loop
                        echo (int)$fetch['Product_ID'];
                        if((int)$fetch['Product_ID'] > 100){
                          echo "hello";
                          $womenProdID = (int)$fetch['Product_ID']-100;
                          $womenDivHTML.='        <a class="productA" href="index.php?page=store&inventory=women&item='.$womenProdID.'&brandid='.$fetch['Brand_ID'].'">';
                        }
                        else{
                          $womenDivHTML.='        <a class="productA" href="index.php?page=store&inventory=men&item='.$fetch['Product_ID'].'&brandid='.$fetch['Brand_ID'].'">';
                        }
                        
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
                  
            ?>

            <?php  ?>

            
        </div>

    </body>
</html>