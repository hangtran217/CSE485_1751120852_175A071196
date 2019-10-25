<?php
    ob_start();
session_start();
if (isset($_SESSION['email'])) {
		}
ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
$conn = mysqli_connect('localhost','id11163940_projectcse485','Project485','id11163940_dhntt');


 ?>

 <?php
 
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$title = $_POST["title"];
		$content = $_POST["content"];
		$is_public = 0;
		if (isset($_POST["is_public"])) {
			$is_public = $_POST["is_public"];
		}
		

 
		$sql = "INSERT INTO posts(title, content, is_public, createdate, updatedate ) VALUES ( '$title', '$content', '$is_public', now(), now())";
        //thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);
		echo "Bài viết đã thêm thành công";
	}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Trị Hệ Thống</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/baiviet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
         <div id="header">
          <div class="title col-md-4"> 
            <a class="navbar-brand" href="#">QUẢN TRỊ </a></div>
        <div class="ad_logout col-md-5">
           <ul  class="navbar-nav">
            
               <!-- Dropdown -->
               <li class="nav-item ">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello: <?php if (isset($_SESSION['email'])) { echo $_SESSION['email']; } ?></b>
                    </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   
                     <a class="dropdown-item" href="">Hồ Sơ</a><hr>
                     <a class="dropdown-item" href="logout.php">Log out</a>
                  </div>
                </li>
            </ul>
        </div>
       </div>           
                    <div class="btn-group-vertical">
                            
                                   <ul>
                                      <li class="nav-item1">
                                          <a href="index.php">
                                            <i class="fa fa-home"> Trang chủ </i>
                                          </a>
                                       
                                           </li> <hr>
                                     <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-list"> Quản lý bài viết</i> 
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="addpost.php">Thêm bài viết</a>
                                      <a class="dropdown-item" href="listpost.php">Bài viết đã đăng</a>
                                    </div>
                                     </li><hr>
                                    
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-users"> Quản lý người dùng</i> 
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                              <a class="dropdown-item" href="adduser.php">Thêm người dùng</a>
                                              <a class="dropdown-item" href="listuser.php">Hiển thị thông tin người dùng</a>
                                            </div></li>
                                  </ul>
                                   
                                            
  
                    </div>
                   <div class="content">
                            <div id="page-wrapper">

                                <form method="post" >
                                    <h3 id="result"></h3>
                                    <h2 style="color: rgb(56, 221, 84)">Thêm mới bài viết</h2>
                                    
                                    <div class="form-group">
                                        <label>Tên bài viết</label>
                                        <textarea id="content" name="title" class="form-control" style="height: 30px;"></textarea>
                                    </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea id="content" name="content" class="form-control" style="height: 150px;"></textarea>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label>Ảnh</label><br>
                                        <input type="file" name="img">
                                    </div>  
                                    <input type="submit" name="btn_submit"  value="Thêm mới" data-toggle="modal" data-target="#exampleModal">
                                </form>
        
                        
                                </div>
                        
                    </div>
                    
                     
                 
            
                
       
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    
</body>
</html>