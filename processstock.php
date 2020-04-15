
<?php include('database.php'); ?>




<html lang="en">
<head>
	
	<script  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-02.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					
		
      	    		<?php
	//Assign post variables
	$medicine = $_POST['medicine'];
	$category = $_POST['category'];
	$generic_name = $_POST['generic_name'];
	$manufacturer_name = $_POST['manufacturer_name'];
	$supplier_name = $_POST['supplier_name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$quantity=$_POST['quantity'];
	$cost_price=$_POST['cost_price'];
	$sell_price = $_POST['sell_price'];
	$production_date=$_POST['production_date'];

	$production_month=$_POST['production_month'];

	$production_year=$_POST['production_year'];

	$expiry_date=$_POST['expiry_date'];

	$expiry_month=$_POST['expiry_month'];
	$expiry_year=$_POST['expiry_year'];

	$purchase_id=$_POST['purchase_id'];

	mysqli_query($connect,"INSERT INTO generic_names(medicine_name,generic_name,Category)VALUES ('$medicine','$generic_name','$category')");

	mysqli_query($connect,"INSERT INTO medicine_information(medicine_name,category)VALUES ('$medicine','$category')");

	mysqli_query($connect,"INSERT INTO manufacturer(manufacturer_name)VALUES ('$manufacturer_name')");

	mysqli_query($connect,"INSERT INTO supplier(supplier_name,contact,email)VALUES('$supplier_name','$contact','$email')");

	mysqli_query($connect,"INSERT INTO batch(quantity,cost_price,sell_price,production_date,production_month,production_year, expire_date,expiry_month,expiry_year,purchase_id)VALUES('$quantity','$cost_price','$sell_price','$production_date','$production_month','$production_year','$expiry_date','$expiry_month','$expiry_year','$purchase_id')");
											
	if(mysqli_affected_rows($connect) > 0)
	{
		echo "<h1>Your Data Has Been Successfully uploaded </p></h1><br>";
		echo "<h1><a href=\"stock.html\"><h1>Go Back</h1></a></h1>";
	}
	else 
	{
		echo "Employee NOT Added<br />";
		echo mysqli_error ($connect);
	}
?>

				
			</div>
		</span>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script>
		$(document).ready(function(){
			$('#myForm input').focus(function(){
				$(this).css('background', 'pink');

				$(this).blur(function()
					{
						$(this).css('background', 'none');
					});
			});
		})
//add event
			//$('#myForm select').change(function(){
				/* 
				var vat ="";
				$('select option:selected').each(function()
				{
					cat +=$(this).text() + " ";

				});
				$('#output').text(cat);
			});*/
			//Submit Event
 			/*
		$('#myForm').submit(function(e)
			{
				e.preventDefault();
				alert('Form Submitted');
			})*/
/*
			function login(e){
				e.preventDefault();
				var email=document.getElementById('email').value;

				var password=document.getElementById('password').value;
				console.log('Submitted...');
				var msg=document.getElementById('msg');
				if(email==''||password=''){
					msg.className="alert alert-success";
					msg.innerHTML ='Please fill out all the fields';

				}
				
			}
		
	document.getElementById('myForm').addEventListener('submit',login,false); 
	</script>

</body>
</html>
