<?php
include 'conn.php';
$customer_name = $_POST['customer_name'];
$content = $_POST['content'];
if($customer_name != "" && $content != ""){
	$sql = $conn->query("INSERT INTO review (customer_name, content)
			VALUES ('$customer_name', '$content')");
	echo json_encode(array("statusCode"=>200));
}
else{
	echo json_encode(array("statusCode"=>201));
}
$conn = null;

?>