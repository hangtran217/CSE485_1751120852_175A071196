<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dang ki</title>
     <link rel="stylesheet" href="css/dangki.css">
</head>
<body style="background-image: url(image/1.jpg);">
       <h1>REGISTRATION USER </h1>
        <form action="" method="post">
        <div class="pom-agile">
        <input placeholder="User-name" name="username"  type="username" required="">  
        </div> <br>
       
        <div class="pom-agile">
        <input placeholder="Password" name="password"  class="pass" type="password" required="">  
        </div><br>
        
        <div class="pom-agile">
        <input placeholder="E-mail" name="email"  type="email" required="">  
        </div><br>
        
        <div class="pom-agile">
        <input placeholder="Full-name" name="fullname"  type="fullname" required="">  
        </div><br>
        <div class="right-w3l">
					<input type="submit" name="submit"  value=" registration">
				</div>
        </form>
        
        <?php
 
 $conn = mysqli_connect('localhost','root','','dhntt');
  if(!$conn){
 die('Khong the ket noi DB');
  };
  if(isset($_POST['submit'])){
    //mysqli_real_escape_string : chống các lệnh như select * from user,...
    $name = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = password_hash($password,PASSWORD_BCRYPT);
    
    $sql ="INSERT into user (username,password,fullname,email) values('$name','$password','$fullname','$email')";
      $result =mysqli_query($conn,$sql);
      echo" <p style='color:white'>Registration successful</p><a href='login.php'>Login</a>";
    }
 
?>
    
</body>
</html>