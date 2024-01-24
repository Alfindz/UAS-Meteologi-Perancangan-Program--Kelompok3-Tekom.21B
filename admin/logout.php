<?php
session_start();
session_destroy();
// p
echo "<script>alert('Anda telah logout!');</script>";
echo "<script>location='login.php';</script>";
