<html lang="en"><head>
    <meta charset="utf-8">
    <title><?php echo $option['title']; ?> | Submit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="WireShout Internet Services">

    <link href="_style/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="_style/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php"><?php echo $option['title']; ?></a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="submit.php">Submit</a></li>
              <li><a href="vote.php">Vote</a></li>
            </ul>
            <?php if($option['debug'] == 'TRUE') { ?><ul class="nav pull-right">
            	<li class="dropdown open">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Session <b class="caret"></b></a>
              	<ul class="dropdown-menu">
                	<li><a>ID: <?php echo session_id(); ?></a></li>
                	<li class="divider"></li>
                	<li><a href="_global/clear.php">New Session...</a></li>
              	</ul><?php } ?>
            </li>
          </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
    	<?php if($option['debug'] == 'TRUE') { ?><div class="alert alert-info">
    		<b>Debug Mode is ENABLED. Please disable this before going live.</b><br>
			<ul>
				<li>Connection IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
				<li>Connection User-Agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
				<li>Request: <?php echo $_SERVER['REQUEST_URI']; ?></li>
				<li>GET Values : <?php echo $_SERVER['QUERY_STRING']; ?></li>
			</ul>
		</div><?php } ?>
    