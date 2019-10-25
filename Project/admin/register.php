<?php
 $conn = mysqli_connect('localhost','id11163940_projectcse485','Project485','id11163940_dhntt');
  if(!$conn){
 die('Không thể kết nối Database');
  };
  if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);    
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    
    $pass = password_hash($password,PASSWORD_BCRYPT);
    
    $sql ="INSERT into admin(username,password,email) values('$username','$pass','$email')";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
        echo 'Đăng ký tài khoản thành công';
    }

 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký tài khoản</title>
     <link rel="stylesheet" href="css/dangki.css">
</head>
<body style="background-image: url(image/1.jpg);">
       <h1>Đăng ký tài khoản </h1>
        <form action="" method="post">
            <div >
                <input placeholder="Tên tài khoản" name="username"  type="username" required="">  
            </div> <br>
           
            <div >
                <input placeholder="Email" name="email"  type="email" required="">  
            </div><br>

            <div >
                <input placeholder="Mật khẩu" name="password"  class="pass" type="password" required="">  
            </div><br>
            

            <div class="right-w3l">
				<input type="submit" name="submit"  value=" Đăng ký">
			</div>
	        <span>Bạn đã có tài khoản <a href="login.php">Đăng nhập</a></span>
        </form>
    

</body>
</html>
