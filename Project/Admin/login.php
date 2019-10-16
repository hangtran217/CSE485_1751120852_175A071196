
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-Admin</title>
    <link rel="stylesheet" href="css/login.css">
    
   
	
</head>
<body style="background-image: url(image/1.jpg);">

	<h1 style="margin-top: 4% "> NGUYỄN TẤT THÀNH UNVERSITY</h1>
   
	<form  action=" " method ="post" >
	
		<div class="pom-agile">
				<h2>Login Quick</h2> <br>
				<input placeholder="E-mail" name="email" class="user" type="email" required="">
				
			</div>
			<div class="pom-agile">
				<input  placeholder="Password" name="password" class="pass" type="password" required="">
				
			</div>
			<div class="md3">
				<h6><a href="#">Forgot Password?</a></h6>
				<div class="right-w3l">
					<input type="submit" name="login" id="login" value="Login">
				</div> <br>
				<div class="register"><b> News User ?<a href="dangkiuser.php"> Register</a></b></div>
			</div>
		
	</form>
<?php
$conn = mysqli_connect('localhost','root','','dhntt');
if(!$conn){
	die('Khong the ket noi DB');
	};
if (isset($_POST['email'])){
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	
}
if (isset($_POST['password'])){
	$password = mysqli_real_escape_string($conn,$_POST['password']);
}
if(isset($_POST['login'])){
	$sql="SELECT * from user where email='$email'";
	
		$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row['password'])){
			$_SESSION['user']=$email;
			header('location:Quantrihethong.php');// kiem tra dung thi cho vao trnag admin
		}
		else{
			echo 'mat khau sai';
			 header('location:login.php');
		}


}




?>
</body>
</html>