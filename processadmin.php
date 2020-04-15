
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
	$invoice_no = $_POST['invoice_no'];
	
	$total_amount = $_POST['total_amount'];

	$discount = $_POST['discount'];

	$discount_amount = $_POST['discount_amount'];
	
	$total_payable = $_POST['total_payable'];
	
	$paid=$_POST['paid'];
	
	$returned=$_POST['returned'];
	
	$Date=$_POST['Date'];

	$Month=$_POST['Month'];

	$Year=$_POST['Year'];

	

	
	mysqli_query($connect,"INSERT INTO bill_information(invoice_no,total_amount,discount,discount_amount,total_payable,paid,returned,Tdate,month,year)VALUES ('$invoice_no','$total_amount','$discount','$discount_amount','$total_payable','$paid','$returned','$Date','$Month','$Year')");

	
											
	if(mysqli_affected_rows($connect) > 0)
	{
		echo "<h1>Thanks for Visiting!!</h1><br><h1> You can collect your bill from the counter :)</h1><br><br>";
		echo "<h1><a href=\"admin.html\"><h1>Go Back</h1></a></h1>";
	}
	else 
	{
		echo "<h1>Some Error Occured</h1><br />";
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
