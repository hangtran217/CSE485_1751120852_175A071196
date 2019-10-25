<?php 
session_start();

if (isset($_SESSION['email'])) {}
//Bước 1: Kết nối CSDL
$conn = mysqli_connect('localhost','id11163940_projectcse485','Project485','id11163940_dhntt');
//Buoc 2 Kiem tra va xu ly lỗi (Nếu có)
if (!$conn) {
	die('Error ...'.mysqli_connect_error());
}else{
	//Bước 3: Thực hiện truy vấn dữ liệu như ý muốn
	$sql = "select * from posts";
	$result = mysqli_query($conn, $sql);
	//Bước 4 Xử lý kết quả
	if(mysqli_num_rows($result)>0){
		
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
                                    <h2 style="color: red; margin-left: 200px;">Hiển thị danh sách bài viết</h2>
                                    <?php
                                        echo 'Số bài viết là: '.mysqli_num_rows($result);
                                		echo '<table style="border: solid 2px;">';
                                		echo '<tr style="border: solid 2px;">';
                                		echo '<th style="border: solid 2px;">Mã bài viết  </th><th style="border: solid 2px;">      Tiêu đề  </th><th style="border: solid 2px;">Nội dung bài viết</th><td><th>Chức năng</th></td>';
                                		echo '</tr>';
                                		while ($row = mysqli_fetch_assoc($result)) {
                            		
                                    		echo '<tr>';
                                    		echo '<td style="border: solid 2px;">'.$row['id'].'</td>';
                                    		echo '<td style="border: solid 2px;">'.$row['title'].'</td>';
                                    		echo '<td style="border: solid 2px;">'.$row['content'].'</td>';
                                    		echo '<td class="a" style="border: solid 2px;"><a style="color: black;" href="deletepost.php?id='.$row['id'].'">Xóa</a></td>';
                                    		echo '<td class="a" style="border: solid 2px;"><a style="color: black;" href="editpost.php?id='.$row['id'].'">Sửa</a></td>';
                                    		echo '</tr>';
                                    	}
                            		    echo '</table>';
                            	    }
                                }?>
                                </form>
        
                        
                                </div>
                        
                    </div>
                    
                     
                 
            
                
       
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    
</body>
</html>