<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.8, user-scalable=no">
		<title>Cross-Selling-Профиль</title>
		<script src="script/profl2.js"defer></script>
		<link rel="stylesheet" href="style/profl2.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
		<link rel="shortcut icon" href="logo.png" type="image/x-icon">

	</head>
	<body>
		<form action="check.php" method="post">
		</form>
		<div id="vse">
		
		<div id="panel">
				<div id="ikon"><img src="/ProfilePicB.png" width="100%" height="100%"></div>
				<div id="help"><img src="/help.png" width="100%" height="100%"></div>
				<div id="MyWorks"><img src="/MyWorks.png" width="100%" height="100%"></div>
				<div id="Purchases"><img src="/Purchases.png" width="100%" height="100%"></div>
			</div>
			<div id="ikon2"><img src="/ProfilePicB.png" width="100%" height="100%"></div>
			<div id="biog"><h2>Biography</h2></div>
			<div id="name"><P><h3><?=$_COOKIE['user']?></h3></P></div>
			<div id="age"></div>
			<p><textarea id="vesty"></textarea></p>
		</div>
		

	</body>
</html>