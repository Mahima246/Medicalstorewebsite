

<?php include('database.php'); ?>

<?php
	//Assign post variables
	
	//$email_id = $_POST['email_id'];
	/*$password= $_POST['password'];
	$usertype= $_POST['category'];

	//mysql_select_db("");
	/*
	$result= mysql_query("select email_id,password from useraccess where email_id='email_id' and  password='password'")or die("Failed to query database".mysql_error());
	$row=mysql_fetch_array($result);
	if($row['email_id']==$email_id && $row['password']==$password){
		echo "Login success!!!!";

	}else
	{
		echo "Failed to login";
	}*/
	
	
?>
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
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					
				
				<div class="alert" id="msg"></div>
				<?php
	//Assign post variables
	$name = $_POST['name'];
	$email = $_POST['email'];
	$gender = $_POST['Gender'];
	$dateofbirth = $_POST['Date'];
	$monthofbirth = $_POST['Month'];
	$yearofbirth = $_POST['Year'];
	$age=$_POST['age'];
	$contact=$_POST['number'];
	$Bloodgroup = $_POST['Bloodgroup'];


	$MaritalStatus = $_POST['MStatus'];

	$password= $_POST['Password'];

	
	mysqli_query($connect,"INSERT INTO user_information(name,email_id,gender,date_of_birth,month_of_birth,year_of_birth,age,contact,blood_group,marital_status,password)
											VALUES ('$name','$email','$gender','$dateofbirth','$monthofbirth','$yearofbirth','$age','$contact','$Bloodgroup','$MaritalStatus','$password')");
	mysqli_query($connect,"INSERT INTO useraccess(email_id,password)VALUES('$email','$password')");
											
	if(mysqli_affected_rows($connect) > 0){
		echo "<h1><p>Congratulations! You have been registered.</p></h1>";
		echo "<h1><a href=\"index.html\"><h1>Go Back</h1></a></h1>";
	} else {
		echo "Employee NOT Added!!<br><br>";
		echo mysqli_error ($connect) ;
		echo "<br><h1><a href=\"index.html\"><h2>Go Back</h2></a></h1>";
	}
?>
<?php include('database.php'); ?>
      	    		

				
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
