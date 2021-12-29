<?php
$host = '****.mysql.database.azure.com';
$username = '****@mysql****';
$password = '****';
$db_name = '*****';

//Establishes the connection
$conn = mysqli_init();

printf("hello")
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
printf("sory");
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

// Run the create table query
if (mysqli_query($conn, '
select * from table1;
')) {
printf("Table created\n");
}

//Close the connection
mysqli_close($conn);
?>