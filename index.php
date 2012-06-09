<?php
	require_once('_global/server.php');
	require_once('_global/config.php');
	$_SESSION['pagetitle'] = 'Index';
	$_SESSION['postverify'] = '';
	require_once('_global/createPage.php');
?>

      <h1><?php echo $_SESSION['pagetitle']; ?></h1>
      <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>
    
<?php require_once('_global/endPage.php'); ?>