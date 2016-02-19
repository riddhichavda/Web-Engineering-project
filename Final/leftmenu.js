<!DOCTYPE html>
<html>
<head><title>leftmenu</title>
<style>
body
{
background-color:#FA988B;
}

ul 
{
list-style-image: url('icon2.jpg');
text-align:justify;
font-family:cursive;
font-size:25px;
color:Indigo;
}


</style>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body >
<p>

<ul>
<li>Regular
<br><li>Occasion
<br><li>Fruit&cheesecakes
<br><li>Kids
<br><li>Wedding
<br><li>Special
</ul>
<script>
function changeImage()
{
element=document.getElementById('myimage')
if (element.src.match("Lavenderw"))
  {
  element.src="Lavenderw.jpg";
  }
else
  {
  element.src="Lavender.jpg";
  }
}
</script>

<img id="myimage" onclick="changeImage()"
src="Lavenderw.jpg" width="100" height="180">


</p>
</body>
</html>
