
<?php
//Insert order data into cart table
    function insert_item_data($gender, $dataconnection)
    {
        switch($gender){
            case 'men': 
                $sqlOrderGender = "SELECT * FROM men_inventory m, cust_order_item_men mo WHERE m.Product_ID = mo.product_ID";
                break;
            case 'women': 
                $sqlOrderGender = "SELECT * FROM women_inventory w, cust_order_item wo WHERE w.Product_ID = wo.product_ID";
                break;
        }

        $resultGender = mysqli_query($dataconnection, $sqlOrderGender);

        while($fetchGender = mysqli_fetch_array($resultGender)){
            $brandID = $fetchGender['Brand_ID'];
            $productName = $fetchGender['Product_Name'];
            $prodDesc = $fetchGender['Product_Description'];
            $prodCol = $fetchGender['Product_Color'];
            $prodImg = $fetchGender['Product_Img'];
            $prodPrice = $fetchGender['Product_Price'];
            $prodSize = $fetchGender['Product_Size'];
            $shoetype = $fetchGender['shoe_type'];
            //$madein = $fetchGender['made_in'];

            $insertProductData = "INSERT INTO `order_item_product` ( `Brand_ID`, `Product_Name`, `Product_Description`, `Product_Color`, `Product_Img`, `Product_Price`, `Product_Size`, `shoe_type`) VALUES ($brandID, '$productName',  '$prodDesc', '$prodCol', '$prodImg', $prodPrice, $prodSize, '$shoetype' );";

            $exec= mysqli_query($dataconnection, $insertProductData);

        }
    }
?>