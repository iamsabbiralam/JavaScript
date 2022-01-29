<?php
$con=mysqli_connect('localhost','root','P@ssword','autosave');

if(mysqli_connect_errno()){
	echo 'Failed to connect '.mysqli_connect_error();
}
?>