<?php
    header("Content-type: text/css; charset: UTF-8");
	$url = 55;
?>


body {
	position: relative;
	min-height: 565px;
	padding-bottom: 65px;
	margin: 0;

}


header {
	margin-top: 0px;
	border: 0px;

	background-color:#0099FF;
	/*background-image:url(images/logo.png);*/
	height:110px;
	width:100%;
	text-align: center;
	color: rgba(0,0,0,0.9);
	/*text-decoration: underline; */

}

header p {
	margin: 0;
	padding: 0;
	font-size: 60px;
	color: rgba(0,0,0,0.9);
	/*text-shadow: 3px 3px 3px rgba(0,0,0,0.8); */

}

header ul li  {
	
	list-style: none;
	display: inline;
	height: 30px;
	margin: 5px;
	background-color: #fff;

}

.button {
	text-align: center;
	font-weight: bold;
	vertical-align: baseline;
	height: 30px;
	padding: 5px;

}

header ul li a {
	text-decoration: none;
	color: #09f;
}

#main {
	margin: auto;
	width: 900px;
	padding-left: 10px;
	height: 100%;

}

footer {
	position: absolute;
	bottom:0px;
	margin-top:40px;
	width:100%;
	height:58px;
	background-color:#0099FF;
	color:#fff;
	text-align:center;
}

nav {
	float: left;
	padding-left: 20px;
	width: 300px;
}

#error
{
	font-family: sans-serif;
	height: 10px;
	width: 900px;
	margin: auto;
	border: 1px solid #800000;
	background: #FFC0CB;
	text-align: left;
	border-radius: 5px;
	box-shadow: 0px 1px 1px #FFF inset;
	background-repeat: no-repeat;
	background-position: 5px 50%;
	padding: 10px 10px 10px 25px;
	

}

#success
{
	font-family: sans-serif;
	height: 10px;
	width: 900px;
	margin: auto;
	border: 1px solid #0099FF;
	text-align: left;
	border-radius: 5px;
	background-color: #EBF8A4;
	box-shadow: 0px 1px 1px #FFF inset;
	background-repeat: no-repeat;
	background-position: 5px 50%;
	padding: 10px 10px 10px 25px;
	


}

#loader
{
	display: none;
	width: 140px;
    height:100px;
    text-align: left;
    position: fixed;
    top: 50%;
    left: 50%;
    margin-left:-70px;
    margin-top:-50px;   

}

#ajaxloader
{
	position: absolute;
	width: 30px;
	height: 30px;
	left: 50%;
	top: 15%;
	margin: 0 0 0 -15px;
	border: 8px solid #0099FF;
	border-right-color: #404040;
	border-radius: 50%;
	box-shadow: 0 0 25px 2px #000;
	-webkit-animation: spin 1s linear infinite;
	-moz-animation: spin 1s linear infinite;
	-ms-animation: spin 1s linear infinite;
	-o-animation: spin 1s linear infinite;
	animation: spin 1s linear infinite;

}

@-webkit-keyframes spin
{
	from { -webkit-transform: rotate(0deg); opacity: 0.4; }
	50%  { -webkit-transform: rotate(180deg); opacity: 1; }
	to   { -webkit-transform: rotate(360deg); opacity: 0.4; }
}

@-moz-keyframes spin
{
	from { -moz-transform: rotate(0deg); opacity: 0.4; }
	50%  { -moz-transform: rotate(180deg); opacity: 1; }
	to   { -moz-transform: rotate(360deg); opacity: 0.4; }
}

@-ms-keyframes spin
{
	from { -ms-transform: rotate(0deg); opacity: 0.4; }
	50%  { -ms-transform: rotate(180deg); opacity: 1; }
	to   { -ms-transform: rotate(360deg); opacity: 0.4; }
}

@-o-keyframes spin
{
	from { -o-transform: rotate(0deg); opacity: 0.4; }
	50%  { -o-transform: rotate(180deg); opacity: 1; }
	to   { -o-transform: rotate(360deg); opacity: 0.4; }
}

@keyframes spin
{
	from { transform: rotate(0deg); opacity: 1; }
	50%  { transform: rotate(180deg); opacity: 1; }
	to   { transform: rotate(360deg); opacity: 1; }
}
