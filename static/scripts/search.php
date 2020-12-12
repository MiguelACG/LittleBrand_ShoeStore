<?php

    function insert_search_data($keyword, $gender, $dataconnection)
    {
        $sqlClearQuery = "TRUNCATE TABLE search_items";
        $clearResult = mysqli_query($dataconnection, $sqlClearQuery);

        switch($gender){
            case 'men': 
                $sqlOrderGender = "SELECT * FROM men_inventory 
                    WHERE Product_Name LIKE '%".$keyword."%' 
                    OR Product_Description LIKE '%".$keyword."%'
                    OR Product_Color LIKE '%".$keyword."%'
                    OR shoe_type LIKE '%".$keyword."%'";
                break;
            case 'women': 
                $sqlOrderGender = "SELECT * FROM women_inventory 
                    WHERE Product_Name LIKE '%".$keyword."%' 
                    OR Product_Description LIKE '%".$keyword."%'
                    OR Product_Color LIKE '%".$keyword."%'
                    OR shoe_type LIKE '%".$keyword."%'";
                break;
        }

        $resultGender = mysqli_query($dataconnection, $sqlOrderGender);

        while($fetchGender = mysqli_fetch_array($resultGender)){
            if($gender == 'women'){echo "idk anymore";$productID = (int)$fetchGender['Product_ID'] + 100; echo $productID;}
            elseif($gender == 'men'){$productID = $fetchGender['Product_ID'];}
            
            $brandID = $fetchGender['Brand_ID'];
            $productName = $fetchGender['Product_Name'];
            $prodDesc = $fetchGender['Product_Description'];
            $prodCol = $fetchGender['Product_Color'];
            $prodImg = $fetchGender['Product_Img'];
            $prodPrice = $fetchGender['Product_Price'];
            $prodSize = $fetchGender['Product_Size'];
            $shoetype = $fetchGender['shoe_type'];
            //$madein = $fetchGender['made_in'];

            $insertProductData = "INSERT INTO `search_items` ( `Product_ID`, `Brand_ID`, `Product_Name`, `Product_Description`, `Product_Color`, `Product_Img`, `Product_Price`, `Product_Size`, `shoe_type`) 
                VALUES ($productID, $brandID, '$productName',  '$prodDesc', '$prodCol', '$prodImg', $prodPrice, $prodSize, '$shoetype' );";

            $exec= mysqli_query($dataconnection, $insertProductData);
            echo ": yes";

        }
    }

?>