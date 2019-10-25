<?php 
  session_start(); 
  if (!isset($_SESSION['email'])) {
    header("location:users.php");
  }
  
	$conn = mysqli_connect("localhost", "id11163940_projectcse485", "Project485", "id11163940_dhntt") or die("Can't connect database");
	if ($conn) {
		 //echo "Kết nối database thành công!";
		mysqli_set_charset($conn, 'utf8');
	}else{
		echo "Lỗi kết nối!";
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
    
    <link rel="stylesheet" href="css/quantri.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <div id="header">
          <div class="title col-md-6"> 
            <a class="navbar-brand" href="#">QUẢN TRỊ USER </a></div>
        <div class="ad_logout col-md-5">
           <ul  class="navbar-nav">
            
               <!-- Dropdown -->
               <li class="nav-item ">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                     Hello User
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   
                     <a class="dropdown-item" href="">Hồ Sơ</a><hr>
                     <a class="dropdown-item" href="logout_user.php">Log out</a>
                  </div>
                </li>
            </ul>
        </div>
       </div>           
                    <div class="btn-group-vertical">
                            
                                   <ul>
                                      <li class="nav-item1">
                                          <a href="#">
                                            <i class="fa fa-home"> Trang chủ </i>
                                          </a>
                                       
                                           </li> <hr>
                                     <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-list"> Danh Mục</i> 
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="#">Download</a>
                                      
                                      <a class="dropdown-item" href="#">Xem Bài viết đã đăng</a>
                                    </div>
                                     </li><hr>
                                   
                                  </ul>
                                   
                                            
  
                    </div>
                    <div class="nd">
                            <div id="page-wrapper">

                                    <div class="container-fluid">
                                        
                                         
                                        <div class="row">
                                            <h1 style="color: #11ee5b;">Chào mừng tới trang User</h1>
                                        </div>
                                        <!-- /content -->
                                        <!-- /.row -->
                        
                                        
                                    </div>
                                    <!-- /.container-fluid -->
                        
                                </div>
                        
                    </div>
                    
                     
                 
            
                
       
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    
</body>
</html>