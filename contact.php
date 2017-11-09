<html>
<head>
<style>
.main_body{
	background-color:#EFEFF1;
	height:1000px;
	}
.fieldset{
	background-color:#FFF;
	padding:10px;
	height:450px;
	margin:auto;
	border:0px;
	}
.legend{
	padding-top:50px;
	padding-left:50px;
	font-family:Arial, Helvetica, sans-serif;
	}
.form{
	height:300px;
	width:500px;
	margin:auto;
	background-color:#EFEFEF;
	border-radius:10px;
	padding:10px;
	border:solid 2px #CCCCCC;
	}
.form input{
	width:500px;
	}
.form p{
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:13px;
	}
</style>
</head>

<div class="main_body">
<fieldset class="fieldset">
<legend class="legend">Contact Us</legend>
<form class="form">
<p>Name</p>
<input type="text" name="name"  />
<p> E-mail *</p>
<input type="email" name="mail" />
<p>Message *</p>
<textarea style="width:500px; height:70px;"> </textarea>
<p><input type="submit" name="submit" value="submit" style="width:150px;"/></p>
</form>
</fieldset>
</div>
</html>