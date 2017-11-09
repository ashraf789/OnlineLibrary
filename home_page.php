<style>
.body{
	border:solid 1px #999999;
	padding-top:10px;
    height:1350px; 
	width:100%; 
	background-color:#FFF; 
	overflow:auto; 
	text-align:justify; 
	}
.body a:hover{
	color:#96F;
	}
.body .a2:hover{
	color:#C06;
	}
.body h4{
	padding:20px; 
	padding-bottom:0px;
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
mysql_connect('localhost','root','');
mysql_select_db('online_library');
?>
<?php
$query=mysql_query("SELECT article_si_no,article_heading,left(article, 2000) as article_short From article ORDER by article_si_no DESC");
while($row=mysql_fetch_assoc($query)){
?>

    <a href="index.php?a=article_full&amp;article_si=<?php echo $row["article_si_no"];?>">
      <h4><?php echo $row["article_heading"]; ?></h4>
    </a>
		<?php echo $row["article_short"]; ?>
        <a class="a2" href="index.php?a=article_full&amp;article_si=<?php echo $row["article_si_no"];?>">......Read More</a>
<?php } ?>
</div>
