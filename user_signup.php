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
				
		<ul>
			<li id="titlehead"><p id="title">Star Pharmacy</p></li>
			<li style=margin-right:10px;><a href="admin_login.php">Admin</a></li>
			<li><a href="pharmacist_login.php">Pharmacist</a></li>
			<li><a class="active" href="user_login.php">User</a></li>
			<li><a href="home.php">Home</a></li>
		</ul>
				
		<h2 style="font-style:italic; font-size:30px;padding-left:30px;">User Signup</h2>
		
		<div style="text-align:center;"> <img src="image\user.png">  </div>
		
		<div class="container">
			<form action="user_signup_action.php" method = "get">
				
				<div class="row">
					<div class="col-25">
						<label for="lname">User Id</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="userid" placeholder="Enter user Id...">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="lname">Pharmacist Id</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="pharmid" placeholder="Enter pharmacist Id...">
					</div>
				</div>
				
				<div class="row">
					<div class="col-25">
						<label for="lname">Name</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="name" placeholder=" Name...">
					</div>
				</div>
				
				<div class="row">
					<div class="col-25">
						<label for="lname">Password</label>
					</div>
					<div class="col-75">
						<input type="password" pattern=".{1,}" required name="pass" placeholder=" password...">
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