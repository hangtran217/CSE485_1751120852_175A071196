<?php
session_start();
// if (isset($_SESSION['email'])) {
// 			header('location:login.php');
			
// 		}
$conn = mysqli_connect('localhost','id11163940_projectcse485','Project485','id11163940_dhntt');
ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

 ?>
 <?php
 if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sqlSelec = "SELECT *FROM posts WHERE id = $id";
		$querySelec = mysqli_query($conn, $sqlSelec);
		$rowSelec = mysqli_fetch_array($querySelec);
	}else{
	    echo "lỗi";
// 		header("location:index.php");
	}
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$title      = $_POST["title"];
		$content    = $_POST["content"];
	    $createdate = $_POST["createdate"];

 
	$sql="UPDATE posts set title='$title' , content='$content', createdate='$createdate' where id=$id";
        
		$query=mysqli_query($conn,$sql);
		if ($query) {
			header("Location: index.php");
		}else{
			echo "Lỗi không sửa dc!";
		}
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
                     <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                     Admin
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

                                <form action="" method="POST" role="form">
	<legend>Sửa bài viết</legend>
	<div class="form-group">
		<label for="">Tên bài viết </label>
		<input type="text" name="title" class="form-control" required value="<?php echo $rowSelec['title']; ?>">
	</div>
	<div class="form-group" >

		<label for="">Content </label>
		<textarea class="form-control" name="content" id="description" cols="30" rows="10">
			<?php echo $rowSelec['content'] ?>
		</textarea>
		<script>
			CKEDITOR.replace('description');
		</script>
	</div>
	<div class="form-group">
		<label for="">Ngày viết </label>
		<input type="date" name="createdate" class="form-control" required value="<?php echo $rowSelec['createdate']; ?>">
	</div>


	<button type="submit" name="btn_submit" class="btn btn-primary">Cập nhật</button>
</form>
        
                        
                                </div>
                        
                    </div>
                    
                     
                 
            
                
       
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    
</body>
</html>