<?php 
/*
* add_cart() truyền vào 2 tham số
 @product thông tin của sản phẩm ( đã ducowj gọi trong file add-cart.php )
 @quantity là số lượng khi add
*/
function add_cart($product,$quantity = 1){
	// neu co roi thi tang so luong
	if (isset($_SESSION['cart'][$product['id']])) {
		$_SESSION['cart'][$product['id']]['quantity'] += 1;
	}else{
		// nguoc lai tao moi id khac
		$_SESSION['cart'][$product['id']] = $product;
		$_SESSION['cart'][$product['id']]['quantity'] = $quantity;
	}	
}

/*
* get_cart() trả về %_SESSION['cart']
*/
function get_cart(){
	if (isset($_SESSION['cart'])) {
		return $_SESSION['cart'];
	}
	return;
	
}

/*
* update_cart() cập nhật số lượng của một item trong giỏ hang theo id và quantity
*/
function update_cart($id,$quantity){
	$qtt = (is_numeric($quantity) && $quantity > 0) ? $quantity : 1;
	$carts = get_cart();
	if (isset($carts[$id])) {
		$_SESSION['cart'][$id]['quantity']  = $qtt;
	}
}

/*
* get_cost() Trả về tổng tiền toàn giỏ hang
*/
function get_cost(){
	$carts = get_cart();
	$total = 0;

	if (count($carts)) {
		foreach ($carts as $c) {
			$total += $c['price'] * $c['quantity'];
		}
	}

	return $total;
}

/*
* get_qtt() Trả về tổng số lượng sản phẩm trog giỏ hàng
*/
function get_qtt(){
	$carts = get_cart();
	$total = 0;

	if (count($carts)) {
		foreach ($carts as $c) {
			$total += $c['quantity'];
		}
	}
	
	return $total;
}

/*
* thanh_tien() Trả về tổng thành tiền cảu từng sản phẩm trong giỏ hang theo giá và số lượng
*/
function thanh_tien($id){
	$cart = get_cart();
	$total = 0;
	if (isset($cart[$id])) {
		$total += $cart[$id]['quantity'] * $cart[$id]['price'];
	}

	return $total;
}

/*
* clear_item() Xóa một item trong giỏ hang theo id
*/
function clear_item($id){
	if (isset($_SESSION['cart'][$id])) {
		unset($_SESSION['cart'][$id]);
	}
	
}

/*
* clear_cart() Xóa gio hang
*/
function clear_cart(){
	if (isset($_SESSION['cart'])) {
		unset($_SESSION['cart']);
	}
	
}

?>