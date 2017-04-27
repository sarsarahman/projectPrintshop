<?php ob_start() ?>
<?php /* Sessions */ require_once($_SERVER['DOCUMENT_ROOT']."/printshop/private/session.php"); ?>
<?php /* Database connection */ require_once($_SERVER['DOCUMENT_ROOT']."/printshop/private/db_connect.php"); ?>
<?php /* Functions */ require_once($_SERVER['DOCUMENT_ROOT']."/printshop/private/functions.php"); ?>
<?php /* Validation Functions */ require_once($_SERVER['DOCUMENT_ROOT']."/printshop/private/validation_functions.php"); ?>


<?php include($_SERVER['DOCUMENT_ROOT']."/printshop/private/layout/header.php") ?>

<main>

	<?php /* Nav */ include($_SERVER['DOCUMENT_ROOT']."/printshop/private/layout/logo-admin.php") ?>

	<div id="content">
	
		<div class="errors">
			<?php /* Echoing the success or failure message */ echo message(); ?>
			<?php 
				// Checking for errors and displaying them using the form_errors() function.
				$errors = errors();
				echo form_errors($errors); 			 
			 ?>
		</div>
		
		<p>All fields are required.</p>
		<form action="create-user.php" method="post">
				<div class="details">
					<input type="text" name="username" placeholder="User Name"><br />
					<input type="text" name="password" placeholder="Password"><br />
				</div>
								
				<input type="submit" name="submit">
				
			</form>
			
	</div>
	
	<?php /* Footer */ include($_SERVER['DOCUMENT_ROOT']."/printshop/private/layout/footer.php") ?>

</main>


<?php ob_end_flush() ?>
