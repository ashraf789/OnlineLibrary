<?php
mysql_connect('localhost','root','');
mysql_select_db('online_library');
?>
 <style>
.body{
	border:solid 1px #999999;
	padding-top:0px;
    height:1340px; 
	width:97%; 
	background-color:#FFF;  
	text-align:justify; 
	overflow:auto;
	padding:10px;
	}

.body h4{
	padding:20px; 
	padding-bottom:0px;
	}
.body h4:hover{
	color:#C9F;
	}
.body p{
	padding:20px; 
	padding-top:0px; 
	color:#363636;
	font-size:12px;
	}
</style>			
<div class="body">		
<?php
			
	$article_si=$_GET['article_si'];
	$query=mysql_query("Select * from article where article_si_no='$article_si' ");
	while($row=mysql_fetch_assoc($query)){
	?>  	
	    <a href=""><h4>
		<?php echo $row["article_heading"]; ?>
    </h4></a>
		<?php echo $row["article"]; ?>

<?php } ?>
</div>