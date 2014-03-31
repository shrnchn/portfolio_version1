<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sharon Chan - Web Developer & Designer</title>
	<meta name="description" content="Web Developer & Designer">
	<meta name="keywords" content="web developer, front end web developer, web designer, graphic designer, graphic design, design portfolio, portfolio, graphic design portfolio, designer, package design, editorial design, typography, wordpress theme designer, wedding site themes, wedding site design, personal website design">
	<meta name="author" content="Sharon Chan">
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic|Raleway:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $inquiry = $_POST['inquiry'];

//Sending Email to form owner
    $header = "From: $email\n"
    . "Reply-To: $email\n";
    $subject = "Submission From My Form";
    $email_to = "hello@sharonchan.ca";
    $message = "name: $name"
    . "email: $email\n" . "message: $message\n";
    mail($email_to, $subject ,$message ,$header ) ;

    ?>
		

	<div id="contact" class="contact">
		<h2><span class="kerning">//</span> thank you</h2>
		<p><a href="http://www.sharonchan.ca">Back to website</a></p>
	</div>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-48499152-1', 'sharonchan.ca');
	  ga('send', 'pageview');

	</script>

</body>
</html>