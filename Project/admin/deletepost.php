<?php session_start(); 
$conn = mysqli_connect('localhost','id11163940_projectcse485','Project485','id11163940_dhntt');
//Buoc 2 Kiem tra va xu ly lỗi (Nếu có)
if (!$conn) {
	die('Error ...'.mysqli_connect_error());
}?>
<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
		$id = $_GET['id'];
		$sql= "DELETE  FROM posts WHERE id={$id}";
		$query = mysqli_query($conn,$sql) or die('sql error'.mysqli_error($conn));
		$_SESSION['success'] = 'Xóa thành công bài viết';
		header('location:listpost.php');
	
?>