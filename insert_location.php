<html>
<head>
</head>
<body>
<?php
$user_key=$_GET["key"];
$time=$_GET["time"];
$lon=$_GET["lon"];
~ 50 ~
$lat=$_GET["lat"];
$dbname='id2119234_airaid';
$conn=new mysqli("localhost","id2119234_abhinav","ps3isfun",$dbname);
if($conn->connect_error)
{
die("Connection error:" . $conn->connect_error);
}
echo "Connection to the database successful! <br> Inserting data . . . <br>";
$query="INSERT INTO crash_log(user_key,time_of_crash,longitude,latitude)
VALUES('$user_key','$time',$lon,$lat)";
$insert=$conn->query($query);
if(!$insert)
{
die("Unexpected error : " . $conn->errno);
}
echo "Successfully inserted into database <br>";
$conn->close();
?>
</body>
</html>