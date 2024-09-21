<html>
<head>
<title>Mark's Designs - Websites, Graphics and More!</title>
<meta name="webmaster" content="webmaster@marks-designs.com" />
<meta name="keywords" content="Websites, Web Design, Mark's Design, Graphics, Graphics Design, Art" />
<meta name="description" content="Websites, Graphics and More!" />
<style type="text/css">
body, table {
  font-family: Arial;
  font-size: 8pt;
  color: #FFFFFF;
}
a:link {
  color: #FFFFFF;
  text-decoration: none;
}
a:active {
  color: #FFFFFF;
  text-decoration: none;
}
a:visited {
  color: #FFFFFF;
  text-decoration: none;
}
a:hover {
  color: #FF0000;
  text-decoration: none;
}
#Layer1 {
	position:absolute;
	width:1024px;
	height:768px;
	z-index:1;
	left: 0px;
	top: 0px;
}
#Layer2 {
	position: absolute;
	width: 136px;
	height: 0px;
	z-index: 2;
	left: 80px;
	top: 296px;
}
#Layer3 {
	position: absolute;
	width: 652px;
	height: 0px;
	z-index: 3;
	left: 285px;
	top: 265px;
}
</style>
</head>
<body background="/img/bg.jpg" marginwidth="100" marginheight="50" topmargin="100" bottommargin="100" leftmargin="100" rightmargin="100">
<div id="Layer1"><img src="/img/layout.jpg"></div>
<div id="Layer2">
<center>
<a href="/index.php">Home</a><br>
<a href="/fusion" target="_blank">Staff Login</a><br>
<a href="/forums" target="_blank">Forums</a><br>
<a href="/gallery" target="_blank">Gallery</a><br>
<a href="/index.php?page=aboutus">About Us</a><br>
<a href="/index.php?page=packages">Design Packages</a><br>
<br>
<a href="mailto:webmaster@marks-designs.com">Webmaster</a><br>
<br>
&copy; 2015 <a href="http://www.marks-designs.com">Mark's Designs</a></center></div>
<div id="Layer3"><?PHP switch($_GET['page'])
{
    case "aboutus":     include('aboutus.php');     break;
    case "packages":  include('packages.php');  break;
    default:         include('fusion/news.php');      break;
} ?></div>
</body>
</html>