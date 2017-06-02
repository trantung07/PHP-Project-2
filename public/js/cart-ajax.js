/*
	Bắt sự kiện click vào nut add to cart ngoài trang chủ
*/
$('.add-cart').click(function(ev){
		ev.preventDefault();
		var href = $(this).attr('href');
		$.ajax({
			url:href,
			type:'GET',
			success:function(res){
				$('.icon-cart').load(location.href + " .icon-cart>*","");
				$('.cart-list').load(location.href + " .cart-list>*","");
				
			}			
		});
		swal({
			title: "Đã thêm sản phẩm vào giỏ hàng",						
			timer: 1000,
			showConfirmButton: false
		});
		
	});
/*
	Bắt sự kiện click vào nut xóa item header trang chủ
*/
$(document).on('click','.btn-x-item',function(ev){
		ev.preventDefault();
// alert(1212);
	var href = $(this).attr('href');
	console.log(href);
	$.ajax({
		url:href,
		type:'GET',
		success:function(res){
			$('.icon-cart').load(location.href + " .icon-cart>*","");
			$('.cart-list').load(location.href + " .cart-list>*","");
		}
	});
});
/*
	Bắt sự kiện click vào nut clear cart xóa toàn bộ item rong giỏ hàng
*/
$(document).on('click','.btn-clear-cart',function(ev){
	ev.preventDefault();
	var href = $(this).attr('href');
	$.ajax({
		url:href,
		type:'GET',
		success:function(res){
			$('#tbody-list-cart').load(location.href + " #tbody-list-cart>*","");
			$('#tbody-list-all-cart').load(location.href + " #tbody-list-all-cart>*","");
			$('.icon-cart').load(location.href + " .icon-cart>*","");
			$('.cart-list').load(location.href + " .cart-list>*","");
			
		}
	});
});


/*
	Bắt sự kiện click vào nut update cart up date số lượng item trong cart theo id và quantity
*/

$(document).on('click','.btn-update-cart',function(ev){
	ev.preventDefault();
	var href = $(this).attr('href');
	var id = $(this).data('id');
	var qtt = $('input#'+id).val();
	// alert(qtt);
	$.ajax({
		url:href,
		type:'GET',
		data:{quantity:qtt},

		success:function(res){
			$('#tbody-list-cart').load(location.href + " #tbody-list-cart>*","");
			$('#tbody-list-all-cart').load(location.href + " #tbody-list-all-cart>*","");
			$('.icon-cart').load(location.href + " .icon-cart>*","");
			$('.cart-list').load(location.href + " .cart-list>*","");
			$('.last-total').load(location.href + " .last-total>*","");
		}
	});
});


$(document).on('click','.btn-delete-item',function(ev){
	ev.preventDefault();
	// alert(1212);
	var href = $(this).attr('href');
	console.log(href);
	$.ajax({
		url:href,
		type:'GET',
		success:function(res){
			$('.icon-cart').load(location.href + " .icon-cart>*","");
			$('.cart-list').load(location.href + " .cart-list>*","");
			$('#tbody-list-cart').load(location.href + " #tbody-list-cart>*","");
			$('#tbody-list-all-cart').load(location.href + " #tbody-list-all-cart>*","");
			$('.last-total').load(location.href + " .last-total>*","");
		}
	});
});

// $(document).ready(function() {
// 	$(document).on('click','.btn-order',function(ev){
// 		ev.preventDefault();
// 		var form_data = $('#form-order').serialize();

// 		$.ajax({
// 			url:'http://localhost:81/Clem/cart/checkout-ajax.php',
// 			type:'POST',
// 			data:form_data,
// 			success:function(res){
// 				// alert(res);
// 				if (res == 1) {
// 					$('#modal-message').modal('show');
// 					$('#checkout-page').load(location.href + " #checkout-page>*","");
// 				}else{
// 					alert('Khong thanh cong');
// 				}
				
			
// 			}
// 		});
// 	});

// });