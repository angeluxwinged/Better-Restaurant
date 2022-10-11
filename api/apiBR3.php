<?php  
//conexion db
$username = "root";
$password = "";
$dbname = "better-restaurant";
$servername = "localhost";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

//metodo de conexion
$id="";
$method = $_SERVER['REQUEST_METHOD'];
if (isset($_SERVER['PATH_INFO'])){
	$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));
}

switch ($method){
	case 'GET':
		$sql = "SELECT * FROM alitas;";
		$result = mysqli_query($conn, $sql);
		break;
	
	case 'POST':
		break;
}

//creando json
if ($method == 'GET'){
	if (!$id) echo '[';
	for ($i=0; $i<mysqli_num_rows($result); $i++){
		echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
	}
	if(!$id) echo ']';
	}else if($method == 'POST'){
		echo json_encode($result);
	}else{

	}

$conn->close();
?>