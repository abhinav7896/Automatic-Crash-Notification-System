<html>
<head>
<script type = "text/javascript">
function main(){
// request permission on page load
document.addEventListener('DOMContentLoaded', function () {
if (!Notification) {
alert('Desktop notifications not available in your browser. Try Chromium.');
return;
}
else if (Notification.permission !== "granted")
Notification.requestPermission();
})
else {
var notification = new Notification('Crash Alert', {
icon: 'http://cdn.sstatic.net/stackexchange/img/logos/so/so-icon.png',
body: "Crash location is received!",
});
notification.onclick = function () {
~ 52 ~
window.open("https://www.google.co.in/maps/@17.5376861,78.3847198,16.64z?hl=
en");
};
}

}
</script>
</head>
<body>
<?php
$dbname='id2119234_airaid';
$conn=new mysqli("localhost","id2119234_abhinav","ps3isfun",$dbname);
if($conn->connect_error)
{
die("Connection error:" . $conn->connect_error);
}
echo "Connection to the database successful! <br> Getting data <br>";
$query="SELECT user_key,longitude,latitude FROM crash_log WHERE
user_key='5E7' ";
$fetched=$conn->query($query);
if(!$fetched)
{
die("Unexpected error : " . $conn->errno);
}
if ($fetched->num_rows > 0) {
// output data of each row
while($row = $fetched->fetch_assoc()) {
~ 53 ~
echo "User_key" . $row["user_key"] . "Latitude: " . $row["latitude"] . "Longitude" .
$row["longitude"]. "<br>";
}
echo "Calling main()";
echo "<script> main() </script>";
}
?>
</body>
</html>