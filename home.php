<html>
<?php
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
				color: white;
				display: grid;
				grid-template-columns: auto auto auto;
				padding: 10px;
			
			}
			
			#img_title{
				
				display: grid;
				grid-template-columns: auto auto auto;
				padding: 5px;
			
			}
			
			#posts
			{
				padding: 20px;
				font-size: 30px;
				text-align: center;
				color: white;
			
			}
			body{
				background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(./image/star.jpg);
    			height: 100vh;
    			background-size: cover;
    			background-position: center;
			}
			#footer
			{
			
    		display: flex;
    		justify-content: space-around;
    		background: #141224;
		
  			}
  
  			.copyright{
   			 text-align: center;
    		padding: 30px 0 30px 0;
    		color: white;
    		font-size: 15px;
			
  			}
			
		</style>
	</head>
	
	<body>
		
		
		
		<ul>
			<li id="titlehead"><p id="title"> Star Pharmacy</p></li>
			<li style=margin-right:10px;><a href="admin_login.php">Admin</a></li>
			<li><a href="pharmacist_login.php">Pharmacist</a></li>
			<li><a href="user_login.php">User</a></li>
			<li><a class="active" href="home.php">Home</a></li>
		</ul>
		
		<div id=bottom_posts>
		
			<div id=posts>
				<h2 style="font-size:28px;"> Pharmacy Info </h2>
				<div id=img_title>
					<img src="image\pharmacy.png">
					<p style="font-size:20px;"> Easily access the pharmacy details </p>
				
				</div>
			
			</div>
			
			<div id=posts>
				<h2 style="font-size:28px;"> Medicine Details</h2>
				<div id=img_title>
					<img src="image\medicinemain.png">
					<p style="font-size:20px;">Medicines can be added easily</p>
				
				</div>
			</div>
			
			<div id=posts>
				<h2 style="font-size:28px;"> Easy Access for Users </h2>
				<div id=img_title>
					<img src="image\searchimg.png">
					<p style="font-size:20px;">Any medicines can be accessed in few seconds</p>
				
				</div>
			</div>
		
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<footer id="footer" class="section-bg">
    		<div class="copyright">
       		<strong>KIRAN YADAV & MANOJNA</strong>
    		</div>
    		</footer>
		<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";

		$conn = new mysqli($servername, $username, $password);
	
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

	
		$sql = "CREATE DATABASE IF NOT EXISTS pharmacydb";
		if ($conn->query($sql) === TRUE) {
			//echo "Database created successfully";		
		$conn->close();
		}
		?>
		
	</body>
	
</html>