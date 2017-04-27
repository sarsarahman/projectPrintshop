<?php 
/* Sessions created by */ require_once($_SERVER['DOCUMENT_ROOT']."/printshop/private/session.php"); 
include($_SERVER['DOCUMENT_ROOT']."/printshop/private/layout/header.php");
include($_SERVER['DOCUMENT_ROOT']."/printshop/private/layout/logo-admin.php");

	$query = 'SELECT * FROM PRODUCT ORDER BY name';
	include($_SERVER['DOCUMENT_ROOT']."/printshop/private/query_product_list.php");

	$num_rows = mysqli_affected_rows($connection);
	$er = 'No products to edit.';
?>
<div id= "main">
	<div id= "edit-product-list">
	<?
	if($num_rows >= 1){
	 	foreach($rows as $row) { 
			$id=$row['id'];
	?>
			<div id= "edit-product">
				<?php echo "<img src='images/thumbs2/".$row['imageURL']."' alt='".$row['imageALT']."' />"; ?>
				</br>
				<?php echo '<a href="edit-product-form.php?id=' . $row['id'] . '">Edit Product</a>';?>
			</div>
	<?php } 
	} else {  ?>
		<div class="error"> 
			<?php echo $er; ?>
		</div>
	<?php	
		}   
	echo '</div>';
echo '</div>';

include($_SERVER['DOCUMENT_ROOT']."/printshop/private/layout/footer.php") 
?>