<?php
$con = mysqli_connect("my_host", "my_user", "my_password", "my_db");

$username = $_POST("username");
$password = $_POST("password");

$statement = mysql_prepare($con, "SELECT * FROM user WHERE username = ? AND password = ?");
mysql_stmt_bind_param($statement, "ss", $username, $password);
mysql_stmt_bind_execute($statement);

msql_stmt_store_result($statement)
mysql_stmt_bind_result($statement, $userID, $name, $size, $username, $password);

$response = array();
$response["success"] = false;

while (mysql_stmt_fetch($statement)){
	$response["success"] = true;
	$response["name"] = $name;
	$response["size"] = $size;
	$response["username"] = $username;
	$response["password"] = $password;
}

echo json_encode($response);
?>