<?php

session_start();
session_destroy();
session_start();
session_regenerate_id();
header("Location: ../index.php");

?>