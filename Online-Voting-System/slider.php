<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
#container{
width:800px;
overflow:hidden;
}
#sliderbox{
position:relative;
width:3200px;
animation-name:slideranimation;
animaton-duration:20s;
animation-iteration-count:infinite;

}
#sliderbox img{
float:left;
}
@keyframes slideanimation{
0%{
	left:0px;
}
20% /*of 4 seconds*/{
left:-0px;
}
25% /*of 5 seconds*/{
left:-800px;
}

45% /*of 9 seconds*/{
left:-800px;
}
50% /*of 10 seconds*/{
left:-1600px;
}
70% /*of 14 seconds*/{
left:-1600px;
}
75% /*of 15 seconds*/{
left:-2400px;
}

}
</style>
</head>

<body>
<div id="container">
			<div id="sliderbox">
			<img src="images/image-slider/1.jpg" />
			<img src="images/image-slider/2.jpg"/>
			<img src="images/image-slider/3.jpg" />
			</div>
		</div>
</body>
</html>
