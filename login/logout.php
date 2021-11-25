<?php
 session_start(); // memulai session
 session_destroy(); // menghapus session
 header("location:login.php"); // mengambalikan ke login.php
 ?>