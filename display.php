<html>
<body>
<h>TICKETING APPLICATION</h>

<form method="GET" action="display.php">
Destination:<br>
<input type="text" name="Dest"><br>
Source:<br>
<input type="text" name="Src"><br>
Price:<br>
<input type="text" name="Price"><br><br>
<input type="submit" value="Submit"><br>

</form>
</body>
</html>

<?php
	$Dest = $_GET["Dest"];
	$Src = $_GET["Src"];
	$Price=$_GET["Price"];
$db_host = 'localhost';
$db_username = 'username';
$db_password = 'password';
$db_name = 'TicketApp';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Ticket where dest='$Dest'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
        while($row = $result->fetch_assoc()) 
	{
        echo "  " . $row["Fname"]. "  " . $row["Aname"]." "  . $row["dest"]. " "  . $row["src"]." "  . $row["ddate"]." "  . $row["dtime"]." "  . $row["adate"]." "  . $row["adate"]." "  . $row["atime"]." "  . $row["price"]."<br>";
	}
} 
else 
{
    echo "0 results";
}

$conn->close();
?>