<?php
if(empty(session_id()))
	{
		session_start();
	}

	include_once("../DB.php");

	if (!empty($_POST["dangnhap"])) 
	{
		$taikhoan = $_POST["tk"];
		$matkhau = $_POST["mk"];
		$sql = "select * from user where username = '".$taikhoan."' AND password = '".$matkhau."'";

		$result = $mysqli -> query($sql);
		// Associative array
		$row = $result -> fetch_array(MYSQLI_ASSOC);
		$user_name = $row["username"];
		$email= $row["email"];
		$sdt = $row["sdt"];
		$role = $row["role"];
		$id = $row["id"];
		//$row["Age"]);

		// Free result set
		$result -> free_result();

		$mysqli -> close();

		if(!empty($user_name))
		{
			$_SESSION['NguoiDung']= array(	"ten"=>$user_name,
											"id"=>$id,
											"sdt"=>$sdt,
											"email"=>$email,
											"role"=>$role,
											//"khyenmai"=>$KQ[0]['PhanTram']
										);
			//echo $_SESSION['NguoiDung']['ten'];
			//header('Location: ../index.php');
			echo 'Đăng nhập thành công!';
		}
		else 
		{
			/*$KQ = DP::run_query("select * from nhanvien where Email = ? AND MatKhau = ? AND TrangThai=1",[$taikhoan,$matkhau],2);
			if(!empty($KQ))
			{	
			$_SESSION['NguoiDung']= array(	"ma"=>$KQ[0]['MaNV'],
											"ten"=>$KQ[0]['TenNV'],
											"chinhanh"=>$KQ[0]['MaCN'],
											"sdt"=>$KQ[0]['SDT'],
											"dc"=>$KQ[0]['DiaChi'],
											"chucvu"=>$KQ[0]['ChucVu']);
				//header('Location: ../index.php');
				echo '1';
			}
			else 
			{
				//unset($_SESSION['NguoiDung']);
				//var_dump($_SESSION['NguoiDung']);
				//header('Location: ../login.php');
				echo '0';
			}*/
			echo $taikhoan.$matkhau;
		}
	}
	else 
	{
		unset($_SESSION['NguoiDung']);
		//session_destroy();
		//header('Location:index.php');
		echo "Hẹn gặp lại bạn";
	}


?>