<html>
<?php
// Start the session
session_start();
?>
	<head>
		<style>
			
			#title{
				background-color:#00b300;
				font-size:33px;
				
				
				color:white;
				margin-left:20px;
				margin-top:20px;
				margin-bottom:20px;
				
				}
				
			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #00b300;
			}
			
			li {
				float: right;
			}
			
			#titlehead{
				float: left;
			}

			li a {
				display: block;
				color: white;
				font-size:20px;
				text-align: center;
				padding: 16px 20px;
				margin-top:10px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
				background-color: #4dff4d;
			}

			.active {
				background-color: #4dff4d;
			}
			
			#home_img{
				padding-left:50px;
				padding-bottom:10px;
				
			}
			
			#bottom_posts{
				
				display: grid;
				grid-template-columns: auto auto auto;
				padding: 10px;
			
			}
			
			#img_title{
				
				display: grid;
				grid-template-columns: auto auto auto;
				padding: 10px;
			
			}
			
			#posts{
				padding: 20px;
				font-size: 30px;
				text-align: center;
			
			}
			
			#card{
				background-color:#FFFFEF;
				margin:150px;
				height:150px:
				border-radius:5px;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
				text-align:center;
				font-size:24px;
				padding:25px;
				margin-left:200px;
				margin-right:200px;
			}
			
			#done{
				background-color: #00b300;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			
			}
			
		</style>
	</head>
	
	<body>
		
	<?php
        if($_SESSION["adminid"] === ""){
          echo $_SESSION['adminid'];
          echo "login";
          header("Location: home.php ");
        }
      ?>
		
		<ul>
			<li id="titlehead"><p id="title">Star Pharmacy</p></li>
			<li style=margin-right:10px;><a href="admin_logout.php">Logout</a></li>
			<li><a class="active" href="admin_home.php">Admin</a></li>
			</ul>

<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname ="pharmacydb";

		
		$conn = new mysqli($servername, $username, $password, $dbname);
	
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "CREATE TABLE IF NOT EXISTS pharmacist_database (
			pharmacist_id VARCHAR(50) PRIMARY KEY,
			admin_id VARCHAR(20),
			pharmacist_name VARCHAR(50), 
			pharmacist_password VARCHAR(50),
			pharmacist_phone VARCHAR(50),
			pharmacist_email VARCHAR(50),
			FOREIGN KEY (admin_id) REFERENCES admin_database (admin_id)
		)";

		if ($conn->query($sql) === TRUE) {
		//echo "Table created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}
		
		$pharmacistid = filter_input(INPUT_GET,'pharmacistid');
		$adminid = filter_input(INPUT_GET,'adminid');
		$pharmacistname = filter_input(INPUT_GET,'name');
		$pharmacistpass = filter_input(INPUT_GET,'pass');
		$pharmacistnumber = filter_input(INPUT_GET,'number');
		$pharmacistemail = filter_input(INPUT_GET,'email');
		


		$sql = "INSERT INTO pharmacist_database (pharmacist_id, admin_id, pharmacist_name, pharmacist_password, pharmacist_phone, pharmacist_email) 
		VALUES ('$pharmacistid', '$adminid', '$pharmacistname', '$pharmacistpass','$pharmacistnumber','$pharmacistemail')";


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	echo "<div id='card'><p>New Pharmacist Successfully Added</p><form action='admin_home.php' method='get'><button type='submit' id='done'>Done</button></form></div>";
		
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

		$conn->close();
		
		?>
		
</body>
	
	
	


</html>