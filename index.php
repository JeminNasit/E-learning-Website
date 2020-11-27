<!DOCTYPE html>
<html>
<head>
<title>
Welcome to E-Learn
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header>
	<nav>
		<div class="row Clearfix">
			<img src="logo1.png"  class="logo">
			<ul class="ulin-nav animated slideInDown" id="checkclass">
				<li><a href="index.php">Home</a> </li>
				<li><a href="subjectwise.php">Subjects</a></li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="connectwithus.php">Connect with Us</a></li>
			</ul>
			<a href="#" class="micon" onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
		</div>
	</nav>
	<div class="main-con-body ">
		<h1> Welcome To E-Learn.</h1>
		<a href="subjectwise.php" class="btn btn-full">Start Learning</a>
		<a href="feedbackform.php" class="btn btn-empty">Send Feedback</a>
	</div>
</header>
<footer>
	<div id="footer">Copyright &copy; E-Learn.com</div>
</footer>
<Script  type="text/javascript" >
	function slideshow(){
		var x = document.getElementById("checkclass");
		if(x.style.display === "none"){
			x.style.display = "block";
		}
		else{
			x.style.display = "none";
		}
	}
</Script>
</body>
</html>
