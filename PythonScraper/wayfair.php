
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="vanilaphp";
 ini_set('short_open_tag', 'on');
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	$sql="select * from product_image where product_id='1'";
	$result=$conn->query($sql);
	if($result->num_rows==0){
		echo "error ".mysql_error();
	}
	
$conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

<div class="container">
		<div class="row">
			<div class="col-lg"></div>
			<img src="images/wayfair.jpg">
			<?php while ($row=$result->fetch_assoc()) { ?>
				<button class="btn" id="button<?php echo $row['id']?>"></button>	
			<?php } ?>				
		</div>
	
</div>
</div>

<script type="text/javascript">
	
</script>
</body>
</html>



