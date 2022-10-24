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
		$KQ = DP::run_query("select * from user where username = ? AND password = ?",[$taikhoan,$matkhau],2);
		if(!empty($KQ))
		{
			$_SESSION['NguoiDung']= array(	//"ma"=>$KQ[0]['MaKH'],
											"ten"=>$KQ[0]['username'],
											//"sdt"=>$KQ[0]['SDT'],
											//"dc"=>$KQ[0]['DiaChi'],
											//"loai"=>$KQ[0]['LoaiKH'],
											//"khyenmai"=>$KQ[0]['PhanTram']
										);
			//echo $_SESSION['NguoiDung']['ten'];
			//header('Location: ../index.php');
			echo '1';
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