<?php
	require_once('_global/server.php');
	require_once('_global/config.php');
	session_start();
	$_SESSION['postverify'] = '';
?>
<html>
	<head>
		<title><?php echo $option['title']; ?> | Submit</title>
		<link href="_style/jquery.min.js">
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
      		<div class="navbar-inner">
        		<div class="container">
          			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
          			</button>
          			<a class="brand" href="index.php"><?php echo $option['title']; ?></a>
          			<div class="nav-collapse collapse">
            			<ul class="nav">
              				<li class="">
                				<a href="index.php">Overview</a>
              				</li>
              				<li class="divider-vertical"></li>
            			</ul>
          			</div>
        		</div>
      		</div>
    	</div>
	</body>
</html>