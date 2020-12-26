<?php

//fetch_data.php

include('includes/config.php');
$connect=$dbh;
if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM product WHERE product_status = '1'
	";
	
	if(isset($_POST['product_type']))
	{
		$brand_filter = implode("','", $_POST["product_type"]);
		$query .= "
		 AND product_type IN('".$brand_filter."')
		";
	}
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
		 $hey=$row['product_name'];
		 $yo=htmlspecialchars(json_encode($hey));
		 $output .= '
			
			 <section class="shop-item" data-amount="%s" data-img="img/webshop/'. $row['product_image'] .'"
                         data-description="yeet" data-name="'. $row['product_name'] .'">
                    <p class="price-tag">
                        <span class="amount">'. $row['product_price'] .'</span>
                    </p>
                    <figure>
                        <img src="img/webshop/'. $row['product_image'] .'" alt="Warhammer 40,000: Recruit Edition">
                    </figure>
                    <p class="description">'. $row['product_name'] .'</p>
                    <button class="order-button" onclick="setupOrderButtonListener();autofill2('.$yo.');autofill('. $row['product_price'] .','. $row['product_id'] .');">Order now!</button>
                </section>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>