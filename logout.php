<?php 
session_start(); 
session_destroy(); 
header("Location: checkindex.html"); 
exit; 