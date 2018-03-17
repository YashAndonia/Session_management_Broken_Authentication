<?php
require 'common.php';
session_unset();
session_destroy();
header('location:100_tut4_start.php');
 ?>
