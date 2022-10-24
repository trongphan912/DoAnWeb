// gửi dữ liệu kiểm tra đăng nhập
function dangnhap() {
	var tk = $('#taikhoan_dangnhap').val();
	var mk = $('#matkhau_dangnhap').val();
	$.ajax({
		type: 'post',
		url: 'data/xu_ly_dang_nhap.php',
		data: ({ tk: tk, mk: mk, dangnhap: 'dangnhap' }),
		success: function (result) {
			if (result) {
				//alert(result);
				if (result === '1') {
					window.location.href = 'index.php';
					alert(result);
				}
				else {
					alert('E-mail hoặc mật khẩu không chính xác, vui lòng nhập lại.');
					alert(result);
                }
			} else {
				alert("error");
			}
		}
	});
}