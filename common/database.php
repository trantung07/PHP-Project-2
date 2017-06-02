<?php 
$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($mysqli,"utf8");

function alert($message) {
    echo "<script type='text/javascript'>alert('$message');</script>";
}
function get_all($table,$fiels_name = false,$field_val = false,$limit = false){
	global $mysqli;
	$data = [];
	$sql = "SELECT * FROM $table";

	if ($fiels_name && $field_val) {
		$sql .= " WHERE $fiels_name  = '$field_val'";
	}

	if ($limit) {
		$sql .= " LIMIT $limit";
	}
	
	$res = mysqli_query($mysqli,$sql);

	if ($res && mysqli_num_rows($res)) {
		while ($row = mysqli_fetch_assoc($res)) {
			$data[] = $row;
		}
	}

	return $data;
}

function phan_trang($table,$fiels_name = false,$field_val = false,$start,$limit){
	global $mysqli;
	$data = [];
	$sql = "SELECT * FROM $table ";
	if ($fiels_name && $field_val) {
		$sql .= " WHERE $fiels_name LIKE '$field_val'";
	}

	if ($limit) {
		$sql .= " LIMIT $start,$limit";
	}

	$res = mysqli_query($mysqli,$sql);

	if ($res && mysqli_num_rows($res)) {
		while ($row = mysqli_fetch_assoc($res)) {
			$data[] = $row;
		}
	}

	return $data;
}
function get_like($table,$fiels_name = false,$field_val = false,$limit = false){
	global $mysqli;
	$data = [];
	$sql = "SELECT * FROM $table";

	if ($fiels_name && $field_val) {
		$sql .= " WHERE $fiels_name  LIKE '%$field_val%'";
	}

	if ($limit) {
		$sql .= " LIMIT $limit";
	}
	
	$res = mysqli_query($mysqli,$sql);

	if ($res && mysqli_num_rows($res)) {
		while ($row = mysqli_fetch_assoc($res)) {
			$data[] = $row;
		}
	}

	return $data;
}

function get_order($table,$fiels_name = false,$field_val = false,$fiels_name2 = false,$field_val2 = false,$orderby = false,$desc = false){
	global $mysqli;
	$data = [];
	$sql = "SELECT * FROM $table";

	if ($fiels_name && $field_val) {
		$sql .= " WHERE $fiels_name  LIKE '%$field_val%'";
	}
	if ($fiels_name2 && $field_val2) {
		$sql .= " AND $fiels_name2  LIKE '%$field_val2%'";
	}
	if ($orderby && $desc) {
		$sql .= " ORDER BY $orderby $desc";
	}
	
	$res = mysqli_query($mysqli,$sql);

	if ($res && mysqli_num_rows($res)) {
		while ($row = mysqli_fetch_assoc($res)) {
			$data[] = $row;
		}
	}

	return $data;
}
function get_order3($table,$fiels_name = false,$field_val = false,$fiels_name2 = false,$field_val2 = false,$orderby = false,$desc = false){
	global $mysqli;
	$data = [];
	$sql = "SELECT * FROM $table";

	if ($fiels_name && $field_val) {
		$sql .= " WHERE $fiels_name  = '$field_val'";
	}
	if ($fiels_name2 && $field_val2) {
		$sql .= " AND $fiels_name2  = '$field_val2'";
	}
	if ($orderby && $desc) {
		$sql .= " ORDER BY $orderby $desc";
	}
	
	$res = mysqli_query($mysqli,$sql);

	if ($res && mysqli_num_rows($res)) {
		while ($row = mysqli_fetch_assoc($res)) {
			$data[] = $row;
		}
	}

	return $data;
}
function get_order2($table,$fiels_name = false,$field_val = false,$orderby = false,$desc = false){
	global $mysqli;
	$data = [];
	$sql = "SELECT * FROM $table";

	if ($fiels_name && $field_val) {
		$sql .= " WHERE $fiels_name  = '$field_val'";
	}
	
	if ($orderby && $desc) {
		$sql .= " ORDER BY $orderby $desc";
	}
	
	$res = mysqli_query($mysqli,$sql);

	if ($res && mysqli_num_rows($res)) {
		while ($row = mysqli_fetch_assoc($res)) {
			$data[] = $row;
		}
	}

	return $data;
}

function get_one($table,$field_name,$field_value){
	global $mysqli;
	$sql = "SELECT * FROM $table WHERE $field_name = '$field_value'";

	$res = mysqli_query($mysqli,$sql);

	
	return mysqli_fetch_assoc($res);
}

function get_count($table,$fiels_name = false,$field_val = false){
	global $mysqli;
	$sql = "SELECT * FROM $table ";
	if ($fiels_name && $field_val) {
		$sql .= " WHERE $fiels_name  LIKE '%$field_val%'";
	}
	$res = mysqli_query($mysqli,$sql);
	
	return $res ? mysqli_num_rows($res) : 0;
}


function get_count2($table,$fiels_name = false,$field_val = false,$fiels_name2 = false,$field_val2 = false){
	global $mysqli;
	$sql = "SELECT * FROM $table ";
	if ($fiels_name && $field_val) {
		$sql .= " WHERE $fiels_name  = '%$field_val%'";
	}
	if ($fiels_name2 && $field_val2) {
		$sql .= " AND $fiels_name2  = '%$field_val2%'";
	}
	$res = mysqli_query($mysqli,$sql);
	
	return $res ? mysqli_num_rows($res) : 0;
}

function delete($table,$field_name,$field_value){
	global $mysqli;
	$sql = "DELETE FROM $table WHERE $field_name = '$field_value'";

	$res = mysqli_query($mysqli,$sql);

	return $res ? true : false;
}


function insert($table,$data = []){
	global $mysqli;
	$fields = array_keys($data);
	$values = array_values($data);
	$fields = implode('`,`', $fields);
	$values = implode("','", $values);

	$sql = "INSERT INTO $table (`$fields`) VALUES ('$values')";
	// echo $sql;die;
	if (mysqli_query($mysqli,$sql)) {
		// echo mysqli_insert_id($mysqli);die;
		return mysqli_insert_id($mysqli);
	}else{
		return false;
	}

	
}


function update($table,$data = [],$where = []){
	global $mysqli;
	$sql = "UPDATE $table set ";

	foreach ($data as $key => $value) {
		$sql .= "$key = '$value' , ";
	}
	$sql = rtrim($sql,' ,')." WHERE ";
	foreach ($where as $key => $value) {
		$sql .= "$key = '$value' AND ";
	}

	$sql = rtrim($sql,' AND ');

	return mysqli_query($mysqli,$sql);

	// print_r($where);

	// echo $sql;
	// echo '<br/>';
	// echo $sql1;
	// echo '</pre>';
}
?>

