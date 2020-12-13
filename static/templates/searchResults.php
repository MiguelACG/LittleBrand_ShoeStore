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

          <!--Search-->
          <?php 
            $keyword = $_POST['searchBoxInput'];

            $searchQuery = "SELECT * FROM all_inventory 
                    WHERE Product_Name LIKE '%".$keyword."%' 
                    OR Product_Description LIKE '%".$keyword."%'
                    OR Product_Color LIKE '%".$keyword."%'
                    OR shoe_type LIKE '%".$keyword."%'";
            
            $result = mysqli_query($dataconnection, $searchQuery);

            $DivHtml= '<div class="productDiv" data-query="women-all-shoes">';

            $DivHtml.= '<ul class="productUl" style="width:80%; margin-left:auto; margin-right:auto;">';

            while($fetch = mysqli_fetch_array($result)){
                $DivHtml .='<li class="productLi" data-object-id="prd-123">';// add css classes and the like here. In case you don't know, the .= operators concatenate the strings that will make your html code.
                $DivHtml .='    <div class="productDiv2">'; // be careful with this class, as you might need to evaluate it for every run of the loop
                $DivHtml.='        <a class="productA" href="index.php?page=store&inventory=all&item='.$fetch['Product_ID'].'&brandid='.$fetch['Brand_ID'].'">';
                $DivHtml .='            <div class="productDiv3">';
                $DivHtml.='                 <div class="productDiv4">';
                $DivHtml .='                     <img class="productImg" src="'.$fetch['Product_Img'].'" alt="" />';
                $DivHtml.='                  </div>';
                $DivHtml .='             </div>';
                $DivHtml .='             <div class="productDiv5">';
                $DivHtml .='                 <span class="productSpan1">';
                $DivHtml .='                     <span class="">'.$fetch['Product_Name'].'</span>';
                $DivHtml .='                 </span>';
                $DivHtml .='                 <p class="productP">'.$fetch['Product_Color'].'</p> ';
                $DivHtml.='              </div>';
                $DivHtml .='         </a>';
                $DivHtml.='     </div>';
                $DivHtml.=' </li>';
            }
            $DivHtml .= '</ul>';
            $DivHtml .= '</div>';
            echo $DivHtml;

          ?>            
        </div>

    </body>
</html>