<html>
<?php
// Start the session
session_start();
?>
	<head>
		<style>
			
			#title{
				background-color:#00b300;
				font-size:24px;
				color:#E53935;
				
				color:white;
				margin-left:20px;
				
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
			
			* {
				box-sizing: border-box;
			}

			input[type=text], select, textarea,input[type=password],input[type=email],input[type=number],input[type=date] {
				margin-right:400px;
				text-align:center;
				width: 40%;
				padding: 12px;
				border: 1px solid #ccc;
				border-radius: 4px;
				resize: vertical;
			}

			label {
				font-size:18px;
				margin-left:450px;
				padding: 12px 12px 12px 0;
				display: inline-block;
			}

			input[type=submit] {
				background-color: #00b300;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				float: right;
			}

			input[type=submit]:hover {
				background-color: #4dff4d;
			}

			.container {
			    
				border-radius: 5px;
				background-color: #ffffff;
				padding: 20px;
			}

			.col-25 {
				float: left;
				width: 50%;
				margin-top: 6px;
			}

			.col-75 {
				float: left;
				width: 50%;
				margin-top: 6px;
			}


			.row:after {
				content: "";
				display: table;
				clear: both;
			}

		
			@media screen and (max-width: 600px) {
				.col-25, .col-75, input[type=submit] {
					width: 100%;
					margin-top: 0;
				}
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
		
		
		
		<h2 style="font-style:italic; font-size:30px;padding-left:30px;">Add New Admin</h2>
		
		<div style="text-align:center;"> <img src="image\admin.png">  </div>
		
		<div class="container">
			<form action="add_admin_action.php" method = "get">
				
				<div class="row">
					<div class="col-25">
						<label for="lname">Admin Id</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="adminid" placeholder="Enter admin Id...">
					</div>
				</div>
				
				<div class="row">
					<div class="col-25">
						<label for="lname">Name</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="name" placeholder="Name...">
					</div>
				</div>
				
				<div class="row">
					<div class="col-25">
						<label for="lname">Password</label>
					</div>
					<div class="col-75">
						<input type="password" pattern=".{1,}" required name="pass" placeholder="password...">
					</div>
				</div>
				
				<div class="row">
					<div class="col-25">
						<label for="lname">Phone Number</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="number" placeholder=" phone no...">
					</div>
				</div>
				
				<div class="row">
					<div class="col-25">
						<label for="lname">E-mail</label>
					</div>
					<div class="col-75">
						<input type="email" pattern=".{1,}" required name="email" placeholder="email address...">
					</div>
				</div>
				
				
				
				<div class="row">
					<input type="submit" style="margin-right:600px; margin-top:10px;" value="Submit">
				</div>
			</form>
			
			
			
		</div>
		
		
		
		
	</body>
	
	
	


</html>