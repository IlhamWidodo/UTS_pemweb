<?php

$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'db-pemweb';


$db_connect = mysqli_connect($DBHOST,$DBUSER,$DBPASSWORD,$DBNAME);

if(mysqli_connect_errno()){
    die ("failed connect to mysql ".mysqli_connect_error()); 
} else {
    echo "Koneksi berhasil!";
}

?>