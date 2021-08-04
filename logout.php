<?php
session_start();
header("location:travelo.php");
unset($_SESSION['email']);
