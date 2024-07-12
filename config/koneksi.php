<php

$host = "localhost";
$username = "root";
$password = "";
$database = "aplikasi_tiket";

$koneksi = new mysqli($host, $username, $password, $database);
if ($koneksi){
	echo "database terkoneksi";
}else{
	echo "database tidak terkoneksi";
}
?>