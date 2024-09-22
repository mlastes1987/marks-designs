<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="webmaster" content="webmaster@marks-designs.com"  />
<meta name="keywords" content="Graphics, Designs, Posters, Art, Business Cards, Advertisements, Logos, Websites, Graphic Design, Web Design" />
<meta name="description" content="Websites, Graphics, Art and more!" />
<title>Mark's Designs v3.0!  Websites, Graphics, Art and more!</title>
<style type="text/css">
body {
	font-family: Arial;
	font-size: 8pt;
	color: #000000;
}
table {
	font-family: Arial;
	font-size: 8pt;
	color: #000000;
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:active {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #000000;
	text-decoration: none;
}
a:hover {
	color: #FF0000;
	text-decoration: none;
}
.Layer1 {
	position: absolute;
	z-index: 0;
	height: 1000px;
	width: 900px;
	top: 0px;
	left: 0px;
}
.Layer2 {
	position: absolute;
	z-index: 1;
	height: 0px;
	width: 216px;
	left: 13px;
	top: 256px;
}
.Layer3 {
	position: absolute;
	z-index: 2;
	height: 763px;
	width: 641px;
	left: 245px;
	top: 228px;
}
</style>
</head>
<body bgcolor="#E7E1E1" marginwidth="100" marginheight="50" topmargin="100" bottommargin="100" leftmargin="100" rightmargin="100">
<div class="Layer1"><img src="/img/layout3.jpg" /></div>
<div class="Layer2">
  <center>
    <a href="/index.php"><img src="/img/homebutton.jpg" /></a><br />
    <a href="/fusion" target="_blank"><img src="/img/staffloginbutton.jpg" /></a><br />
    <a href="/forums" target="_blank"><img src="/img/forumsbutton.jpg" /></a><br />
    <a href="/index.php?page=aboutus"><img src="/img/aboutusbutton.jpg" /></a><br />
    <a href="/index.php?page=packages"><img src="/img/designpkgbutton.jpg" /></a><br />
    <a href="/index.php?page=webmgmt"><img src="/img/webmgmtbutton.jpg" /></a><br />
    <a href="http://mcworlds.marks-designs.com" target="_blank"><img src="http://mcworlds.marks-designs.com/img/mcworldsbutton.jpg" /></a>
  </center>
</div>
<div class="Layer3">
<?PHP switch($_GET['page'])
{
    case "aboutus":     include('aboutus.php');     break;
    case "packages":  include('packages.php');  break;
	case "webmgmt":   include('webmgmt.php');  break;
    default:         include('fusion/news.php');      break;
} ?></div>
</body>
</html>