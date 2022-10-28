// gửi dữ liệu kiểm tra đăng nhập
function dangnhap() {
	var tk = $('#taikhoan_dangnhap').val();
	var mk = $('#matkhau_dangnhap').val();
	$.ajax({
		type: 'post',
		url: 'data/xu_ly_dang_nhap.php',
		data: ({ tk: tk, mk: mk, dangnhap: 'dangnhap' }),
		success: function (result) {
					alert(result);
					window.location.href = 'index.php';
				}
	});
}

// gửi dữ liệu kiểm tra đăng nhập
function dangxuat() {
	if (confirm("Bạn có chắc đăng xuất?")) {
	   $.ajax({
			type: 'post',
			url: 'data/xu_ly_dang_nhap.php',
			data: ({ dangxuat: 'dangxuat' }),
			success: function (result) {
				alert(result);
				window.location.href = 'index.php';
			}
		});
	  } else {
	    alert('Bạn đã hủy thao tác');
	  }
		
}