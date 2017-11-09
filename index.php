<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Central Library </title>
    <!-- <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/conten_css.css" type="text/css" />
    <link src="js/log_in_script.js" type="text/javascript" /> -->
    <div>
    	
    	<?php include('all_css.php'); ?>
    </div>
</head>

<body class="main_body"  style="margin:0px; background-image:url(image/grass.jpg)">

    <div style="height:100px; background-color:#FFF; margin:auto"> 
      <div style="float:left "> 
        <img src="image/library_logo.jpg" style="float:left; padding-left:80px; padding-top:10px;  height:50px; width:400px;"/>
      </div>
      <div style="float:right ">
        <a href="" style="float:right; padding-right:80px; color:#C6C; padding-top:20px;">Registation </a>
        <a href="log_in/log_in.php" style="float:right; padding-right:20px; color:#C6C; padding-top:20px;">Log in </a>
      </div>
   </div>


	<div class="main" style="padding-top:px;" >
    	<div class="header" >
        	<?php include('header.php'); ?>
        </div>
		<div class="menu" >
			<?php include('menu.php');?>
        </div>
  
      <div class="slide">
      		<?php include('slide.php');?>
      </div>
		<div class="conten"> 
        	<?php include('conten.php');?>
		</div>
        <div class="footer">
          All Copiright By @ Ashraf
        </div>
</div>
</body>
</html>
