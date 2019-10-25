<?php
ob_start();
session_start();
ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
$conn = mysqli_connect('localhost','id11163940_projectcse485','Project485','id11163940_dhntt');

if (isset($_SESSION['email'])) {
			header('location:index.php');
			exit();
		}
?>
/*<?php function location($url)
                        { ?>
                            <script type="text/javascript">
                            window.location = "<?=$url?>";
                            </script>
<?php } ?>*/


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
   
	<form  method ="post" >
	
		<div class="pom-agile">
				<h2>Đăng nhập</h2> <br>
				<input placeholder="Email" name="email" class="user" type="email" required="">
				
			</div>
			<div class="pom-agile">
				<input  placeholder="Mật khẩu" name="password" class="pass" type="password" required="">
				
			</div>
			<div class="md3">
				<h6><a href="forgotpassword.php">Quên mật khẩu?</a></h6>
				<div class="right-w3l">
					<input type="submit" name="login" id="login" value="Login">
				</div> <br>
				<div class="register"><b> Chưa có tài khoản?<a href="dangkiuser.php"> Đăng ký ngay</a></b></div>
			</div>
		
	</form>
<?php

if(!$conn){
	die('Không thể kết nối Database');
	};
if (isset($_POST['email'])){
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	
}
if (isset($_POST['password'])){
	$password = mysqli_real_escape_string($conn,$_POST['password']);
}
if(isset($_POST['login'])){
	$sql="SELECT * from admin where email='$email' and permision=0";
	
		$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row['password'])){
		    $_SESSION['level'] = 0;
			$_SESSION['email']=$email;
			echo $_SESSION['email'];
			location("users.php");
        // header('location:users.php');
		    
		}
        else{
          if(isset($_POST['login'])){
            $sql="SELECT * from admin where email='$email' and permision=1";
            $result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row['password'])){
		    $_SESSION['level'] = 1;
			$_SESSION['email']=$email;
// 			location("index.php");
          header('location:index.php');
    }
    }
  }


}
	// else{
		// 	echo '<p style="background:white;"> Mật khẩu sai </p>';
			
		// }

?>
</body>
</html>