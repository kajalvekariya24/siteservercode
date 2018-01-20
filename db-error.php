<?php // custom WordPress database error page

  header('HTTP/1.1 503 Service Temporarily Unavailable');
  header('Status: 503 Service Temporarily Unavailable');
  header('Retry-After: 600'); // 1 hour = 3600 seconds

  // If you wish to email yourself upon an error
  // mail("your@email.com", "Database Error", "There is a problem with the database!", "From: DB Error");

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Website Under Maintenance</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
		<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
		<style>
a{text-decoration:none;}
body {
	background-color: #f8f7ff;
	background-repeat: repeat-x;
	font-family: 'Unica One', cursive;
}
img{width:50%;padding:5% 5% 0 5%;}
html,body,div,span,h1,h2,h3,h4,h5,h6,p{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
@media only screen and (max-width: 1440px) and (min-width: 1366px)
{img{width:50%;padding:5% 5% 0 5%;}}
@media only screen and (max-width: 1366px) and (min-width: 1280px)
{img{width:50%;padding:5% 5% 0 5%;}}
@media only screen and (max-width: 1280px) and (min-width: 1024px)
{img{width:60%;padding:5% 5% 0 5%;}}
@media only screen and (max-width: 1024px) and (min-width: 768px)
{img{width:80%;padding:5% 5% 0 5%;}}
@media only screen and (max-width:768px) and (min-width: 640px)
{img{width:80%;padding:5% 5% 0 5%;}}
@media only screen and (max-width:640px) and (min-width: 480px)
{img{width:90%;padding:5% 5% 0 5%;}}
@media only screen and (max-width:480px) and (min-width: 320px)
{img{width:90%;padding:5% 5% 0 5%;}}
</style></head>
<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" bottommargin="0">
<center>
<img src="http://hst.aistechnolabs.xyz/email-templates/logos/seo-company-experts.png">
<h1 style="font-family: 'Unica One', cursive;font-size:40px;color: #000;padding-top:100px;">Website Under Maintenance - Will be back soon!</h1>
 <p style="font-family: 'Unica One', cursive;font-size:20px;color: #000;padding-top:20px;">Drop Your Message at:<a href="biz@seocompanyexperts.com"> biz@seocompanyexperts.com</a> or Call: <a href="tel:+1 (917) 668 8461">+1 (917) 668 8461</a></p>
</center>
</body>
</html>