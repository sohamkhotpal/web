<?php
session_start();
unset($_SESSION['name']);
echo' you have cleaned  the session';
header('location:index.php');