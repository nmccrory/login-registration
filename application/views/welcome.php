<html>
	<head>
		<title>Welcome-<?=$user['first_name']?></title>
		<style>
			html{
				font-weight:300;
				font-family: sans-serif;
			}
			.container{
				border:2px solid #222;
				margin:0 auto;
				padding: 20px;
				width: 400px;
			}
			button{
				border:2px solid #222;
				outline:none;
				font-size: 11pt;
				border-radius: 5px;
				background-color: transparent;
			}
			h3{
				margin:0;
			}
			h4 {
				display:inline;
			}
			#navbar{
				width: fill;
				height: 60px;
			}
			#left{
				width:50%;
				float: left;
			}
			#right{
				width:50%;
				float:right;
				text-align: right;
			}
		</style>
	</head>
	<body>
		<div id="navbar">
			<span id="left">
				<h3>Welcome <?=$user['first_name']?></h3>
			</span>
			<span id="right">
				<form action="" method="post">
					<input type="hidden" name="action" value="logout">
					<button type="submit">Log out</button>
				</form>
			</span>
		</div>
		<div class="container">
			<div>
				<h2>User Information
				<h4>First Name:</h4><p><?=$user['first_name']?></p>
				<h4>Last Name: </h4><p><?=$user['last_name']?></p>
				<h4>Email Address: </h4><p><?=$user['email']?></p>
			</div>
		</div>
	</body>
</html>