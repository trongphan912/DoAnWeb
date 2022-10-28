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

// gửi dữ liệu kiểm tra đăng nhập
function capnhat_sanpham() {
	if (confirm("Bạn có chắc cập nhật không?")) {
		product_mota = $('#product_mota')[0].value;
		price = $('#price')[0].value;
		product_name = $('#product_name')[0].value;
		id_sanpham  = $('#id_sanpham')[0].value;
	   $.ajax({
			type: 'post',
			url: 'data/xu_ly_sua_san_pham.php',
			data: ({ 
				capnhat_sanpham: 'capnhat_sanpham', 
				id_sanpham:id_sanpham, 
				product_name:product_name,
				price:price,
				product_mota:product_mota
			}),
			success: function (result) {
				alert(result);
				console.log(id_sanpham,product_name,price,product_mota );
				location.reload();
			}
		});
	  } else {
	    alert('Bạn đã hủy thao tác');
	  }
		
}

// gửi dữ liệu kiểm tra đăng nhập
function xoa_sanpham() {
	if (confirm("Bạn có chắc xóa không?")) {
		id_sanpham  = $('#id_sanpham')[0].value;
	   $.ajax({
			type: 'post',
			url: 'data/xu_ly_sua_san_pham.php',
			data: ({ 
				xoa_sanpham: 'xoa_sanpham', 
				id_sanpham:id_sanpham, 
				
			}),
			success: function (result) {
				alert(result);
				window.location.href = 'index.php';
			}
		});
	  } else {
	    alert('Bạn đã hủy thao tác');
	  }
		
}

// gửi dữ liệu kiểm tra đăng nhập
function khoiphuc_sanpham() {
	if (confirm("Bạn có chắc khôi phục không?")) {
		id_sanpham  = $('#id_sanpham')[0].value;
	   $.ajax({
			type: 'post',
			url: 'data/xu_ly_sua_san_pham.php',
			data: ({ 
				khoiphuc_sanpham: 'khoiphuc_sanpham', 
				id_sanpham:id_sanpham, 
				
			}),
			success: function (result) {
				alert(result);
				window.location.href = 'index.php';
			}
		});
	  } else {
	    alert('Bạn đã hủy thao tác');
	  }
		
}

// gửi dữ liệu kiểm tra đăng nhập
function search_sanpham() {
		search_content  = $('#search_content')[0].value;
		window.location.href = 'search.php?search=' + search_content;
}