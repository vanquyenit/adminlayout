<?php
require_once  "../config.php";
session_start();
if(isset($_POST['login_ad'])){
   if($_POST['username_ad']==NULL || $_POST['pass_ad']==NUL){
      echo "thieu ten hoặc pass";}
   else{
      $p = $_POST['pass_ad'];
      $u = $_POST['username_ad'];
   }
   if($u && $p){
      $sql = "SELECT * FROM NhanVien WHERE TenDangNhap = '".$u."' AND MatKhau = '".$p."'";
      $query=mysqli_query($cn,$sql);
      if(mysqli_num_rows($query)==0){
         echo "<script>alert('Tên đăng nhập hoặc mật khẩu sai');</script>";
      }
      else{
         $data = mysqli_fetch_assoc($query);
         $_SESSION["admin"] = $data["TenDangNhap"];
         $_SESSION["hoten_admin"] = $data["HoTenNhanVien"];
         header('Location: index.php');
      }
   }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="public/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
</head>

<body>
	<div class="main">
		<form action="login.php" method="post">
    		<h1><span>Admin</span> <lable> Login </lable> </h1>
  			<div class="inset">
	  			<p>
	    		 <label for="email">Username</label>
   	 			<input type="text" placeholder="" name="username_ad"/>
				</p>
  				<p>
				    <label for="password">Password</label>
				    <input type="password" placeholder="" name="pass_ad"/>
  				</p>
 			 </div>
			  <p class="p-container">
			    <input type="submit" value="Login" name="login_ad">
			  </p>
		</form>
	</div>
</body>
</html>