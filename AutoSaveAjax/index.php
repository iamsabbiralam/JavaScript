<!DOCTYPE html>



<html>


<head>


<title>AutoSave Post using PHP MySQL and AJAX</title>


<link type="text/css" rel="stylesheet" href="style.css" />


</head>



<body>


<div class="container">


<h1>Create a new post</h1>


<form>


<input type="text" name="title" placeholder="Enter post title" required><br /><br />


<textarea placeholder="Enter content" name="content" required></textarea><br /><br />


<input type="hidden" name="id" />


</form>



<div id='message'></div>


</div>


<script type="text/javascript" src="ajax.js"></script>


</body></html>